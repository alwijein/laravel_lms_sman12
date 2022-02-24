<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['no_induk', 'nama_siswa', 'jk', 'kode_kelas' ,'telp', 'tmp_lahir', 'tgl_lahir'];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function absensiSiswa(){
        return $this->hasMany(Kelas::class);
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
