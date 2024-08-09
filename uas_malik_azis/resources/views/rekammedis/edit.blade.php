@extends('layouts.master')
@section('title','Edit Rekam Medis')
@section('judul','Edit Rekam Medis')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Rekam Medis</a></li>
        <li class="breadcrumb-item active">Edit Rekam Medis</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">


        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="post" action="/rekammedis/{{$rekammedis->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">No Pasien</label>
                    <input type="text" value="{{$rekammedis->no_pasien}}" class="form-control" name="no_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>
                    <input type="text" value="{{$rekammedis->nama_pasien}}" class="form-control" name="nama_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Petugas</label>
                    <input type="text" value="{{$rekammedis->nama_petugas}}" class="form-control" name="nama_petugas">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="text" value="{{$rekammedis->diagnosa}}" class="form-control" name="diagnosa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" value="{{$rekammedis->tanggal_periksa}}" class="form-control" name="tanggal_periksa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" value="{{$rekammedis->jam_periksa}}" class="form-control" name="jam_periksa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" value="{{$rekammedis->status}}" class="form-control" name="status">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
