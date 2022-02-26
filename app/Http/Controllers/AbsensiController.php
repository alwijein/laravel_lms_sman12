<?php

namespace App\Http\Controllers;

use App\Models\AbsensiSiswa;
use App\Models\Kehadiran;
use App\Models\Kelas;
use App\Models\Pertemuan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function showAbsen(){
        $kelas = Kelas::all();
        return view('guru_management.show_absensi_siswa', compact('kelas'));
    }

    public function detailAbsen($id){
        $pertemuan = Pertemuan::where('kode_kelas', $id)->get();
        $title = Kelas::where('id' , $id)->first();
        $id_kelas = $id;
        return view('guru_management.detail_absensi_siswa', compact(['pertemuan', 'id_kelas', 'title']));
    }

    public function absensiSiswa($id, $kode_pertemuan){
        $siswa = Siswa::where('kode_kelas', $id)->get();
        $title = Pertemuan::where('id' , $kode_pertemuan)->first();
        $absen = AbsensiSiswa::where('kode_pertemuan', $kode_pertemuan)->get();
        $kehadiran = Kehadiran::all();


        return view('guru_management.absensi_siswa', compact(['siswa', 'absen', 'kehadiran', 'id', 'kode_pertemuan', 'title']));
    }

    public function storePertemuan (Request $request){

        $request->validate([
            'pertemuan' => ['required', 'min:3'],
            'tanggal' => ['required'],
            'kode_kelas' => ['required'],
        ]);

        Pertemuan::create([
            'pertemuan' => $request->pertemuan,
            'tanggal' => $request->tanggal,
            'kode_kelas' => $request->kode_kelas
        ]);

        return redirect("show-absensi-siswa/$request->kode_kelas/detail");
    }

    public function storeAbsen (Request $request, $id, $kode_pertemuan){

        // dd($request);
        $request->validate([
            'kode_pertemuan' => ['required'],
            'kode_siswa' => ['required'],
            'kode_kehadiran' => ['required'],
        ]);


        AbsensiSiswa::create([
            'kode_pertemuan' => $request->kode_pertemuan,
            'kode_siswa' => $request->kode_siswa,
            'kode_kehadiran' => $request->kode_kehadiran
        ]);


        return redirect("show-absensi-siswa/$id/detail/$kode_pertemuan");
    }

    public function destroy($id, $kode_pertemuan){
        $pertemuan = AbsensiSiswa::where('id', $id)->where('kode_pertemuan',$kode_pertemuan)->first();
        $pertemuan->delete();

        return redirect("show-absensi-siswa/$id/detail/$kode_pertemuan");

    }
}
