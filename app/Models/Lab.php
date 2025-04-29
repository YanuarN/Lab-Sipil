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
        'nama_lab',
        'kepala_lab_id',
    ];

    public function booking()
    {
        return $this->hasMany(booking::class, 'lab_tujuan', 'id');
    }

    public function kepalaLab() {
        return $this->belongsTo(KepalaLab::class, 'kepala_lab_id');
    }
}
