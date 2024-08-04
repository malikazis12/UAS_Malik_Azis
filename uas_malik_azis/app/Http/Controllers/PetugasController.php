<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $petugas = Petugas::all();
        return view('petugas.index',compact('nomor','petugas'));
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petugas = Petugas::all();
        return view('petugas.form',compact('petugas'));
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $petugas = new Petugas;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan = $request->jabatan;
        $petugas->alamat = $request->alamat;
        $petugas->hp = $request->hp;
        $petugas->save();


        return redirect('/petugas/');
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
        $petugas = Petugas::find($id);
        return view('petugas.edit',compact('petugas'));
    }

        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $petugas = Petugas::find($id);
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan = $request->jabatan;
        $petugas->alamat = $request->alamat;
        $petugas->hp = $request->hp;
        $petugas->save();

        return redirect('/petugas/');
    }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $petugas = Petugas::find($id);
        $petugas->delete();

        return redirect('/petugas/');
    }
}
