<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kaLab extends Model
{
    use HasFactory;
    public $timeStamps = false;
    protected $table = 'ka_lab';
    protected $fillable = [
        'nama',
    ];

}
