<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Presensi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'presensis';
    protected $fillable = ['mapel','user_id', 'presensi_id', 'jam_absen', 'keterangan'];

    public $timestamps = false;

    public function Mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function tmpresensi()
    {
        return $this->belongsTo(Mapel::class);
    }
}
