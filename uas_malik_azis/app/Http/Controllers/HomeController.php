<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Rekammedis;
use App\Models\Petugas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pasien = Pasien::count();
        $petugas = Petugas::count();
        $rekammedis = RekamMedis::count();

        return view('home',compact('pasien','petugas','rekammedis'));
    }

}
