<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materis')->insert([
            ['nama'=>'Hukum Perdata','isi'=>'1','guru'=>'1','nama_file'=>'',
            'video'=>'2','matkul'=>'1'],
        ]);

    }
}
