<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'lab';
    protected $fillable = [
        'nama_lab'
    ];

    public function lab()
    {
        return $this->hasMany(Lab::class, 'keahlian', 'id');
    }

    public function booking()
    {
        return $this->hasMany(booking::class, 'lab_tujuan', 'id');
    }
}
