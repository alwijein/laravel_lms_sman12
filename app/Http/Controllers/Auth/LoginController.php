<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // public function create(){
    //     return view('auth.login');
    // }


    public function login(){
        return view('auth.login');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if(Auth::attempt($attributes)){
                return redirect('/');
        }


        throw ValidationException::withMessages([
            'email' => 'Email yang anda masukkan salah'
        ]);
    }
}
