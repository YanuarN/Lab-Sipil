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
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Container\Attributes\Storage;

class CetakNotaController extends Controller
{
    public function generateNota($id)
    {
        // Ambil data booking eksternal
        $booking = BookingEksternal::findOrFail($id);

        // Ambil detail tes berdasarkan booking_id
        $details = BookingEksDetail::where('booking_id', $id)->get();

        // Load template
        $templatePath = storage_path('app/private/NOTAEKS.docx');
        $templateProcessor = new TemplateProcessor($templatePath);

        $tanggalTes = Carbon::parse($booking->tanggal_tes);
        $nomorSurat = $tanggalTes->format('Ymd') . $booking->id;

        $tanggal = Carbon::now()->format('d-m-Y');

        // Mengisi data pemesan
        $templateProcessor->setValue('nama_instansi', $booking->nama_instansi);
        $templateProcessor->setValue('nama_proyek', $booking->nama_proyek);
        $templateProcessor->setValue('tanggal_tes', $booking->tanggal_tes);
        $templateProcessor->setValue('total_biaya', number_format($booking->total_biaya, 2, ',', '.'));
        $templateProcessor->setValue('noSurat', $nomorSurat);
        $templateProcessor->setValue('tanggal', $tanggal);

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

        $testDetails3 = [];
        foreach ($details as $detail) {
            $jenisTes = DaftarHarga::find($detail->jenis_tes);
            $testDetails3[] = [
                'jenis_pembiayaan3' => $jenisTes ? $jenisTes->order : 'Tidak Diketahui',
                'jumlah3' => $detail->jumlah_pengetesan,
                'harga_satuan3' => number_format($jenisTes ? $jenisTes->harga : 0, 2, ',', '.'),
                'subtotal3' => number_format($detail->subtotal, 2, ',', '.')
            ];
        }
        // Clone row untuk tabel ketiga
        $templateProcessor->cloneRowAndSetValues('jenis_pembiayaan3', $testDetails3);

        // Simpan dokumen hasil
        $outputPath = storage_path('app/public/Nota_' . str_replace(['/', '\\', ' '], '_', $booking->nama_instansi) . '.docx');
        $templateProcessor->saveAs($outputPath);

        // Unduh file
        return response()->download($outputPath)->deleteFileAfterSend(true);
    }

    public function generateNotaPDF($id)
    {
        // Ambil data booking eksternal
        $booking = BookingEksternal::findOrFail($id);

        // Ambil detail tes berdasarkan booking_id
        $details = BookingEksDetail::where('booking_id', $id)->get();

        // Format nomor surat
        $today = now();
        $nomorSurat = $today->format('Ymd') . $booking->id;

        // Persiapkan data detail pengetesan
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

        // Generate PDF menggunakan view yang telah dimodifikasi
        $pdf = PDF::loadView('template.notaEksternal', compact('booking', 'testDetails', 'nomorSurat'));

        // Atur ukuran kertas A4 dan orientasi portrait
        $pdf->setPaper('a4', 'portrait');

        // Stream PDF dengan nama file yang sesuai
        return $pdf->stream('nota_' . $id . '.pdf');
    }
}
