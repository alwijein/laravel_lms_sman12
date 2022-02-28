<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiEkstrakurikuler extends Model
{
    use HasFactory;

    protected $table = 'nilai_ekstrakurikuler';
    protected $fillable = [
        'kode_siswa',
        'kegiatan',
        'nilai',
        'semester',
        'deskripsi',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'kode_siswa');
    }

}
