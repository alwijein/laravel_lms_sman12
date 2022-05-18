<?php

namespace App\Http\Controllers;


use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function showKelas(){
        $kelas = Kelas::all();
        return view('siswa_management.show_kelas', compact('kelas'));
    }

    public function store(Request $request){
        $request->validate([
            'kelas' => ['required' , 'unique:kelas'],
        ]);

        Kelas::create([
            'kelas' => $request->kelas,
        ]);

        return redirect('show-kelas');
    }


    public function editKelas($id){

        $kelas = Kelas::where('id', $id)->first();
        $waliKelas = User::where('role', 'WaliKelas')->get();
        return view('siswa_management.edit_kelas', compact(['kelas', 'waliKelas']));
    }

    public function updateKelas(Request $request, $id){
        $request->validate([
            'kelas' => ['required'],
        ]);

        Kelas::where('id', $id)->update([
            'kelas' => $request->kelas,
        ]);

        return redirect('show-kelas');
    }

    public function destroy($id){
        $kelas = Kelas::where('id', $id)->first();
        $kelas->delete();

        return redirect('show-kelas');
    }
}
