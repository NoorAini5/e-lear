<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tm_presensi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'tm_presensis';
    protected $fillable = ['mapel', 'hari', 'tanggal', 'jam_mulai', 'jam_akhir'];

    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel');
    }
    public function presensi()
    {
        return $this->belongsTo(Presensi::class);
    }
}
