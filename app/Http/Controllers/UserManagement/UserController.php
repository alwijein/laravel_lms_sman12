<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // funtion for siswa

    public function showSiswa(){
        $users = DB::table('users')->where('status' ,'=', 'Siswa')->get();
        return view('users_management.show_siswa', compact('users'));
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

    public function editSiswa($id){

        $siswa = User::where('id', $id)->first();
        return view('users_management.edit_siswa', compact('siswa'));
    }

    public function updateSiswa(Request $request, $id){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('show-siswa');
    }



    // function for guru

    public function showGuru(){
        $users = DB::table('users')->where('status' ,'=', 'Guru')->get();
        return view('users_management.show_guru', compact('users'));
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


    public function editGuru($id){

        $guru = User::where('id', $id)->first();
        return view('users_management.edit_guru', compact('guru'));
    }

    public function updateGuru(Request $request, $id){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('show-guru');
    }

    // function for all

    public function destroy($id){
        $user = User::where('id', $id)->first();
        $user->delete();
        if($user->status == "Guru"){
            return redirect('show-guru');
        }else{
            return redirect('show-siswa');
        }
    }
}
