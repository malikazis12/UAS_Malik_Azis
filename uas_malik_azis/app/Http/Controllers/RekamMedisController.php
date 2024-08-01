<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekammedis;

class RekamMedisController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $rekammedis = RekamMedis::all();
        return view('rekammedis.index',compact('nomor','rekammedis'));
    }
}
