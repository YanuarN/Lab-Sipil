<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Lab;
use App\Models\booking;
use App\Models\DaftarAlat;
use App\Models\KepalaLab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpWord\TemplateProcessor;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab = Lab::all();
        $dosen = Dosen::all();
        $daftar_alat = DaftarAlat::all();
        $kepala_lab = KepalaLab::all();
        $booking = booking::all();
        return view('page.BookingMahasiswa', compact('lab', 'dosen', 'daftar_alat', 'kepala_lab', 'booking'));
    }

// Add this method to your PermohonanController.php

    public function getBookingEvents()
    {
        // Get counts of bookings by date
        $bookings = booking::select('tanggal_mulai', DB::raw('count(*) as count'))
            ->groupBy('tanggal_mulai')
            ->get();
        
        $events = [];
        foreach ($bookings as $booking) {
            $events[] = [
                'date' => $booking->tanggal_mulai,
                'count' => $booking->count
            ];
        }
        
        return response()->json($events);
    }

    public function checkKuota(Request $request)
    {
        try {
            $tanggal = $request->query('date');
            $kuotaMaksimal = 10;
    
            // Sesuaikan model dengan nama tabel booking Anda
            $jumlahBooking = booking::where('tanggal_mulai', $tanggal)->count();
    
            return response()->json([
                'status' => ($jumlahBooking >= $kuotaMaksimal) ? 'penuh' : 'tersedia',
                'sisa_kuota' => max(0, $kuotaMaksimal - $jumlahBooking),
                'message' => ($jumlahBooking >= $kuotaMaksimal) ? 'Kuota penuh' : 'Kuota tersedia',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage and generate document.
     */
    public function store(Request $request)
    {
        $existingBooking = booking::where('nim', $request->nim)
            ->where('status', '!=', 'selesai')
            ->first();

        if ($existingBooking) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nim' => 'NIM ini masih memiliki booking yang belum selesai. Silakan hubungi admin lab.']);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nim' => 'required|string|max:255',
            'nomor' => 'required',
            'prodi' => 'required|in:Sarjana Teknik Sipil,Magister Teknik Sipil',
            'judul_penelitian' => 'required|string|max:255',
            'lab_tujuan' => 'nullable',
            'pembimbing' => 'nullable',
            'instansi' => 'nullable|string|max:255',
            'alamat_di_solo' => 'nullable|string|max:255',
            'alamat_rumah' => 'nullable|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'alat' => 'nullable|array',
            'alat.*' => 'nullable|string',
            'status' => 'nullable|in:daftar,proses,selesai',
            'kepalalab' => 'nullable',
        ]);

        // Simpan data ke database
        $booking = new booking();
        $booking->nama = $request->nama;
        $booking->email = $request->email;
        $booking->nim = $request->nim;
        $booking->nomor = $request->nomor;
        $booking->prodi = $request->prodi;
        $booking->judul_penelitian = $request->judul_penelitian;
        $booking->lab_tujuan = $request->lab_tujuan;
        $booking->pembimbing = $request->pembimbing;
        $booking->instansi = $request->instansi;
        $booking->alamat_di_solo = $request->alamat_di_solo;
        $booking->alamat_rumah = $request->alamat_rumah;
        $booking->tanggal_mulai = $request->tanggal_mulai;
        $booking->tanggal_selesai = $request->tanggal_selesai;
        $booking->alat = $request['alat'];
        $booking->status = $request->status ?? 'daftar'; 
        $booking->kepala = $request->kepalalab;
        $booking->save();

        // Generate and return the document
        return $this->generateDocument($booking);
    }

    /**
     * Generate document based on booking data.
     */
    public function generateDocument($booking)
    {
        // Path to the template file
        $templatePath = public_path('Template B.docx');

        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);

        // Get related data
        $lab = Lab::find($booking->lab_tujuan);
        $pembimbing = Dosen::find($booking->pembimbing);
        $kepalaLab = KepalaLab::find($booking->kepala);

        // Data to replace placeholders in the template
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'email' => $booking->email,
            'nomor' => $booking->nomor,
            'prodi' => $booking->prodi,
            'univ' => $booking->instansi,
            'judul_penelitian' => $booking->judul_penelitian,
            'lab_tujuan' => $lab ? $lab->nama_lab : 'Unknown Lab',
            'dosen' => $pembimbing ? $pembimbing->nama : 'Unknown Dosen',
            'kepalalab' => $kepalaLab ? $kepalaLab->nama : 'Unknown Kepala Lab',
            'instansi' => $booking->instansi,
            'alamat_di_solo' => $booking->alamat_di_solo,
            'alamat_rumah' => $booking->alamat_rumah,
        ];

        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }

        $alatList = $booking->alat ?? [];
        
        // Filter out empty entries
        $alatList = array_filter($alatList, function($alat) {
            return !empty($alat['nama']) || !empty($alat['jumlah']);
        });
        
        // Option 1: Convert to formatted string
        $alatText = '';
        foreach ($alatList as $index => $alat) {
            $no = $index + 1;
            $nama = htmlspecialchars($alat['nama'] ?? '-');
            $jumlah = htmlspecialchars($alat['jumlah'] ?? '-');
            $alatText .= "{$no}. {$nama} ({$jumlah})\n";
        }
        $templateProcessor->setValue('alat_text', $alatText ?: '(Tidak ada)');
        
        // Option 2: For table-based cloning
        if (count($alatList) > 0) {
            $templateProcessor->cloneRow('alat', count($alatList));
            
            foreach ($alatList as $index => $alat) {
            $rowIndex = $index + 1;
            $nama = htmlspecialchars($alat['nama'] ?? '-');
            $templateProcessor->setValue('no#' . $rowIndex, $rowIndex);
            $templateProcessor->setValue('alat#' . $rowIndex, $nama);
            }
        } else {
            // Set default values if no alat
            $templateProcessor->setValue('no#1', '1');
            $templateProcessor->setValue('alat#1', '(Tidak ada)');
        }

        // Save the modified document with unique filename
        $filename = 'permohonan_' . $booking->nim . '_' . date('Ymd_His') . '.docx';
        $path = storage_path('app/public/documents/' . $filename);
        
        // Make sure the directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        
        $templateProcessor->saveAs($path);

        // Download the document
        return response()->download($path, $filename)->deleteFileAfterSend(true);
    }

    public function generateNota(string $id)
    {
        $asisten = Auth::user(); // Mengambil data user yang sedang login
        $asistenNama = $asisten->name; 
        // Find the booking by ID
        $booking = booking::findOrFail($id);
        
        $kepalaLab = KepalaLab::find($booking->kepala);
        
        $booking->status = 'proses';
        $booking->save();
        // Generate the surat number
        $today = now();
        $nomorSurat = $today->format('Ymd').$booking->id;
        
        // Path to the nota template file
        $templatePath = public_path('NotaMahasiswa.docx');
    
        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);
        
        // Data to replace placeholders in the template
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'judul_penelitian' => $booking->judul_penelitian,
            'kepala' => $kepalaLab ? $kepalaLab->nama : 'Unknown',
            'nomorSurat' => $nomorSurat,
            'asisten' => $asistenNama
        ];
        
        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }
        
        // Save the modified document with unique filename
        $filename = 'Nota' . $booking->nim . '_' .  '.docx';
        $path = storage_path('app/public/documents/' . $filename);
        
        // Make sure the directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        
        $templateProcessor->saveAs($path);
        
        // Download the document
        return response()->download($path, $filename)->deleteFileAfterSend(true);
    }
    
    public function generateBebasLab(string $id)
    {
        // Find the booking by ID
        $booking = booking::findOrFail($id);
        
        $kepalaLab = KepalaLab::find($booking->kepala);

        $booking->status = 'selesai';
        $booking->save();
        
        // Generate the surat number
        $today = now();
        $bulan = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        $nomorSurat = $booking->id . '/Lab. Sipil/BL/' . $bulan[$today->format('n')-1] . '/' . $today->format('Y');
        
        // Path to the surat template file
        $templatePath = public_path('BebasLab.docx');
    
        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);
        
        // Data to replace placeholders in the template
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'judul_penelitian' => $booking->judul_penelitian,
            'kepala' => $kepalaLab ? $kepalaLab->nama : 'Unknown',
            'nomorSurat' => $nomorSurat
        ];
        
        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }
        
        // Save the modified document with unique filename
        $filename = 'Bebas Lab' . $booking->nim . '_' . '.docx';
        $path = storage_path('app/public/documents/' . $filename);
        
        // Make sure the directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        
        $templateProcessor->saveAs($path);
        
        // Download the document
        return response()->download($path, $filename)->deleteFileAfterSend(true);
    }
}