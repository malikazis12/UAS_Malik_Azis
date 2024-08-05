@extends('layouts.master')
@section('title','Edit Petugas')
@section('judul','Edit Petugas')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Petugas</a></li>
        <li class="breadcrumb-item active">Edit Petugas</li>
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
            <form method="post" action="/petugas/{{$petugas->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Petugas</label>
                    <input type="text" value="{{$petugas->nama_petugas}}" class="form-control" name="nama_petugas">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" value="{{$petugas->jabatan}}" class="form-control" name="jabatan">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" value="{{$petugas->alamat}}" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label class="form-label">HandPhone</label>
                    <input type="text" value="{{$petugas->hp}}" class="form-control" name="hp">
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
