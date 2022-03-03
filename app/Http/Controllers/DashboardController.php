<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::all()->count();
        $userSiswa = User::where('role', 'Siswa')->count();
        $userGuru = User::where('role', 'Guru')->count();
        $siswa = Siswa::all()->count();
        $guru = Guru::all()->count();
        $kelas = Kelas::all()->count();
        $pelajaran = Pelajaran::all()->count();

        $perempuan = Siswa::where('jk', 'wanita')->count();
        $laki_laki = Siswa::where('jk', 'pria')->count();

        $perempuan2 = Guru::where('jk', 'wanita')->count();
        $laki_laki2 = Guru::where('jk', 'pria')->count();
        $perPerempuan = 0;
        $perLaki = 0;
        $perPerempuan2 = 0;
        $perLaki2 = 0;
        if($perempuan > 0 && $laki_laki > 0){
            $perPerempuan = $perempuan / $siswa * 100;
            $perLaki = $laki_laki / $siswa * 100;

            $perPerempuan2 = $perempuan / $guru * 100;
            $perLaki2 = $laki_laki / $guru * 100;
        }



        return view('home.dashboard', compact([
            'user',
            'userSiswa',
            'userGuru',
            'siswa',
            'guru',
            'kelas',
            'pelajaran',
            'perLaki',
            'perPerempuan',
            'perLaki2',
            'perPerempuan2',
        ]));
    }
}
