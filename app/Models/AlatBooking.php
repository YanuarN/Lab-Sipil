<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatBooking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'alat_booking';
    protected $fillable = [
        'booking_id',
        'alat_id'
    ];

    // Relasi ke model Booking
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    // Relasi ke model Alat
    public function alat()
    {
        return $this->belongsTo(DaftarAlat::class, 'alat_id');
    }
}
