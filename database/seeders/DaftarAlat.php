<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DaftarAlat extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daftar_alat')->insert([
            ['nama_alat' => 'ATTEBERG LIMIT-[LTS-GT-AL-1]'],
            ['nama_alat' => 'AUTOMATIHC ASPHALT COMPACTOR-[LTS-BPJ-AAC-1]'],
            ['nama_alat' => 'AUTOMATIHC ASPHALT MIXER-[LTS-BPJ-AAM1]'],
            ['nama_alat' => 'DAKTILITAS ASPAL-[LTS-BPJ-DA-1]'],
            ['nama_alat' => 'EKSTRAKSI ASPAL-[LTS-BPJ-EA-1]'],
            ['nama_alat' => 'KOMPOR LISTRIK-[LTS-KL-1]'],
            ['nama_alat' => 'MARSHALL TEST-[LTS-BPJ-M1]'],
            ['nama_alat' => 'OVEN-[LTS-O-1]'],
            ['nama_alat' => 'PENETRASI ASPAL-[LTS-BPJ-PA-1]'],
            ['nama_alat' => 'SARINGAN-[LTS-GT-S-1]'],
            ['nama_alat' => 'SHIEVE SHAKER-[LTS-GT-SS-1]'],
            ['nama_alat' => 'TIMBANGAN KETELITIAN 0.01 GR-[LTS-U-T-3]'],
            ['nama_alat' => 'TIMBANGAN KETELITIAN 1 GR-[LTS-U-T-2]'],
            ['nama_alat' => 'TIMBANGAN KETELITIAN 1 KG-[LTS-U-T-1]'],
            ['nama_alat' => 'TITIK LEMBEK ASPHAL-[LTS-BPJ-TL-1]'],
            ['nama_alat' => 'WATERBATH-[LTS-BPJ-W-1]'],
            ['nama_alat' => 'ABRAHAM CONE SET-[LTS-TB-ACS-1]'],
            ['nama_alat' => 'BEKISTING BALOK-[LTS-TB-BB-1]'],
            ['nama_alat' => 'BEKISTING SILINDER BETON 10X20-[LTS-TB-BSK-1]'],
            ['nama_alat' => 'BEKISTING SILINDER BETON 15X30-[LTS-TB-BSB-1]'],
            ['nama_alat' => 'BERAT JENIS DAN PENYERAPAN AGREGAT-[LTS-TB-BJPA-1]'],
            ['nama_alat' => 'BERAT JENIS DAN PENYERAPAN AGREGAT HALUS-[LTS-TB-BJPAH-1]'],
            ['nama_alat' => 'COMPRESSION TEST MACHINE-[LTS-TB-CTM-1]'],
            ['nama_alat' => 'HELLIGE TESTER -[LTS-TB-HBO-1]'],
            ['nama_alat' => 'KERUCUT SLUMP-[LTS-TB-KC-1]'],
            ['nama_alat' => 'LOS ANGELES-[LTS-TB-LA-1]'],
            ['nama_alat' => 'MIXER CONCRETE DIESEL-[LTS-TB-MCD-1]'],
            ['nama_alat' => 'OVEN-[LTS-TB-O-1]'],
            ['nama_alat' => 'SARINGAN-[LTS-TB-S-1]'],
            ['nama_alat' => 'SIEVE SHAKER-[LTS-TB-SS-1]'],
            ['nama_alat' => 'TIMBANGAN KETELITIAN 0.01 GR-[LTS-U-T-3]'],
            ['nama_alat' => 'TIMBANGAN KETELITIAN 1 GR-[LTS-U-T-2]'],
            ['nama_alat' => 'TIMBANGAN KETELITIAN 1 KG-[LTS-U-T-1]'],
            ['nama_alat' => 'UNIVERSAL TESTING MACHINE -[LTS-TB-UTM-1]'],
            ['nama_alat' => 'VICAT APPARATUS-[LTS-TB-VA-1]'],
        ]);
    }
}
