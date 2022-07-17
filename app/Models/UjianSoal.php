<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UjianSoal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jawaban()
    {
        return $this->hasMany(UjianSoalJawaban::class);
    }
    public function siswaujian()
    {
        return $this->belongsTo(SiswaUjian::class);
    }
}
