<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanRuang;
use App\Models\Ruang;
use Illuminate\Http\Request;


class PinjamRuangController extends Controller
{
    public function index(){
        $ruang = Ruang::all();
        return view('page.pinjamRuang', compact('ruang'));
    }

    public function create()
    {
        $ruang = Ruang::all();
        return view('page.pinjamRuang', compact('ruang'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'ruang_id' => 'required|exists:ruang,id',
            'notelf' => 'required',
            'keperluan' => 'required',
            'tanggal' => 'required|date',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required'
        ]);

        $pinjam = new PeminjamanRuang();
        $pinjam->nama = $request->nama;
        $pinjam->ruang = $request->ruang_id;
        $pinjam->notelf = $request->notelf;
        $pinjam->keperluan = $request->keperluan;
        $pinjam->tanggal = $request->tanggal;
        $pinjam->jam_mulai = $request->jam_mulai;
        $pinjam->jam_selesai = $request->jam_selesai;
        $pinjam->status = 'menunggu';
        $pinjam->save();

        $phoneNumber = '62895633067032'; // Contoh nomor dengan kode negara 62 (Indonesia)
    
    // Pesan WhatsApp
        $message = "Halo, saya ingin mengkonfirmasi peminjaman dengan detail berikut:\n" .
                "Nama: " . $pinjam->nama . "\n" .
                "Tanggal Peminjaman: " . $pinjam->tanggal . "\n" .
                // Tambahkan detail lain sesuai kebutuhan
                "Terima kasih.";
        
        // Encode pesan untuk URL
        $encodedMessage = urlencode($message);

        return redirect()->away("https://wa.me/{$phoneNumber}?text={$encodedMessage}")
        ->with('success');
    }

}
