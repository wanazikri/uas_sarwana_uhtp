<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenControllerFennyAnggela extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index',compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = new Dosen;
        $dosen->nip_dosen = $request->nip;
        $dosen->nama_dosen = $request->nama;
        $dosen->tlp = $request->tlp;
        $dosen->alamat = $request->alamat;
        if ($dosen->save()){
            return redirect()->route('dosen');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        
        $dosen = Dosen::find($request->id);
        $dosen->nip_dosen = $request->nip;
        $dosen->nama_dosen = $request->nama;
        $dosen->tlp = $request->tlp;
        $dosen->alamat = $request->alamat;
        if ($dosen->update()){
            return redirect()->route('dosen');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        if ($dosen->destroy($dosen->id)){
            return redirect()->route('dosen');
        }
    }
}
