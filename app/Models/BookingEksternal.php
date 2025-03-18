<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BookingEksternal extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'booking_eksternal';
    protected $fillable = [ 
        'nama_instansi', 
        'nama_proyek', 
        'tanggal_tes', 
        'tanggal_pembuatan', 
        'total_biaya'];

    public function bookingDetails()
    {
        return $this->hasMany(BookingEKSDetail::class, 'booking_id');
    }

    public function updateTotalBiaya()
    {
        $this->total_biaya = $this->bookingDetails()->sum('subtotal');
        $this->save();
    }
    public function details()
    {
        return $this->hasMany(BookingEksDetail::class, 'booking_id', 'id');
    }
}
