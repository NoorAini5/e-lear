<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakultas = [
            'Hukum',
            'Ilmu Bahasa',
            'Ilmu Bisnis',
            'Keguruan Ilmu Pengetahuan',
            'Kedokteran',
            'Ilmu Pengetahuan Alam',
            'Pertanian'
        ];

        foreach ($fakultas as $nama) :
            Fakultas::firstOrCreate([
                'nama' => $nama
            ]);
        endforeach;
    }
}
