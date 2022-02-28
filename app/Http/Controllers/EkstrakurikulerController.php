<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\NilaiEkstrakurikuler;
use App\Models\Siswa;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function inputNilai(){
        $kelas = Kelas::all();
        return view('nilai_management.input_nilai_ekstrakurikuler', compact('kelas'));
    }

    public function detailNilai($id){

        $siswa = Siswa::where('kode_kelas', $id)->get();
        $kode_kelas = $id;

        return view('nilai_management.detail_nilai_ekstrakurikuler', compact(['siswa', 'kode_kelas']));
    }

    public function storeNilai(Request $request, $id){
        $request->validate([
            'kode_siswa' => ['required'],
            'kegiatan' => ['required'],
            'nilai' => ['required'],
            'desk' => ['required'],
        ]);

        NilaiEkstrakurikuler::create([
            'kode_siswa' => $request->kode_siswa,
            'kegiatan' => $request->kegiatan,
            'nilai' => $request->nilai,
            'deskripsi' => $request->desk,
        ]);

        return redirect(route('detail-ekstrakurikuler', ['id' => $id]));
    }
}
