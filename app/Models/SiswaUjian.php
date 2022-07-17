<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaUjian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'id');
    }
    public function ujian_soal()
    {
        return $this->belongsTo(UjianSoal::class);
    }
    public function ujian_soal_jawaban()
    {
        return $this->belongsTo(UjianSoalJawaban::class);
    }
}
