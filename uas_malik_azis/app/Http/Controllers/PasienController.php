<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Rekammedis;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pasien = Pasien::all();
        return view('pasien.index',compact('nomor','pasien'));
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::all();
        return view('pasien.form',compact('pasien'));
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pasien = new Pasien;
        $pasien->no_bpjs = $request->no_bpjs;
        $pasien->no_ktp = $request->no_ktp;
        $pasien->no_pasien = $request->no_pasien;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->jk = $request->jk;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->hp = $request->hp;
        $pasien->alamat_pasien = $request->alamat_pasien;
        $pasien->password = bcrypt($request->password);
        $pasien->save();


        return redirect('/pasien/');
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit',compact('pasien'));
    }

        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->No_Pasien = $request->No_Pasien;
        $pasien->Nama_Pasien = $request->Nama_Pasien;
        $pasien->Tanggal_Lahir = $request->Tanggal_Lahir;
        $pasien->Alamat = $request->Alamat;
        $pasien->save();

        return redirect('/pasien/');
    }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('/pasien/');
    }

}
