<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'dosen';
    protected $fillable = [
        'nama',
        'keahlian'
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'keahlian', 'id');
    }

    public function bookingsAsPembimbing()
    {
        return $this->hasMany(booking::class, 'pembimbing', 'id');
    }
}
