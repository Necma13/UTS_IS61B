@extends('master')

@section('title', 'Edit Siswa')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tgl" name="tgl" value="{{ $siswa->tgl }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $siswa->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="jjg">Jurusan:</label>
                    <input type="text" class="form-control" id="jjg" name="jjg" value="{{ $siswa->jjg }}">
                </div>
                <div class="form-group">
                    <label for="hp">Nomor HP:</label>
                    <input type="text" class="form-control" id="hp" name="hp" value="{{ $siswa->hp }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
