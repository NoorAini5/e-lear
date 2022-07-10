<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Diskusi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'diskusis';
    protected $fillable = ['id_user','judul','isi','mapel'];
    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }
    public function jawaban_diskusi()
    {
        return $this->hasMany(JawabanDiskusi::class, 'jawaban_diskusi');
    }

}
