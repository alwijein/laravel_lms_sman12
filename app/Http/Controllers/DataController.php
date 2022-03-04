<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Siswa;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DataController extends Controller
{
    // public function showDataSiswa(){
    //     $siswa = Siswa::all();
    //     $kelas = Kelas::all();
    //     return view('siswa_management.show_data_siswa', compact(['siswa', 'kelas']));
    // }

    public function showDataSiswa(Request $request)
    {
        $kelas = Kelas::all();

        if($request->nomor != null){
            $siswa = Siswa::where('no_induk', $request->nomor)->get();
                return view('siswa_management.show_data_siswa', compact(['siswa', 'kelas']));
        }else{
            $siswa = Siswa::all();
            return view('siswa_management.show_data_siswa', compact(['kelas', 'siswa']));
        }
    }

    public function storeSiswa(Request $request){
        $request->validate([
            'no_induk' => ['required', 'min:5'],
            'nama_siswa' => ['required', 'min:3'],
            'jk' => ['required'],
            'telp' => ['required', 'min:12'],
            'kode_kelas' => ['required'],
            'alamat' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
        ]);


        Siswa::create([
            'no_induk' => $request->no_induk,
            'nama_siswa' => $request->nama_siswa,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'kode_kelas' => $request->kode_kelas,
            'alamat' => $request->alamat,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);


        return redirect('show-data-siswa');
    }

    public function editSiswa($id){
        $siswa = Siswa::where('id', $id)->first();
        $kelas = Kelas::all();
        return view('siswa_management.edit_data_siswa' , compact(['siswa', 'kelas']));
    }

    public function updateSiswa(Request $request, $id){
        $request->validate([
            'no_induk' => ['required', 'min:5'],
            'nama_siswa' => ['required', 'min:3'],
            'jk' => ['required'],
            'telp' => ['required', 'min:12'],
            'kode_kelas' => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
        ]);


        Siswa::where('id', $id)->update([
            'no_induk' => $request->no_induk,
            'nama_siswa' => $request->nama_siswa,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'kode_kelas' => $request->kode_kelas,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect(route('show-data-siswa'));
    }

    // Controller for guru

    // public function showDataGuru(){
    //     $guru = Guru::all();
    //     $pelajaran = Pelajaran::all();
    //     return view('guru_management.show_data_guru', compact(['guru', 'pelajaran']));
    // }

    public function showDataGuru(Request $request)
    {
        $pelajaran = Pelajaran::all();

        if($request->nomor != null){
            $guru = Guru::where('no_induk', $request->nomor)->get();
                return view('guru_management.show_data_guru', compact(['guru', 'pelajaran']));
        }else{
            $guru = Guru::all();
            return view('guru_management.show_data_guru', compact(['pelajaran', 'guru']));
        }
    }

    public function storeGuru(Request $request){

        $request->validate([
            'no_induk' => $request->no_induk != null? ['unique:guru'] : [''],
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

    public function editGuru($id){
        $guru = Guru::where('id', $id)->first();
        $pelajaran = Pelajaran::all();
        return view('guru_management.edit_data_guru' , compact(['guru', 'pelajaran']));
    }

    public function updateGuru(Request $request, $id){
        $request->validate([
            // 'no_induk' => ['unique:no_induk'],
            'nama_guru' => ['required', 'min:3'],
            'jk' => ['required'],
            'telp' => ['required', 'min:12'],
            'kode_pelajaran' => ['required'],
            'alamat' => ['required'],
        ]);



        Guru::where('id', $id)->update([
            'no_induk' => $request->no_induk,
            'nama_guru' => $request->nama_guru,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'kode_pelajaran' => $request->kode_pelajaran,
            'alamat' => $request->alamat,
        ]);

        return redirect(route('show-data-guru'));
    }

    public function destroySiswa($id){
        $siswa = Siswa::where('id', $id)->first();
        $siswa->delete();

        return redirect(route('show-data-siswa'));

    }

    public function destroyGuru($id){
        $guru = Guru::where('id', $id)->first();
        $guru->delete();

        return redirect(route('show-data-guru'));

    }

}
