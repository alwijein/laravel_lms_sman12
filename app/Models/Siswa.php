<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['no_induk', 'nama_siswa', 'jk', 'kode_kelas' ,'telp','alamat' ,'tmp_lahir', 'tgl_lahir'];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kode_kelas');
    }

    public function absensiSiswa(){
        return $this->hasMany(Kelas::class);
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }

    public function nilaiSikap(){
        return $this->hasMany(NilaiSikap::class);
    }

    public function nilaiEkstrakurikuler(){
        return $this->hasMany(NilaiEkstrakurikuler::class);
    }

    public function nilaiPrestasi(){
        return $this->hasMany(NilaiPrestasi::class);
    }

}
