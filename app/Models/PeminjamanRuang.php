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
        'ruang_id',
        'notelf',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'keperluan',
        'status',
    ];

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id');
    }

}
