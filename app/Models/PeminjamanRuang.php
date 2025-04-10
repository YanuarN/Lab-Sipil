<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanRuang extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'peminjaman_ruang';
    protected $fillable = [
        'nama',
        'ruang',
        'notelf',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'keperluan',
        'status',
    ];

    public function lab()
    {
        return $this->belongsTo(Ruang::class, 'ruang', 'id');
    }

}
