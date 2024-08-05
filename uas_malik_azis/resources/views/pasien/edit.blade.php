@extends('layouts.master')
@section('title','Edit Pasien')
@section('judul','Edit Pasien')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Pasien</a></li>
        <li class="breadcrumb-item active">Edit Jurusan</li>
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
            <form method="post" action="/pasien/{{$pasien->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">No Pasien</label>
                    <input type="text" value="{{$pasien->no_pasien}}" class="form-control" name="no_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>
                    <input type="text" value="{{$pasien->nama_pasien}}" class="form-control" name="nama_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="text" value="{{$pasien->tanggal_lahir}}" class="form-control" name="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" value="{{$pasien->alamat_pasien}}" class="form-control" name="alamat_pasien">
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
