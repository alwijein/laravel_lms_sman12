<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Pelajaran;
use App\Models\Siswa;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showDataSiswa(){
        $siswa = Siswa::all();
        return view('siswa_management.show_data_siswa', compact('siswa'));
    }

    public function showDataGuru(){
        $guru = Guru::all();
        $pelajaran = Pelajaran::all();
        return view('guru_management.show_data_guru', compact(['guru', 'pelajaran']));
    }


    public function storeSiswa(Request $request){
        $request->validate([
            'no_induk' => ['required', 'min:5'],
            'nama_siswa' => ['required', 'min:3'],
            'jk' => ['required'],
            'telp' => ['required', 'min:12'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
        ]);


        Siswa::create([
            'no_induk' => $request->no_induk,
            'nama_siswa' => $request->nama_siswa,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);


        return redirect('show-data-siswa');
    }

    public function storeGuru(Request $request){
        $request->validate([
            'no_induk' => ['required', 'min:5'],
            'nama_guru' => ['required', 'min:3'],
            'jk' => ['required'],
            'telp' => ['required', 'min:12'],
            'kode_pelajaran' => ['required'],
            'alamat' => ['required'],
        ]);


        Guru::create([
            'no_induk' => $request->no_induk,
            'nama_guru' => $request->nama_guru,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'kode_pelajaran' => $request->kode_pelajaran,
            'alamat' => $request->alamat,
        ]);


        return redirect('show-data-guru');
    }

}
