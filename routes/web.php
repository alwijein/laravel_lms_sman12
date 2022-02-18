<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataController;
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

    Route::get('/show-siswa/{id}/edit',[UserController::class, 'editSiswa'])->name('edit-siswa');
    Route::put('/show-siswa/{id}', [UserController::class, 'updateSiswa']);
    Route::delete('/show-siswa/{id}', [UserController::class, 'destroy'])->name('delete');

    Route::get('/show-guru',[UserController::class, 'showGuru'])->name('show-guru');
    Route::post('/show-guru', [UserController::class, 'storeGuru']);

    Route::get('/show-guru/{id}/edit',[UserController::class, 'editGuru'])->name('edit-guru');
    Route::put('/show-guru/{id}', [UserController::class, 'updateGuru']);



    Route::get('/input-jadwal',[JadwalController::class, 'inputJadwal'])->name('input-jadwal');
    Route::post('/input-jadwal',[JadwalController::class, 'store']);

    Route::get('/show-jadwal',[JadwalController::class, 'showJadwal'])->name('show-jadwal');

    Route::get('/detail-jadwal/{id}/detail',[JadwalController::class, 'detailJadwal'])->name('detail-jadwal');
    Route::get('/detail-jadwal/{id}/edit',[JadwalController::class, 'editJadwal'])->name('edit-jadwal');
    Route::put('/detail-jadwal/{id}',[JadwalController::class, 'updateJadwal']);

    Route::get('/show-kelas',[KelasController::class, 'showKelas'])->name('show-kelas');
    Route::post('/show-kelas',[KelasController::class, 'store']);

    Route::get('/show-data-siswa',[DataController::class, 'showDataSiswa'])->name('show-data-siswa');
    Route::post('/show-data-siswa',[DataController::class, 'storeSiswa']);

    Route::get('/show-data-guru',[DataController::class, 'showDataGuru'])->name('show-data-guru');
    Route::post('/show-data-guru',[DataController::class, 'storeGuru']);

});


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


