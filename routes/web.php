<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
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
    })->name('dashboard');
    Route::get('/show-siswa',[UserController::class, 'showSiswa'])->name('show-siswa');
    Route::post('/show-siswa', [UserController::class, 'storeSiswa']);

    Route::get('/show-guru',[UserController::class, 'showGuru'])->name('show-guru');
    Route::post('/show-guru', [UserController::class, 'storeGuru']);

    Route::get('/input-jadwal',[JadwalController::class, 'inputJadwal'])->name('input-jadwal');
    Route::post('/input-jadwal',[JadwalController::class, 'store']);

    Route::get('/show-jadwal',[JadwalController::class, 'showJadwal'])->name('show-jadwal');

    Route::get('/detail-jadwal',[JadwalController::class, 'detailJadwal'])->name('detail-jadwal');

    Route::get('/show-kelas',[KelasController::class, 'showKelas'])->name('show-kelas');
    Route::post('/show-kelas',[KelasController::class, 'store']);

});


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


