<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'kode_siswa',
        'kode_kelas',
        'kode_guru',
        'kode_pelajaran',
        'semester',
        'nilai',
        'predikat',
        'desk_pengetahuan',
        'desk_keterampilan'
    ];

    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class, 'kode_pelajaran');
    }

    public function guru(){
        return $this->belongsTo(Guru::class, 'kode_guru');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kode_kelas');
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'kode_siswa');
    }

}

