<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarHarga;
use App\Models\BookingEKSDetail;
use App\Models\BookingEksternal;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingEksternalController extends Controller
{
    public function index()
    {
        $daftarHarga = DaftarHarga::all();
        return view('page.bookingeks', compact('daftarHarga'));
    }

    public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'nama_instansi' => 'required',
            'nama_proyek' => 'required',
            'tanggal_tes' => 'required|date',
            'jenis_tes' => 'required|array',
            'jumlah_pengetesan' => 'required|array',
            'jumlah_pengetesan.*' => 'required',
        ]);

        DB::beginTransaction();

        // Membuat booking baru
        $booking = BookingEksternal::create([
            'nama_instansi' => $request->nama_instansi,
            'nama_proyek' => $request->nama_proyek,
            'tanggal_tes' => $request->tanggal_tes,
            'tanggal_pemesanan' => Carbon::now(),
            'total_biaya' => 0,
        ]);

        $totalBiaya = 0;

        // Menambahkan detail booking
        foreach ($request->jenis_tes as $index => $jenisTesId) {
            // Skip jika jumlah pengetesan tidak ada atau 0
            if (!isset($request->jumlah_pengetesan[$index]) || $request->jumlah_pengetesan[$index] <= 0) {
                continue;
            }

            $jenisTes = DaftarHarga::findOrFail($jenisTesId);
            $jumlah = $request->jumlah_pengetesan[$index];
            $subtotal = $jenisTes->harga * $jumlah;
            $totalBiaya += $subtotal;

            BookingEKSDetail::create([
                'booking_id' => $booking->id,
                'jenis_tes' => $jenisTesId,
                'jumlah_pengetesan' => $jumlah,
                'subtotal' => $subtotal
            ]);
        }

        // Update total biaya
        $booking->total_biaya = $totalBiaya;
        $booking->save();

        DB::commit();
        
        return response()->json([
            'success' => true,
            'message' => 'Booking berhasil dibuat!',
            'data' => $booking,
            'redirect' => route('booking.show', $booking->id)
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $e->errors()
        ], 422);
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'success' => false,
            'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
}
}
