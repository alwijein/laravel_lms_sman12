<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\NilaiSikap;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function inputNilaiSikap(){
        $kelas = Kelas::all();
        return view('nilai_management.nilai_sikap', compact('kelas'));
    }

    public function detailNilaiSikap($id){
        $siswa = Siswa::where('kode_kelas', $id)->get();
        $kode_kelas = $id;

        return view('nilai_management.detail_nilai_sikap', compact(['siswa', 'kode_kelas']));

    }

    public function storeNilaiSikap(Request $request, $id){
        $request->validate([
            'kode_siswa' => ['required'],
            'jenis_sikap' => ['required'],
            'predikat' => ['required'],
            'desk' => ['required', 'max:255'],
        ]);


        NilaiSikap::create([
            'kode_siswa' => $request->kode_siswa,
            'jenis_sikap' => $request->jenis_sikap,
            'predikat' => $request->predikat,
            'desk' => $request->desk,
        ]);

        return redirect(route('detail-nilai-sikap', ['id' => $id]));
    }

    public function showNilaiLapor(){
        return view('nilai_management.show_nilai_lapor');
    }

    public function showNilaiLaporSiswa(Request $request){

        $request->validate([
            'no_induk' => ['required'],
            'semester' => ['required'],
        ]);

        $siswa = Siswa::where('no_induk', $request->no_induk)->first();
        try {
            $nilai = Nilai::where('kode_siswa', $siswa->id)->where('semester', $request->semester)->get();
            $nilaiSikapSpritual = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'spritual')->get();
            $nilaiSikapSosial = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'sosial')->get();
        } catch (\Throwable $th) {
           return view('nilai_management.components.search_not_found');
        }
        $title = $siswa->nama_siswa;


        return view('nilai_management.components.nilai_lapor', compact('nilai', 'title', 'nilaiSikapSpritual', 'nilaiSikapSosial' , 'siswa'));
    }
}
