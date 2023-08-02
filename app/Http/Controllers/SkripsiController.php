<?php

namespace App\Http\Controllers;

use App\Models\skripsi;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skripsi = skripsi::all();
        return view('skripsi.index',compact('skripsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skripsi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skripsi = new skripsi;
        $skripsi->nim_mhs = $request->nim;
        $skripsi->nama_mhs = $request->nama;
        $skripsi->kelas = $request->kelas;
        $skripsi->judul = $request->judul;
        $skripsi->tahun = $request->tahun;
        if ($skripsi->save()){
            return redirect()->route('skripsi');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(skripsi $skripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(skripsi $skripsi)
    {
        return view('skripsi.edit',compact('skripsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, skripsi $skripsi)
    {
        $skripsi = skripsi::find($request->id);
        $skripsi->nim_mhs = $request->nim;
        $skripsi->nama_mhs = $request->nama;
        $skripsi->kelas = $request->kelas;
        $skripsi->judul = $request->judul;
        $skripsi->tahun = $request->tahun;
        if ($skripsi->update()){
            return redirect()->route('skripsi');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(skripsi $skripsi)
    {
        if ($skripsi->destroy($skripsi->id)){
            return redirect()->route('skripsi');
        }
    }
}
