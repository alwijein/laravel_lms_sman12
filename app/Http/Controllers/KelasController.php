<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function showKelas(){
        $kelas = Kelas::all();
        return view('siswa_management.show_kelas', compact('kelas'));
    }

    public function store(Request $request){
        $request->validate([
            'kelas' => ['required' , 'unique:kelas']
        ]);

        Kelas::create([
            'kelas' => $request->kelas
        ]);

        return redirect('show-kelas');
    }

    public function destroy($id){
        $kelas = Kelas::where('id', $id)->first();
        $kelas->delete();

        return redirect('show-kelas');
    }
}
