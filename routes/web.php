<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserManagement\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('home.index');
    });
    Route::get('/show-siswa',[UserController::class, 'showSiswa'])->name('show-siswa');
    Route::post('/show-siswa', [UserController::class, 'storeSiswa']);

    Route::get('/show-guru',[UserController::class, 'showGuru'])->name('show-guru');
    Route::post('/show-guru', [UserController::class, 'storeGuru']);

    Route::get('/input-jadwal',[JadwalController::class, 'inputJadwal'])->name('input-jadwal');

});


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


