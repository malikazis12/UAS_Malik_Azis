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

            /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rekammedis = RekamMedis::all();
        return view('rekammedis.form',compact('rekammedis'));
    }

            /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rekammedis = new Rekammedis;
        $rekammedis->no_pasien = $request->no_pasien;
        $rekammedis->keluhan = $request->keluhan;
        $rekammedis->diagnosa = $request->diagnosa;
        $rekammedis->tanggal_periksa = $request->tanggal_periksa;
        $rekammedis->jam_periksa = $request->jam_periksa;
        $rekammedis->status = $request->status;
        $rekammedis->save();


        return redirect('/rekammedis/');
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
        $rekammedis = Rekammedis::find($id);
        return view('rekammedis.edit',compact('rekammedis'));
    }

        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rekammedis = Rekammedis::find($id);
        $rekammedis->No_Pasien = $request->No_Pasien;
        $rekammedis->keluhan = $request->keluhan;
        $rekammedis->diagnosa = $request->diagnosa;
        $rekammedis->tanggal_periksa = $request->tanggal_periksa;
        $rekammedis->jam_periksa = $request->jam_periksa;
        $rekammedis->status = $request->status;
        $rekammedis->save();

        return redirect('/rekammedis/');
    }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
