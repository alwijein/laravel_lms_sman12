<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'pelajaran';

    protected $fillable = [
        'mata_pelajaran',
        'jumlah_jam'
    ];


    public function guru(){
        return $this->hasMany(Guru::class);
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function jadwalUjian(){
        return $this->hasMany(JadwalUjian::class);
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
