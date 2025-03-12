<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Struktur Bangunan & Teknologi Bahan (keahlian = 1)
        DB::table('dosen')->insert([
            ['nama' => 'Ir. Suhendro Trimugroho, M.T', 'keahlian' => 1],
            ['nama' => 'Ir. Aliem Sudjatmiko M.T', 'keahlian' => 1],
            ['nama' => 'Ir. Muhammad Ujianto, S.T., M.T', 'keahlian' => 1],
            ['nama' => 'Ir. Yenny Nurchasanah, M.T.', 'keahlian' => 1],
            ['nama' => 'Ir. Abdul Rochman M.T', 'keahlian' => 1],
            ['nama' => 'Nur Khotimah Handayani, ST, MEng', 'keahlian' => 1],
            ['nama' => 'Budi Setiawan, ST, MT', 'keahlian' => 1],
            ['nama' => 'Mochamad Solikin, ST, MT, PhD', 'keahlian' => 1],
            ['nama' => 'Muhammad Ali Rofiq, ST, MT', 'keahlian' => 1],
        ]);

        // Geomatika (keahlian = 2)
        DB::table('dosen')->insert([
            ['nama' => 'Ir. Yenny Nurchasanah, M.T.', 'keahlian' => 2],
            ['nama' => 'Anto Budi Listyawan, ST, MSc', 'keahlian' => 2],
            ['nama' => 'Nur Khotimah Handayani, ST, MEng', 'keahlian' => 2],
            ['nama' => 'Annisa Fathi Yakan, ST, MT', 'keahlian' => 2],
            ['nama' => 'Hafidzul \'Azmi, ST, MSc', 'keahlian' => 2],
            ['nama' => 'Tsulis Iqbal Khairul Amar, ST, MSc', 'keahlian' => 2],
            ['nama' => 'Furqaan Harjanto, ST, MEng', 'keahlian' => 2],
        ]);

        // Mekanika Tanah (keahlian = 3)
        DB::table('dosen')->insert([
            ['nama' => 'Agus Susanto, ST, MT', 'keahlian' => 3],
            ['nama' => 'Anto Budi Listyawan, ST, MSc', 'keahlian' => 3],
            ['nama' => 'Gayuh Aji Prasetyaningtiyas, ST, MEng, PhD', 'keahlian' => 3],
            ['nama' => 'Qunik Wiqoyah, ST, MT', 'keahlian' => 3],
            ['nama' => 'Sugiyatno, ST, MT', 'keahlian' => 3],
            ['nama' => 'Furqaan Harjanto, ST, MEng', 'keahlian' => 3],
        ]);

            // Transportasi (keahlian = 4)
        DB::table('dosen')->insert([
                ['nama' => 'Ir. Agus Riyanto, MT', 'keahlian' => 4],
                ['nama' => 'Alfia Magfirona, ST, MT', 'keahlian' => 4],
                ['nama' => 'Drs. Gotot Slamet Mulyono, MT', 'keahlian' => 4],
                ['nama' => 'Hafidzul \'Azmi, ST, MSc', 'keahlian' => 4],
                ['nama' => 'Ika Setiyaningsih, ST, MT', 'keahlian' => 4],
                ['nama' => 'Nurul Hidayati, ST, MT, PhD', 'keahlian' => 4],
                ['nama' => 'Rama Rizana, ST, MSc', 'keahlian' => 4],
                ['nama' => 'Dr. Senja Rum Harnaeni, ST, MT', 'keahlian' => 4],
                ['nama' => 'Ir. Sri Sunarjono, MT, PhD', 'keahlian' => 4],
                ['nama' => 'Dr.T. Ir. Zilhardj, MT', 'keahlian' => 4],
        ]);
    
            // Hidraulika & Komputer (keahlian = 5)
        DB::table('dosen')->insert([
                ['nama' => 'Jaji Abdurosyid, ST, MT', 'keahlian' => 5],
                ['nama' => 'Gurawan Jati Wibowo, ST, MEng', 'keahlian' => 5],
                ['nama' => 'Annisa Fathi Yakan, ST, MT', 'keahlian' => 5],
                ['nama' => 'Purwanti Sri Pudyastuti, ST, MSc, Ph.D', 'keahlian' => 5],
                ['nama' => 'Ika Setiyaningsih, ST, MT', 'keahlian' => 5],
                ['nama' => 'Nurul Hidayati, ST, MT, PhD', 'keahlian' => 5],
                ['nama' => 'Rama Rizana, ST, MSc', 'keahlian' => 5],
                ['nama' => 'Dr. Senja Rum Harnaeni, ST, MT', 'keahlian' => 5],
                ['nama' => 'Ir. Sri Sunarjono, MT, PhD', 'keahlian' => 5],
                ['nama' => 'Dr.T. Ir. Zilhardj, MT', 'keahlian' => 5],
        ]);
    
            // Bahan Perkerasan (keahlian = 6)
        DB::table('dosen')->insert([
                ['nama' => 'Ir. Agus Riyanto, MT', 'keahlian' => 6],
                ['nama' => 'Rama Rizana, ST, MSc', 'keahlian' => 6],
                ['nama' => 'Ir. Sri Sunarjono, MT, PhD', 'keahlian' => 6],
                ['nama' => 'Dr. Senja Rum Harnaeni, ST, MT', 'keahlian' => 6],
            ]);

    }
}
