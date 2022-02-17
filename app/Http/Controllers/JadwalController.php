<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function inputJadwal()
    {
        $pelajaran = Pelajaran::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('siswa_management.input_jadwal', compact(['pelajaran', 'guru' , 'kelas']));
    }

    public function showJadwal()
    {
        $jadwal = Kelas::all();
        return view('siswa_management.show_jadwal', compact('jadwal'));
    }

    public function detailJadwal()
    {
        $jadwal = Jadwal::where('kode_kelas', 1)->get();
        $senin = Jadwal::where('kode_kelas', 1)->where('hari', 'senin')->get();
        $selasa = Jadwal::where('kode_kelas', 1)->where('hari', 'selasa')->get();
        $rabu = Jadwal::where('kode_kelas', 1)->where('hari', 'rabu')->get();
        $kamis = Jadwal::where('kode_kelas', 1)->where('hari', 'kamis')->get();
        $jumat = Jadwal::where('kode_kelas', 1)->where('hari', 'jumat')->get();
        $sabtu = Jadwal::where('kode_kelas', 1)->where('hari', 'sabtu')->get();

        return view('siswa_management.detail_jadwal', compact(['jadwal', 'senin', 'selasa', 'rabu','kamis','jumat','sabtu']));
    }

    public function store(Request $request){
        $request->validate([
            'hari' => ['required'],
            'jam' => ['required'],
            'matapelajaran' => ['required'],
            'guru' => ['required'],
            'kelas' => ['required'],
        ]);

        Jadwal::create([
            'hari' => $request->hari,
            'jam' => $request->jam,
            'kode_pelajaran' => $request->matapelajaran,
            'kode_guru' => $request->guru,
            'kode_kelas' => $request->kelas,
        ]);

        return redirect('show-jadwal');
    }
}
