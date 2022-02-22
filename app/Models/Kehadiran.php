<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';
    protected $fillable = ['ket', 'color'];


    public function absensiSiswa(){
        return $this->hasMany(Kelas::class);
    }
}
