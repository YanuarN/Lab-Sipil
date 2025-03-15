<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHarga extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'daftar_harga';
    protected $fillable = [
        'order',
        'harga',
        'keterangan'
    ];

    public function bookingDetails()
    {
        return $this->hasMany(BookingEKSDetail::class, 'jenis_tes', 'id');
    }
}
