<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JawabanTugas extends Model
{
    use HasFactory;
    // use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'jawaban_tugas';
    protected $fillable = ['id_tugas','user_id','jawaban'];
    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel');
    }

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'jawaban_tugas');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }

}
