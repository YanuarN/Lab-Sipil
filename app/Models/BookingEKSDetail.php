<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingEKSDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'booking_eks_detail';
    protected $fillable = [
        'booking_id',
        'jenis_tes',
        'jumlah_pengetesan',
        'subtotal'
    ];

    public function booking()
    {
        return $this->belongsTo(BookingEksternal::class, 'booking_id');
    }

    public function jenisTest()
    {
        return $this->belongsTo(DaftarHarga::class, 'jenis_tes_id', 'id');
    }

    // Method untuk menghitung subtotal
    public function hitungSubtotal()
    {
        $this->subtotal = $this->jumlah_pengetesan * $this->jenisTest->harga;
        $this->save();
    }
    public function book()
    {
        return $this->belongsTo(BookingEksternal::class, 'booking_id', 'id');
    }
}
