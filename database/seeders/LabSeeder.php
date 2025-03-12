<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lab')->insert([
            ['nama_lab' => 'Struktur Bangunan & Teknologi Bahan'],
            ['nama_lab' => 'Geomatika'],
            ['nama_lab' => 'Mekanika Tanah'],
            ['nama_lab' => 'Transportasi'],
            ['nama_lab' => 'Hidraulika & Komputer'],
            ['nama_lab' => 'Bahan Perkerasan'],
        ]);
    }
}
