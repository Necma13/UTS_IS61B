<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pel = Pelajaran::all();
        return view('pelajaran.index', compact('nomor', 'pel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelajaran.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_pel' => 'required',
            'mapel' => 'required',
            'jum_sesi' => 'required',
        ]);

        $pel = new Pelajaran;
        $pel->kd_pel = $request->kd_pel;
        $pel->mapel = $request->mapel;
        $pel->jum_sesi = $request->jum_sesi; // Sesuaikan dengan input form
        $pel->save();

        return redirect('/pelajaran/')->with('success', 'Data pelajaran berhasil disimpan');
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
        $pel = Pelajaran::find($id);
        if ($pel) {
            return view('pelajaran.edit', compact('pel'));
        } else {
            return redirect('/pelajaran/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kd_pel' => 'required',
            'mapel' => 'required',
            'jum_sesi' => 'required',
        ]);

        $pel = Pelajaran::find($id);
        if ($pel) {
            $pel->kd_pel = $request->kd_pel;
            $pel->mapel = $request->mapel;
            $pel->jum_sesi = $request->jum_sesi;
            $pel->save();
            return redirect('/pelajaran/')->with('success', 'Data pelajaran berhasil diupdate');
        } else {
            return redirect('/pelajaran/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pel = Pelajaran::find($id);
        if ($pel) {
            $pel->delete();
            return redirect('/pelajaran/')->with('success', 'Data pelajaran berhasil dihapus');
        } else {
            return redirect('/pelajaran/')->withErrors('Data tidak ditemukan');
        }
    }
}


