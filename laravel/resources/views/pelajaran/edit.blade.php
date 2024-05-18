@extends('layouts.master')

@section('title', 'Edit Pelajaran')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Pelajaran</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/pelajaran/{{$pel->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode Pelajaran</label>
                    <input type="text" readonly value="{{$pel->kd_pel}}" class="form-control" name="kd_pel">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Pelajaran</label>
                    <input type="text" readonly value="{{$pel->mapel}}" class="form-control" name="mapel">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Sesi</label>
                    <input type="text" readonly value="{{$pel->jum_sesi}}" class="form-control" name="jum_sesi">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
