<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'booking';
    protected $fillable = [
        'nama',
        'email',
        'nim',
        'nomor',
        'prodi',
        'judul_penelitian',
        'pembimbing',
        'penguji1',
        'penguji2',
        'lab_tujuan',
        'alamat_di_solo',
        'alamat_rumah',
        'instansi',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_tujuan', 'id');
    }

    public function pembimbingRelation()
    {
        return $this->belongsTo(Dosen::class, 'pembimbing', 'id');
    }
    
    public function penguji1Relation()
    {
        return $this->belongsTo(Dosen::class, 'penguji1', 'id');
    }
    
    public function penguji2Relation()
    {
        return $this->belongsTo(Dosen::class, 'penguji2', 'id');
    }
}
