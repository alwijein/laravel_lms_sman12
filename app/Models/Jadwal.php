<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';


    protected $fillable = [
        'kode_hari',
        'jam',
        'kode_pelajaran',
        'kode_guru',
        'kode_kelas',
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

    public function hari(){
        return $this->belongsTo(Hari::class, 'kode_hari');
    }
}
