<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agregat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'agregat';
    protected $fillable = [
        'email',
        'nama',
        'nim',
        'judul_penelitian',
        'instansi_tujuan',
        'alamata_instansi',
        'anggota',
        'nama_material',
    ];

    protected $casts = [
        'anggota' => 'array', 
        'nama_material' => 'array'
    ];
}
