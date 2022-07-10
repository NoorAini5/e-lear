<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjianSoalJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian_soal_jawabans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ujian_soal_id');
            $table->string('urutan');
            $table->string('jawaban');
            $table->tinyInteger('benar')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ujian_soal_jawabans');
    }
}
