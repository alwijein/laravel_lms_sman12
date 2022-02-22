<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    protected $table = 'pertemuan';

    protected $fillable = ['pertemuan', 'tanggal', 'kode_kelas'];

    public function absensiSiswa(){
        return $this->hasMany(Kelas::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kode_kelas');
    }
}
