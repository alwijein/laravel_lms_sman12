<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'pelajaran';


    public function guru(){
        return $this->hasMany(Guru::class);
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}
