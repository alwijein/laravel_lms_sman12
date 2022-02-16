<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function inputJadwal()
    {
        return view('jadwal_management.input_jadwal');
    }
}
