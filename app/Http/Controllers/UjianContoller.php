<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\JadwalUjian;
use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class UjianContoller extends Controller
{
    public function showUjian()
    {
        $jadwalUjian = JadwalUjian::orderBy('tanggal', 'asc')->get();
        return view('ujian_management.show_jadwal_ujian', compact('jadwalUjian'));
    }

    public function inputUjian()
    {
        $hari = Hari::all();
        $pelajaran = Pelajaran::all();
        return view('ujian_management.input_jadwal_ujian', compact(['hari', 'pelajaran']));
    }

    public function storeJadwalUjian(Request $request){
        $request->validate([
            'tanggal' => ['required'],
            'hari' => ['required'],
            'jamStart' => ['required'],
            'jamEnd' => ['required'],
            'matapelajaran' => ['required'],
        ]);

        $jam = "$request->jamStart - $request->jamEnd";
        JadwalUjian::create([
            'tanggal' => $request->tanggal,
            'kode_hari' => $request->hari,
            'jam' => $jam,
            'kode_pelajaran' => $request->matapelajaran,
        ]);

        return redirect('input-ujian');
    }

    public function destroy($id){
        $jadwalUjian = JadwalUjian::where('id', $id)->first();
        $jadwalUjian->delete();

        return redirect('show-ujian');
    }


    // Nilai Ujian Controller

    public function inputNilaiUjian(){
        $kelas = Kelas::all();
        return view('ujian_management.input_nilai_ujian', compact('kelas'));
    }

    // ...

}
