@extends('master')

@section('title', 'Tambah Siswa')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Siswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tgl" name="tgl">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="jjg">Jurusan:</label>
                    <input type="text" class="form-control" id="jjg" name="jjg">
                </div>
                <div class="form-group">
                    <label for="hp">Nomor HP:</label>
                    <input type="text" class="form-control" id="hp" name="hp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
