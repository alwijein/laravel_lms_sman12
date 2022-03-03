<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function inputPelajaran (){
        return view('pelajaran_management.input_pelajaran');
    }

    public function showPelajaran (){
        $pelajaran = Pelajaran::all();
        return view('pelajaran_management.show_pelajaran', compact('pelajaran'));
    }

    public function storePelajaran(Request $request){
        $request->validate([
            'mata_pelajaran' => ['required', 'unique:pelajaran', 'min:3'],
            'jumlah_jam' => ['required'],
        ]);

        Pelajaran::create([
            'mata_pelajaran' => strtolower($request->mata_pelajaran),
            'jumlah_jam' => $request->jumlah_jam,
        ]);

        return redirect('show-pelajaran');
    }

    public function destroy($id){
        $pelajaran = Pelajaran::where('id', $id)->first();
        $pelajaran->delete();

        return redirect('show-pelajaran');
    }
}
