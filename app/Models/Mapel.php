<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Mapel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'mapels';
    protected $fillable = ['nama','jurusan','guru','deskripsi','sks','semester'];
    public $timestamps = false;

    public function Guru()
    {
        return $this->belongsTo(Guru::class, 'guru');
    }
    public function Materi()
    {
        return $this->hasmany(Materi::class, 'materi');
    }
    public function Tugas()
    {
        return $this->hasmany(Tugas::class, 'tugas');
    }
    public function Ujian()
    {
        return $this->hasmany(Ujian::class, 'ujian');
    }
    public function Diskusi()
    {
        return $this->hasMany(Diskusi::class, 'diskusi');
    }
    public function Jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan');
    }
    public function Presensi()
    {
        return $this->hasMany(Presensi::class, 'presensi');
    }
    public function tm_presensi()
    {
        return $this->hasMany(tm_presensi::class, 'tm_presensi');
    }

}
