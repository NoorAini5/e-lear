<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->insert([
            ['nama'=>'Bahasa Inggris','fakultas'=>'2'],
            ['nama'=>'Bahasa Perancis','fakultas'=>'2'],
            ['nama'=>'Ekonomi','fakultas'=>'3'],
            ['nama'=>'Manajemen','fakultas'=>'3'],
            ['nama'=>'Pendidikan Biologi','fakultas'=>'4'],
            ['nama'=>'Pendidikan Kimia','fakultas'=>'4'],
            ['nama'=>'Ilmu Hukum','fakultas'=>'1'],
            ['nama'=>'Hukum','fakultas'=>'1'],
        ]);
    }
}
