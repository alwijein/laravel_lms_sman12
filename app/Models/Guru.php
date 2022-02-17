<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = ['title', 'nama_guru', 'alamat', 'hp'];

    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class, '');
    }

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
