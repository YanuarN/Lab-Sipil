<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KepalaLab extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kepala_lab';
    protected $fillable = [
        'nama',
    ];

    public function bookings()
    {
        return $this->hasMany(booking::class, 'kepala', 'id');
    }

    public function labs() {
        return $this->hasMany(Lab::class, 'kepala_lab_id');
    }
}
