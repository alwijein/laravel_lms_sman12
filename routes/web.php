<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UjianContoller;
use App\Http\Controllers\UserManagement\UserController;
use App\Models\AbsensiSiswa;
use App\Models\Guru;
use App\Models\Pelajaran;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/get-guru-by-mapel-id/{id}', function ($id) {
    $teachers = Guru::where('kode_pelajaran', $id)->get();
    return view('guru_management.components.list-guru', compact('teachers'));
})->name('gpi');

Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('home.home');
    })->name('home');


    // akses area untuk admin
    Route::middleware(['isGlobalAccess'])->group(function(){

        Route::middleware(['admin'])->group(function(){

            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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
            Route::put('/detail-jadwal/{id}/edit/{kode_kelas}',[JadwalController::class, 'updateJadwal'])->name('update-jadwal');
            Route::delete('/detail-jadwal/{id}',[JadwalController::class, 'destroy'])->name('delete-jadwal');

            Route::post('/show-kelas',[KelasController::class, 'store']);
            Route::get('/show-kelas/{id}/edit',[KelasController::class, 'editKelas'])->name('edit-kelas');
            Route::put('/show-kelas/{id}', [KelasController::class, 'updateKelas']);
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
            Route::delete('/show-absensi-siswa/{id}/detail/{kode_pertemuan}', [AbsensiController::class, 'destroy']);


            Route::get('/input-ujian',[UjianContoller::class, 'inputUjian'])->name('input-ujian');
            Route::post('/input-ujian',[UjianContoller::class, 'storeJadwalUjian'])->name('input-ujian');

            Route::delete('/show-ujian/{id}',[UjianContoller::class, 'destroy'])->name('delete-ujian');


            Route::get('/show-kelas/detail/{id}', [KelasController::class, 'detailKelas'])->name('detail-kelas');



    });

    Route::middleware(['isWaliKelas'])->group(function(){

        Route::get('/input-nilai/sikap',[NilaiController::class, 'inputNilaiSikap'])->name('input-nilai-sikap');
        Route::get('/input-nilai/sikap/{id}/detail',[NilaiController::class, 'detailNilaiSikap'])->name('detail-nilai-sikap');
        Route::post('/input-nilai/sikap/{id}/detail',[NilaiController::class, 'storeNilaiSikap']);

        Route::get('input-nilai-ujian', [UjianContoller::class, 'inputNilaiUjian'])->name('input-nilai-ujian');
        Route::get('input-nilai-ujian/{id}/detail', [UjianContoller::class, 'detailNilaiUjian'])->name('detail-nilai-ujian');
        Route::post('input-nilai-ujian/{id}/detail', [UjianContoller::class, 'storeNilaiUjian']);

        Route::get('/input-nilai/ekstrakurikuler', [EkstrakurikulerController::class, 'inputNilai'])->name('input-ekstrakurikuler');
        Route::get('/input-nilai/ekstrakurikuler/{id}/detail', [EkstrakurikulerController::class, 'detailNilai'])->name('detail-ekstrakurikuler');
        Route::post('/input-nilai/ekstrakurikuler/{id}/detail', [EkstrakurikulerController::class, 'storeNilai']);

        Route::get('/input-nilai/prestasi', [PrestasiController::class, 'inputNilai'])->name('input-prestasi');
        Route::get('/input-nilai/prestasi/{id}/detail', [PrestasiController::class, 'detailNilai'])->name('detail-prestasi');
        Route::post('/input-nilai/prestasi/{id}/detail', [PrestasiController::class, 'storeNilai']);

    });

    Route::get('/show-ujian',[UjianContoller::class, 'showUjian'])->name('show-ujian');


    Route::get('/show-data-guru',[DataController::class, 'showDataGuru'])->name('show-data-guru');

    Route::get('/show-jadwal/belajar',[JadwalController::class, 'showJadwal'])->name('show-jadwal-belajar');

    Route::get('/detail-jadwal/{id}/detail',[JadwalController::class, 'detailJadwal'])->name('detail-jadwal');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('show-profile', [UserController::class, 'profile'])->name('show-profile');
    Route::put('show-profile/general', [UserController::class, 'updateGeneral'])->name('edit-general');
    Route::put('show-profile', [UserController::class, 'updatePassword'])->name('edit-password');

    Route::get('/show-nilai/lapor',[NilaiController::class, 'showNilaiLapor'])->name('show-nilai-lapor');
    Route::post('/show-nilai/lapor/siswa',[NilaiController::class, 'showNilaiLaporSiswa'])->name('show-nilai-lapor-siswa');

    Route::get('show-nilai/ujian', [UjianContoller::class, 'showNilaiUjian'])->name('show-nilai-ujian');
    Route::post('show-nilai/ujian/siswa', [UjianContoller::class, 'showNilaiUjianSiswa'])->name('show-nilai-ujian-siswa');

});


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


