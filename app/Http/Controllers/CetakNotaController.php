<?php

namespace App\Http\Controllers;

use App\Models\BookingEKSDetail;
use App\Models\BookingEksternal;
use App\Models\DaftarHarga;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PhpOffice\PhpWord\TemplateProcessor;


class CetakNotaController extends Controller
{
    public function generateNota($id)
    {   
        $asisten = Auth::user(); // Mengambil data user yang sedang login
        $asistenNama = $asisten->name; // Mengambil nama admin
        // Ambil data booking eksternal
        $booking = BookingEksternal::findOrFail($id);

        // Ambil detail tes berdasarkan booking_id
        $details = BookingEksDetail::where('booking_id', $id)->get();

        // Load template
        $templatePath = public_path('NotaEksternal.docx');
        $templateProcessor = new TemplateProcessor($templatePath);

        $today = now();
        $nomorSurat = $today->format('Ymd').$booking->id;

        // Mengisi data pemesan
        $templateProcessor->setValue('nama_instansi', $booking->nama_instansi);
        $templateProcessor->setValue('nama_proyek', $booking->nama_proyek);
        $templateProcessor->setValue('tanggal_tes', $booking->tanggal_tes);
        $templateProcessor->setValue('total_biaya', number_format($booking->total_biaya, 2, ',', '.'));
        $templateProcessor->setValue('asisten', $asistenNama);
        $templateProcessor->setValue('noSurat', $nomorSurat);

        // Mengisi detail pengetesan
        $testDetails = [];
        foreach ($details as $detail) {
            $jenisTes = DaftarHarga::find($detail->jenis_tes);
            $testDetails[] = [
                'jenis_pembiayaan' => $jenisTes ? $jenisTes->order : 'Tidak Diketahui',
                'jumlah' => $detail->jumlah_pengetesan,
                'harga_satuan' => number_format($jenisTes ? $jenisTes->harga : 0, 2, ',', '.'),
                'subtotal' => number_format($detail->subtotal, 2, ',', '.')
            ];
        }

        // Mengganti placeholder untuk tabel
        $templateProcessor->cloneRowAndSetValues('jenis_pembiayaan', $testDetails);

        $testDetails2 = [];
        foreach ($details as $detail) {
            $jenisTes = DaftarHarga::find($detail->jenis_tes);
            $testDetails2[] = [
                'jenis_pembiayaan2' => $jenisTes ? $jenisTes->order : 'Tidak Diketahui',
                'jumlah2' => $detail->jumlah_pengetesan,
                'harga_satuan2' => number_format($jenisTes ? $jenisTes->harga : 0, 2, ',', '.'),
                'subtotal2' => number_format($detail->subtotal, 2, ',', '.')
    ];
}

        // Clone row untuk tabel kedua
        $templateProcessor->cloneRowAndSetValues('jenis_pembiayaan2', $testDetails2);

        // Simpan dokumen hasil
        $outputPath = storage_path('app/public/nota_' . $id . '.docx');
        $templateProcessor->saveAs($outputPath);

        // Unduh file
        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
