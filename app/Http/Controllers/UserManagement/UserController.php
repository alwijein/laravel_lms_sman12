<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // funtion for siswa

    public function showSiswa(){
        $users = DB::table('users')->where('role' ,'=', 'Siswa')->get();
        return view('users_management.show_siswa', compact('users'));
    }

    public function storeSiswa(Request $request){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:7'],
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
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
            'password' => ['required', 'min:7'],
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
        $users = DB::table('users')->whereIn('role' , ['Guru', 'WaliKelas'])->get();
        return view('users_management.show_guru', compact('users'));
    }


    public function storeGuru(Request $request){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'role' => ['required'],
            'password' => ['required', 'min:7'],
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password)
            ]);
            return redirect('/show-guru');
    }


    public function editGuru($id){

        $guru = User::where('id', $id)->first();
        return view('users_management.edit_guru', compact('guru'));
    }

    public function updateGuru(Request $request, $id){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required' , 'email'],
            'password' => ['required', 'min:7'],
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
        if($user->role == "Guru"){
            return redirect('show-guru');
        }else{
            return redirect('show-siswa');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function profile(){
        $user = Auth::user();
        return view('users_management.setting_profile', compact('user'));
    }

    public function updateGeneral(Request $request){

        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required' , 'email'],
        ]);


        User::where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(Auth::user()->password),
        ]);

        return redirect("show-profile");
    }

    public function updatePassword(Request $request){

        $request->validate([
            'new_password' =>  'min:7',
            'confirm_new_password' => 'required_with:new_password|same:new_password|min:6',
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Hash::make($request->new_password),
        ]);


        return redirect("show-profile");
    }
}
