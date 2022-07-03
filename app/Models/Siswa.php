<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Siswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'siswas';
    protected $fillable = ['nama','nis','no_induk','tempat_lahir','tanggal_lahir','alamat','agama','jenis_kelamin','telepon','email','foto'];
    public $timestamps = false;

    public function setNamaAttribute($value)
    {
        return $this->attributes['nama'] = Str::ucfirst($value);
    }

    public function scopeActive($query)
    {
        return $query->where('status', static::ACTIVE);
    }

    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class);
    }
    public function Agama()
    {
        return $this->belongsTo(Agama::class, 'agama');
    }

}
