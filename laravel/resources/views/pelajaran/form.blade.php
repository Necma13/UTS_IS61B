@extends('layouts.master')
@section('title','Tambah Data Siswa')
@section('judul','Tambah Data siswa')
@section('nama','Hananan Academy')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/pelajaran/store/">
                @csrf
                <div class="form-group">
                    <label for="kd_pel">Kode Pelajaran:</label>
                    <input type="text" class="form-control" id="kd_pel" name="kd_pel">
                </div>
                <div class="form-group">
                    <label for="mapel">Mata Pelajran:</label>
                    <input type="text" class="form-control" id="mapel" name="mapel">
                </div>
                <div class="form-group">
                    <label for="jum_sesi">Jumlah Sesi:</label>
                    <textarea class="form-control" id="jum_sesi" name="jum_sesi" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
