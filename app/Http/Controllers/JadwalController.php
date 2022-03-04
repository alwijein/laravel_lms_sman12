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
        $senin = Jadwal::where('kode_kelas', $id)->where('kode_hari', 1)->orderBy('jam', 'asc')->get();
        $selasa = Jadwal::where('kode_kelas', $id)->where('kode_hari', 2)->orderBy('jam', 'asc')->get();
        $rabu = Jadwal::where('kode_kelas', $id)->where('kode_hari', 3)->orderBy('jam', 'asc')->get();
        $kamis = Jadwal::where('kode_kelas', $id)->where('kode_hari', 4)->orderBy('jam', 'asc')->get();
        $jumat = Jadwal::where('kode_kelas', $id)->where('kode_hari', 5)->orderBy('jam', 'asc')->get();
        $kelas = Kelas::all();

        // dd(" $kelas[$id]->kelas");

        $title = $kelas[$id - 1]->kelas?? "";

        return view('siswa_management.detail_jadwal', compact(['hari', 'senin', 'selasa', 'rabu','kamis','jumat', 'title']));
    }

    public function store(Request $request){
        $request->validate([
            'hari' => ['required'],
            'jamStart' => ['required'],
            'jamEnd' => ['required'],
            'matapelajaran' => ['required'],
            'kelas' => ['required'],
        ]);

        $jam = "$request->jamStart - $request->jamEnd";


        Jadwal::create([
            'kode_hari' => $request->hari,
            'jam' => $jam,
            'kode_pelajaran' => $request->matapelajaran,
            'kode_guru' => $request->guru,
            'kode_kelas' => $request->kelas,
        ]);

        return redirect(route('input-jadwal'));
    }

    public function editJadwal($id){
        $jadwal = Jadwal::where('id', $id)->first();
        $pelajaran = Pelajaran::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $hari = Hari::all();
        $jam = explode("-",$jadwal->jam);

        $jamStart = $jam[0];
        $jamEnd = $jam[1];


        return view('siswa_management.edit_jadwal', compact(['jadwal','pelajaran', 'guru' , 'kelas', 'hari', 'jamStart', 'jamEnd']));
    }

    public function updateJadwal(Request $request, $id, $kode_kelas){

        $request->validate([
            'hari' => ['required'],
            'jamStart' => ['required'],
            'jamEnd' => ['required'],
            'matapelajaran' => ['required'],
            'kelas' => ['required'],
        ]);

        $jam = "$request->jamStart - $request->jamEnd";

        Jadwal::where('id', $id)->update([
            'kode_hari' => $request->hari,
            'jam' => $jam,
            'kode_pelajaran' => $request->matapelajaran,
            'kode_guru' => $request->guru,
            'kode_kelas' => $request->kelas,
        ]);



        return redirect("detail-jadwal/$kode_kelas/detail");
    }

    public function showJadwalMengajar()
    {
        $guru = Guru::all();
        return view('guru_management.show_jadwal', compact('guru'));
    }

    public function showJadwalGuru(Request $request)
    {
        $request->validate([
            'nama_guru' => ['required'],
        ]);
        $guru = Guru::where('nama_guru', $request->nama_guru)->first();

        try {
            $jadwal = Jadwal::where('kode_guru', $guru->id)->get();
        } catch (\Throwable $th) {
           return view('guru_management.components.search_not_found');
        }

        $title = $guru->nama_guru;


        return view('guru_management.components.jadwal_mengajar', compact('jadwal', 'title'));
    }

    public function destroy($id){
        $jadwal = Jadwal::where('id', $id)->first();
        $jadwal->delete();

        return redirect("detail-jadwal/$id/detail");

    }
}
