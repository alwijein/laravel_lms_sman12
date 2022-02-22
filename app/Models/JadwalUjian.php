<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    use HasFactory;
    protected $table = 'jadwal_ujian';
    protected $fillable = ['tanggal', 'kode_hari', 'jam', 'kode_pelajaran'];

    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class, 'kode_pelajaran');
    }

    public function hari(){
        return $this->belongsTo(Hari::class, 'kode_hari');
    }
}
