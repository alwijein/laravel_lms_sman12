<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPrestasi extends Model
{
    use HasFactory;
    protected $table = 'nilai_prestasi';
    protected $fillable = [
        'kode_siswa',
        'jenisKegiatan',
        'semester',

        'keterangan',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'kode_siswa');
    }
}
