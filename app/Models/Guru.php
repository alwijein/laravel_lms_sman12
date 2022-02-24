<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = ['no_induk', 'nama_guru', 'jk', 'telp', 'kode_pelajaran', 'alamat'];

    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class, 'kode_pelajaran');
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
