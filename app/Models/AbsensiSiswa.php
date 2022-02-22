<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiSiswa extends Model
{
    use HasFactory;

    protected $table = 'absensi_siswa';

    protected $fillable = ['tanggal','kode_pertemuan', 'kode_siswa', 'kode_kehadiran'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'kode_siswa');
    }

    public function kehadiran(){
        return $this->belongsTo(Kehadiran::class, 'kode_kehadiran');
    }

    public function pertemuan(){
        return $this->belongsTo(Pertemuan::class, 'kode_pertemuan');
    }
}
