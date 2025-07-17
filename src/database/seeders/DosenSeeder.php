<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create([
            'nama' => 'Prof. Ahmad Sulaiman',
            'nip' => '197011011990031001',
            'fakultas_id' => 1, 
            'program_studi_id' => 1, 
            'jabatan' => 'Guru Besar',
        ]);

        Dosen::create([
            'nama' => 'Dr. Maria Yosephine',
            'nip' => '198012121999021002',
            'fakultas_id' => 2, 
            'program_studi_id' => 2, /
            'jabatan' => 'Lektor Kepala',
        ]);
    }
}
