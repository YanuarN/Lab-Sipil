<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingEksDetail extends Model
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
        return $this->belongsTo(DaftarHarga::class, 'jenis_tes', 'id');
    }

    public function hitungSubtotal()
    {
        if ($this->jenisTest) {
            $newSubtotal = $this->jumlah_pengetesan * $this->jenisTest->harga;
            
            // Hanya update jika subtotal berubah
            if ($this->subtotal != $newSubtotal) {
                $this->subtotal = $newSubtotal;
                $this->saveQuietly(); // <-- Gunakan saveQuietly()
            }
        }
    }
    public function book()
    {
        return $this->belongsTo(BookingEksternal::class, 'booking_id', 'id');
    }

    protected static function booted()
    {
        static::saved(function ($detail) {
            // Hanya hitung jika ada perubahan di kolom terkait
            if ($detail->isDirty(['jenis_tes', 'jumlah_pengetesan'])) {
                $detail->hitungSubtotal();
            }
    
            if ($detail->booking) {
                $detail->booking->updateTotalBiaya();
            }
        });
    
        static::deleted(function ($detail) {
            if ($detail->booking) {
                $detail->booking->updateTotalBiaya();
            }
        });
    }
}
