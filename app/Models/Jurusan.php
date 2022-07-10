<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Jurusan extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'jurusans';
    protected $fillable = ['nama','fakultas'];

    public $timestamps = false;

    public function Fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'fakultas');
    }

    public function Mapel()
    {
        return $this->hasMany(Mapel::class, 'mapel');
    }
}
