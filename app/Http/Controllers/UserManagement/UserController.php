<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showSiswa(){
        $users = DB::table('users')->where('status' ,'=', 'Siswa')->get();
        return view('users_management.show_siswa', compact('users'));
    }

    public function showGuru(){
        $users = DB::table('users')->where('status' ,'=', 'Guru')->get();
        return view('users_management.show_guru', compact('users'));
    }
}
