<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Ujian extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'ujians';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function soal()
    {
        return $this->hasMany(UjianSoal::class);
    }
    public function siswaujian()
    {
        return $this->hasMany(SiswaUjian::class);
    }

}
