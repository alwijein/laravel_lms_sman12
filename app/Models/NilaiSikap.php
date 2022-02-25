<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSikap extends Model
{
    use HasFactory;
    protected $table = 'nilai_sikap';

    protected $fillable = [
        'kode_siswa',
        'jenis_sikap',
        'predikat',
        'desk',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'kode_siswa');
    }
}
