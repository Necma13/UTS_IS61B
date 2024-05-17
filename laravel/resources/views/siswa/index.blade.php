@extends('layouts.master')
@section('title','Dashboard')
@section('judul','Dashboard')
@section('nama','Hananan Academy')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenjang Pendidikan</th>
                            <th>No.HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sis as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tgl}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->jjg}}</td>
                        <td>{{$item->hp}}</td>
                        <td>
                            <a href="/siswa/edit/{{$item->nisn}}" class="btn btn-info btn-xs"><i class="fa fa-pen"></i></a>
                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        @empty
                    <tr>
                        <td colspan="4">Tidak Ada data</td>
                    </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
