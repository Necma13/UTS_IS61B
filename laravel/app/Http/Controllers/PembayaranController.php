<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pem = Pembayaran::all();
        return view('pembayaran.index', compact('nomor', 'pem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembayaran.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nofak' => 'required|unique:pembayarans,nofak',
            'nisn' => 'required',
            'tgl_b' => 'required|date',
            'jum_b' => 'required|integer',
            'bukti_b' => 'required|string',
        ]);

        $pem = new Pembayaran;
        $pem->nofak = $request->nofak;
        $pem->nisn = $request->nisn;
        $pem->tgl_b = $request->tgl_b;
        $pem->jum_b = $request->jum_b;
        $pem->bukti_b = $request->bukti_b;
        $pem->save();

        return redirect('/pembayaran/')->with('success', 'Data Pembayaran berhasil disimpan');
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
        $pem = Pembayaran::find($id);
        if ($pem) {
            return view('pembayaran.edit', compact('pem'));
        } else {
            return redirect('/pembayaran/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nofak' => 'required|unique:pembayarans,nofak,' . $id,
            'nisn' => 'required',
            'tgl_b' => 'required|date',
            'jum_b' => 'required|integer',
            'bukti_b' => 'required|string',
        ]);

        $pem = Pembayaran::find($id);
        if ($pem) {
            $pem->nofak = $request->nofak;
            $pem->nisn = $request->nisn;
            $pem->tgl_b = $request->tgl_b;
            $pem->jum_b = $request->jum_b;
            $pem->bukti_b = $request->bukti_b;
            $pem->save();
            return redirect('/pembayaran/')->with('success', 'Data Pembayaran berhasil diupdate');
        } else {
            return redirect('/pembayaran/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pem = Pembayaran::find($id);
        if ($pem) {
            $pem->delete();
            return redirect('/pembayaran/')->with('success', 'Data Pembayaran berhasil dihapus');
        } else {
            return redirect('/pembayaran/')->withErrors('Data tidak ditemukan');
        }
    }
}

