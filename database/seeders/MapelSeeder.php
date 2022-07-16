<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapels')->insert([
            ['nama'=>'Hukum Perdata','jurusan'=>'1','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah hukum perdata',
            'sks'=>'2','semester'=>'1'],
            ['nama'=>'Hukum Perdana','jurusan'=>'1','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah hukum Perdana',
            'sks'=>'1','semester'=>'1'],
            ['nama'=>'Anatomi Hewan','jurusan'=>'5','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah anatomi hewan',
            'sks'=>'2','semester'=>'2'],
            ['nama'=>'Anatomi Tumbuhan','jurusan'=>'5','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah anatomi tumbuhan',
            'sks'=>'2','semester'=>'2'],
            ['nama'=>'Asam Basa','jurusan'=>'6','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah asam basa  ',
            'sks'=>'2','semester'=>'2'],
            ['nama'=>'Kromatografi','jurusan'=>'6','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah  kromatografi',
            'sks'=>'2','semester'=>'2'],
            ['nama'=>'Integral','jurusan'=>'4','guru'=>'1','deskripsi'=>'Deskripsi mata kuliah  Integral',
            'sks'=>'2','semester'=>'2'],
        ]);
    }
}
