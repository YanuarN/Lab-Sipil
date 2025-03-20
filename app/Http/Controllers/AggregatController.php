<?php

namespace App\Http\Controllers;

use App\Models\Agregat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use PhpOffice\PhpWord\TemplateProcessor;

class AggregatController extends Controller
{
    public function create(){
        return view('page.PermohonanBahan');
    }
    public function store(Request $request)
    {
        try {
            // Validasi data input
            $data = $request->validate([
                'email' => 'required|email',
                'nama' => 'required|string',
                'nim' => 'required|string',
                'judul_penelitian' => 'required|string',
                'instansi_tujuan' => 'required|string',
                'alamat_instansi' => 'required|string',
                'anggota' => 'nullable|array',
                'anggota.*.nama' => 'nullable|string',
                'anggota.*.nim' => 'nullable|string',
                'nama_material' => 'required|array'
            ]);
            
            // Pastikan anggota adalah array
            if (empty($data['anggota'])) {
                $data['anggota'] = [];
            }

            if (empty($data['nama_material'])) {
                $data['nama_material'] = [];
            }
            
            // Buat dan simpan record
            $agregat = new Agregat();
            $agregat->email = $data['email'];
            $agregat->nama = $data['nama'];
            $agregat->nim = $data['nim'];
            $agregat->judul_penelitian = $data['judul_penelitian'];
            $agregat->instansi_tujuan = $data['instansi_tujuan'];
            $agregat->alamat_instansi = $data['alamat_instansi'];
            $agregat->anggota = $data['anggota'];
            $agregat->nama_material= $data['nama_material'];
            $agregat->save();
            
            
            // Generate dan download Word document
            // return $this->generateWordDocument($request);
            
        } catch (Exception $e) {
            // Log error untuk debugging
            Log::error('Error saat menyimpan data agregat: ' . $e->getMessage());
            
            return redirect()->back()
                ->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }

    public function generatePermohonanBahan(string $id)
    {      
        $agregat = Agregat::findOrfail($id);  
        // Path ke template Word
        $templatePath = public_path('agregat.docx');
    
        $data = [
            'nama' => $agregat->nama,
            'nim' => $agregat->nim,
            'judul_penelitian' => $agregat->judul_penelitian,
            'instansi_tujuan' => $agregat->instansi_tujuan,
            'alamat_instansi' => $agregat->alamat_instansi,
        ];
        
        // Buat nama file output
        $outputFilename = 'Penelitian_' . str_replace(' ', '_', $data['nama']) . '_' . date('Ymd') . '.docx';
        $outputPath = storage_path('app/temp/' . $outputFilename);
        
        // Pastikan direktori temp ada
        if (!file_exists(storage_path('app/temp'))) {
            mkdir(storage_path('app/temp'), 0755, true);
        }
        
        // Load template menggunakan PhpWord
        $templateProcessor = new TemplateProcessor($templatePath);
        
        // Set nomor surat otomatis
        $lastId = DB::table('agregat')->max('id') ?? 0;
        $newId = $lastId + 1;
    
        // Format nomor surat
        $noSurat = "{$newId}/PA/Lab.Sipil/I/2025";
        $templateProcessor->setValue('no_surat', $noSurat);
    
        // Isi data utama (sanitize data untuk keamanan)
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }
        
        // Handle anggota array - convert to string format
        $anggotaList = $agregat->anggota ?? [];
        
        // Filter out empty entries
        $anggotaList = array_filter($anggotaList, function($anggota) {
            return !empty($anggota['nama']) || !empty($anggota['nim']);
        });
        
        // Determine how to handle anggota based on your template
        // Option 1: Convert to a formatted string for simple templates
        $anggotaText = '';
        foreach ($anggotaList as $index => $anggota) {
            $no = $index + 1;
            $nama = htmlspecialchars($anggota['nama'] ?? '-');
            $nim = htmlspecialchars($anggota['nim'] ?? '-');
            $anggotaText .= "{$no}. {$nama} ({$nim})\n";
        }
        $templateProcessor->setValue('anggota_text', $anggotaText ?: '(Tidak ada)');
        
        // Option 2: For templates with table-based cloning
        if (count($anggotaList) > 0) {
            $templateProcessor->cloneRow('anggota_nama', count($anggotaList));
            
            foreach ($anggotaList as $index => $anggota) {
                $rowIndex = $index + 1;
                $nama = htmlspecialchars($anggota['nama'] ?? '-');
                $nim = htmlspecialchars($anggota['nim'] ?? '-');
                $templateProcessor->setValue('no#' . $rowIndex, $rowIndex);
                $templateProcessor->setValue('anggota_nama#' . $rowIndex, $nama);
                $templateProcessor->setValue('anggota_nim#' . $rowIndex, $nim);
            }
        } else {
            // If no members, display default message
            $templateProcessor->setValue('no#1', '1');
            $templateProcessor->setValue('anggota_nama#1', '(Tidak ada)');
            $templateProcessor->setValue('anggota_nim#1', '(Tidak ada)');
        }
        
        // Handle nama_material array - similar to anggota
        $materialList = $agregat->nama_material ?? [];
        
        // Filter out empty entries if needed
        $materialList = array_filter($materialList, function($material) {
            return !empty($material['nama']) || !empty($material['jumlah']);
        });
        
        // Option 1: Convert to a formatted string for simple templates
        $materialText = '';
        foreach ($materialList as $index => $material) {
            $no = $index + 1;
            $nama = htmlspecialchars($material['nama'] ?? '-');
            $jumlah = htmlspecialchars($material['jumlah'] ?? '-');
            $materialText .= "{$no}. {$nama} ({$jumlah})\n";
        }
        $templateProcessor->setValue('nama_material_text', $materialText ?: '(Tidak ada)');
        
        // Option 2: For templates with table-based cloning
        if (count($materialList) > 0) {
            $templateProcessor->cloneRow('material_nama', count($materialList));
            
            foreach ($materialList as $index => $material) {
                $rowIndex = $index + 1;
                $nama = htmlspecialchars($material['nama'] ?? '-');
                $jumlah = htmlspecialchars($material['jumlah'] ?? '-');
                $templateProcessor->setValue('no#' . $rowIndex, $rowIndex);
                $templateProcessor->setValue('material_nama#' . $rowIndex, $nama);
                $templateProcessor->setValue('material_jumlah#' . $rowIndex, $jumlah);
            }
        } else {
            // If no materials, display default message
            $templateProcessor->setValue('no#1', '1');
            $templateProcessor->setValue('material_nama#1', '(Tidak ada)');
            $templateProcessor->setValue('material_jumlah#1', '(Tidak ada)');
        }
        
        // Simpan file
        $templateProcessor->saveAs($outputPath);
        
        // Mengembalikan dokumen untuk diunduh
        return response()->download($outputPath, $outputFilename, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ])->deleteFileAfterSend(true);
    }
}
