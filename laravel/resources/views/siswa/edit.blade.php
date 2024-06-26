@extends('layouts.master')

@section('title', 'Edit Siswa')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/siswa/{{$sis->nisn}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" readonly value="{{$sis->nama}}" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="text" readonly value="{{$sis->tgl}}" class="form-control" name="tgl">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" readonly value="{{$sis->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenjang Pendidikan</label>
                    <input type="text" readonly value="{{$sis->jjg}}" class="form-control" name="jjg">
                </div>
                <div class="mb-3">
                    <label class="form-label">No.HP</label>
                    <input type="text" readonly value="{{$sis->hp}}" class="form-control" name="hp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
