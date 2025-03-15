<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarAlat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'daftar_alat';
    protected $fillable = [
        'nama_alat',
    ];

}
