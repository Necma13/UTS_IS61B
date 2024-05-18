@extends('layouts.master')

@section('title', 'Edit Pembayaran')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Pembayaran</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/pembayaran/{{$pem->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor Faktur</label>
                    <input type="text" readonly value="{{$pem->nofak}}" class="form-control" name="nofak">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nisn</label>
                    <input type="text" readonly value="{{$pem->nisn}}" class="form-control" name="nisn">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Bayar</label>
                    <input type="text" readonly value="{{$pem->tgl_b}}" class="form-control" name="tgl_b">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Bayar</label>
                    <input type="text" readonly value="{{$pem->jum_b}}" class="form-control" name="jum_b">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bakti Bayar</label>
                    <input type="text" readonly value="{{$pem->bukti_b}}" class="form-control" name="jjg">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
