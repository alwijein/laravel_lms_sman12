<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\UjianContoller;
use App\Http\Controllers\UserManagement\UserController;
use App\Models\AbsensiSiswa;
use App\Models\Pelajaran;
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

    // akses area untuk admin
    Route::middleware(['isGlobalAccess'])->group(function(){

        Route::middleware(['admin'])->group(function(){

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

            Route::get('/detail-jadwal/{id}/edit',[JadwalController::class, 'editJadwal'])->name('edit-jadwal');
            Route::put('/detail-jadwal/{id}',[JadwalController::class, 'updateJadwal']);
            Route::delete('/detail-jadwal/{id}',[JadwalController::class, 'destroy'])->name('delete-jadwal');

            Route::post('/show-kelas',[KelasController::class, 'store']);
            Route::delete('/show-kelas/{id}',[KelasController::class, 'destroy'])->name('delete-kelas');


            Route::get('/show-data-siswa',[DataController::class, 'showDataSiswa'])->name('show-data-siswa');
            Route::post('/show-data-siswa',[DataController::class, 'storeSiswa']);
            Route::get('/show-data-siswa/{id}/edit',[DataController::class, 'editSiswa'])->name('edit-data-siswa');
            Route::put('/show-data-siswa/{id}',[DataController::class, 'updateSiswa']);
            Route::delete('/show-data-siswa/{id}',[DataController::class, 'destroySiswa'])->name('delete-data-siswa');


            Route::post('/show-data-guru',[DataController::class, 'storeGuru']);
            Route::get('/show-data-guru/{id}/edit',[DataController::class, 'editGuru'])->name('edit-data-guru');
            Route::put('/show-data-guru/{id}',[DataController::class, 'updateGuru']);
            Route::delete('/show-data-guru/{id}',[DataController::class, 'destroyGuru'])->name('delete-data-guru');



            Route::get('/input-pelajaran',[PelajaranController::class, 'inputPelajaran'])->name('input-pelajaran');
            Route::post('/input-pelajaran',[PelajaranController::class, 'storePelajaran']);

            Route::get('/show-kelas',[KelasController::class, 'showKelas'])->name('show-kelas');

            Route::get('/show-pelajaran',[PelajaranController::class, 'showPelajaran'])->name('show-pelajaran');
            Route::delete('/show-pelajaran/{id}',[PelajaranController::class, 'destroy'])->name('delete-pelajaran');

        });

            Route::get('/show-jadwal/mengajar',[JadwalController::class, 'showJadwalMengajar'])->name('show-jadwal-mengajar');

            Route::get('/show-jadwal/guru',[JadwalController::class, 'showJadwalGuru'])->name('show-jadwal-guru');

            Route::get('/show-absensi-siswa', [AbsensiController::class, 'showAbsen'])->name('show-absensi-siswa');
            Route::get('/show-absensi-siswa/{id}/detail', [AbsensiController::class, 'detailAbsen'])->name('detail-absen');
            Route::delete('/show-absensi-siswa/{id}', [AbsensiController::class, 'destroy'])->name('delete-absen');
            Route::post('/show-absensi-siswa', [AbsensiController::class, 'storePertemuan'])->name('input-pertemuan');
            Route::get('/show-absensi-siswa/{id}/detail/{kode_pertemuan}', [AbsensiController::class, 'absensiSiswa'])->name('absensi-siswa');
            Route::post('/show-absensi-siswa/{id}/detail/{kode_pertemuan}', [AbsensiController::class, 'storeAbsen'])->name('input-absen');


            Route::get('/input-ujian',[UjianContoller::class, 'inputUjian'])->name('input-ujian');
            Route::post('/input-ujian',[UjianContoller::class, 'storeJadwalUjian'])->name('input-ujian');

            Route::get('/show-ujian',[UjianContoller::class, 'showUjian'])->name('show-ujian');
            Route::delete('/show-ujian/{id}',[UjianContoller::class, 'destroy'])->name('delete-ujian');


    });

    Route::get('/show-data-guru',[DataController::class, 'showDataGuru'])->name('show-data-guru');

    Route::get('/show-jadwal/belajar',[JadwalController::class, 'showJadwal'])->name('show-jadwal-belajar');

    Route::get('/detail-jadwal/{id}/detail',[JadwalController::class, 'detailJadwal'])->name('detail-jadwal');





    Route::post('/logout', [UserController::class, 'logout'])->name('logout');


    Route::get('show-profile', [UserController::class, 'profile'])->name('show-profile');
    Route::put('show-profile', [UserController::class, 'updateGeneral']);
    Route::put('show-profile', [UserController::class, 'updatePassword'])->name('edit-password');




});


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


