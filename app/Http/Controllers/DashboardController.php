<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::all()->count();
        $siswa = Siswa::count('id')->get();
        $guru = Guru::count('id')->get();
        $kelas = Kelas::count('id')->get();
        return view('home.dashboard', compact([
            'user',
            'siswa',
            'guru',
            'kelas',
        ]));
    }
}
