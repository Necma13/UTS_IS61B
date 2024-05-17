<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $sis = Siswa::all();
        return view('siswa.index',compact('nomor','sis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sis = new Siswa;
        $sis->nama = $request->nama;
        $sis->tgl = $request->tgl;
        $sis->alamat = $request->alamat;
        $sis->jjg = $request->jjg;
        $sis->hp = $request->hp;
        $sis->save();

        return redirect('/siswa/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nisn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nisn)
    {
        $sis = Siswa::find($nisn);
        return view('siswa.edit',compact('sis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nisn)
    {
        $sis = Siswa::find($nisn);
        $sis->nama = $request->nama;
        $sis->tgl = $request->tgl;
        $sis->alamat = $request->alamat;
        $sis->jjg = $request->jjg;
        $sis->hp = $request->hp;
        $sis->save();

        return redirect('/siswa/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nisn)
    {
        //
    }
}
