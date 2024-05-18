@extends('layouts.master')

@section('title', 'Tambah Pembayaran')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Pembayaran</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('pembayaran.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nofak">Nomor Faktur:</label>
                    <input type="text" class="form-control" id="nofak" name="nofak" required>
                </div>
                <div class="form-group">
                    <label for="nisn">NISN:</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" required>
                </div>
                <div class="form-group">
                    <label for="tgl_b">Tanggal Bayar:</label>
                    <input type="date" class="form-control" id="tgl_b" name="tgl_b" required>
                </div>
                <div class="form-group">
                    <label for="jum_b">Jumlah Bayar:</label>
                    <input type="number" class="form-control" id="jum_b" name="jum_b" required>
                </div>
                <div class="form-group">
                    <label for="bukti_b">Bukti Bayar:</label>
                    <input type="text" class="form-control" id="bukti_b" name="bukti_b" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
