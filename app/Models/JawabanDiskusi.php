<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JawabanDiskusi extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'jawaban_diskusis';
    protected $fillable = ['id_diskusi','user_id','jawaban'];
    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel');
    }

    public function diskusi()
    {
        return $this->belongsTo(Diskusi::class, 'jawaban_diskusi');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
