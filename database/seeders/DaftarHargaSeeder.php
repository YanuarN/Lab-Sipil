<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarHargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daftar_harga')->insert([
            ['order' => 'Pesawat Theodolith', 'harga' => 350000, 'keterangan' => 'Per Hari'],
            ['order' => 'Pesawat Waterpass', 'harga' => 350000, 'keterangan' => 'Per Hari'],
            ['order' => 'Desak Beton / Kayu', 'harga' => 40000, 'keterangan' => 'Per Sampel, tanpa membuat'],
            ['order' => 'Lentur Beton / Kayu', 'harga' => 50000, 'keterangan' => 'Per Sampel, tanpa membuat'],
            ['order' => 'Sondir ( Kapasitas 2,5 Ton )', 'harga' => 5000000, 'keterangan' => 'Per 3 Titik, Dalam Kota'],
            ['order' => 'Core Drill', 'harga' => 0, 'keterangan' => 'Per Hari'],
            ['order' => 'Stamper', 'harga' => 0, 'keterangan' => 'Per Hari'],
            ['order' => 'Konsolidasi', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Direct Shear Test', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Marshall Test', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Ekstraksi', 'harga' => 250000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Standart / Modified Proctor', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'CBR Lab', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Plastisitas Index ( PI )', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Sieve Analisis', 'harga' => 150000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Hidrometer', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Berat Jenis Tanah', 'harga' => 0, 'keterangan' => 'Per Sampel'],
            ['order' => 'Berat Jenis Agregat', 'harga' => 125000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Abrasi', 'harga' => 150000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Job Mix Formula', 'harga' => 1750000, 'keterangan' => 'Per Karakteristik Beton'],
            ['order' => 'Material Job Mix Beton', 'harga' => 300000, 'keterangan' => 'Per Karakteristik Beton'],
            ['order' => 'Pengujian LPA dan LPB', 'harga' => 0, 'keterangan' => 'Per Paket'],
            ['order' => 'Pengujian Urugan Pilihan / Blasa', 'harga' => 0, 'keterangan' => 'Per Paket ( 12+14+15+16+17+13 )'],
            ['order' => 'Cetakan Beton', 'harga' => 3000, 'keterangan' => 'Per Buah'],
            ['order' => 'Kadar Lumpur ( No. 200 )', 'harga' => 75000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Sand Equivalent', 'harga' => 75000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Soundness Test', 'harga' => 75000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Keplpihan', 'harga' => 75000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Angularitas', 'harga' => 75000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Kadar Organik', 'harga' => 75000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Density', 'harga' => 100000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Test Agregat', 'harga' => 550000, 'keterangan' => 'Paket (15+18+19+25)'],
            ['order' => 'Test Pasir', 'harga' => 500000, 'keterangan' => 'Paket ( 15+18+25+28 )'],
            ['order' => 'Tarik Baja', 'harga' => 150000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Hammer Test', 'harga' => 150000, 'keterangan' => 'Per Titik ( 10 data ). Min 10 Titik'],
            ['order' => 'Sedimen Melayang', 'harga' => 100000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Berat Satuan Volume', 'harga' => 125000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Pembuatan sampel mortar', 'harga' => 25000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Timbang Baja', 'harga' => 30000, 'keterangan' => 'Per Sampel'],
            ['order' => 'Bubut Baja', 'harga' => 50000, 'keterangan' => 'Per Sampel'],
        ]);
    }
}
