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
        return view('page.BookingEksternal', compact('daftarHarga'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
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
                'tanggal_pembuatan' => Carbon::now(),
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
            
            return redirect()->route('booking.show', $booking->id)->with('success', 'Booking berhasil dibuat!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
}
