<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Hari;
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
        $hari = Hari::all();
        return view('siswa_management.input_jadwal', compact(['pelajaran', 'guru' , 'kelas', 'hari']));
    }

    public function showJadwal()
    {
        $jadwal = Kelas::all();
        return view('siswa_management.show_jadwal', compact('jadwal'));
    }

    public function detailJadwal($id)
    {
        $hari = Hari::all();
        $senin = Jadwal::where('kode_kelas', $id)->where('kode_hari', 1)->get();
        $selasa = Jadwal::where('kode_kelas', 1)->where('kode_hari', 2)->get();
        $rabu = Jadwal::where('kode_kelas', 1)->where('kode_hari', 3)->get();
        $kamis = Jadwal::where('kode_kelas', 1)->where('kode_hari', 4)->get();
        $jumat = Jadwal::where('kode_kelas', 1)->where('kode_hari', 5)->get();
        $sabtu = Jadwal::where('kode_kelas', 1)->where('kode_hari', 6)->get();

        return view('siswa_management.detail_jadwal', compact(['hari', 'senin', 'selasa', 'rabu','kamis','jumat','sabtu']));
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
            'kode_hari' => $request->hari,
            'jam' => $request->jam,
            'kode_pelajaran' => $request->matapelajaran,
            'kode_guru' => $request->guru,
            'kode_kelas' => $request->kelas,
        ]);

        return redirect('show-jadwal');
    }

    public function editJadwal($id){
        $jadwal = Jadwal::where('id', $id)->first();
        $pelajaran = Pelajaran::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $hari = Hari::all();
        return view('siswa_management.edit_jadwal', compact(['jadwal','pelajaran', 'guru' , 'kelas', 'hari']));
    }

    public function updateJadwal(Request $request, $id){

        $request->validate([
            'hari' => ['required'],
            'jam' => ['required'],
            'matapelajaran' => ['required'],
            'guru' => ['required'],
            'kelas' => ['required'],
        ]);


        Jadwal::where('id', $id)->update([
            'kode_hari' => $request->hari,
            'jam' => $request->jam,
            'kode_pelajaran' => $request->matapelajaran,
            'kode_guru' => $request->guru,
            'kode_kelas' => $request->kelas,
        ]);



        return redirect("detail-jadwal/$id/detail");
    }
}
