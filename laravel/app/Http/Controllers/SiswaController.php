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
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn',
            'nama' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'jjg' => 'required',
            'hp' => 'required'
        ]);

        $sis = new Siswa;
        $sis->nisn = $request->nisn;
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
        if ($sis) {
            return view('siswa.edit', compact('sis'));
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nisn)
    {
        $request->validate([
            'nama' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'jjg' => 'required',
            'hp' => 'required'
        ]);

        $sis = Siswa::find($nisn);
        if ($sis) {
            $sis->nama = $request->nama;
            $sis->tgl = $request->tgl;
            $sis->alamat = $request->alamat;
            $sis->jjg = $request->jjg;
            $sis->hp = $request->hp;
            $sis->save();
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }

        return redirect('/siswa/');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nisn)
    {
        $sis = Siswa::find($nisn);
        $sis->delete();

        return redirect('/siswa/');
    }
}

