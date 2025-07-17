<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    public function run(): void
    {
        Fakultas::create([
            'nama' => 'Fakultas Teknik',
            'kode' => 'FT',
            'dekan' => 'Dr. Ir. Budi Santoso'
        ]);

        Fakultas::create([
            'nama' => 'Fakultas Ekonomi',
            'kode' => 'FE',
            'dekan' => 'Dr. Siti Aminah'
        ]);
    }
}
