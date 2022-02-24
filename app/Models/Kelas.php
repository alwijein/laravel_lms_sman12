<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = ['kelas'];

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }

    public function pertemuan(){
        return $this->hasMany(Pertemuan::class, 'kode_pertemuan');
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
