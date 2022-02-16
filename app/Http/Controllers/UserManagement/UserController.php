<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function storeSiswa(Request $request){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'status' => $request->status,
                'password' => Hash::make($request->password)
            ]);
            return redirect('/show-siswa');
    }

    public function storeGuru(Request $request){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'status' => $request->status,
                'password' => Hash::make($request->password)
            ]);
            return redirect('/show-siswa');
    }
}
