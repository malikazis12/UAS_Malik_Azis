@extends('layouts.master')
@section('title','Tambah Data Pasien')
@section('judul','Tambah Data Pasien')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Pasien</a></li>
        <li class="breadcrumb-item active">Tambah Data Pasien</li>
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
            <form method="post" action="/rekammedis/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor Pasien</label>
                    <input type="text" class="form-control" name="no_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">Keluhan</label>
                    <input type="text" class="form-control" name="keluhan">
                </div>
                <div class="mb-3">
                    <label class="form-label">Diagnosa</label>
                    <input type="text" class="form-control" name="diagnosa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Periksa</label>
                    <input type="date" class="form-control" name="tanggal_periksa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jam Periksa</label>
                    <input type="clock" class="form-control" name="jam_periksa">
                </div>
                <div class="mb-3">
                    <label class="form-label">-Pilih Status-</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="stabil">
                        <label class="form-check-label" for="inlineRadio1">Stabil</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="kritis">
                        <label class="form-check-label" for="inlineRadio2">Kritis</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="membaik">
                        <label class="form-check-label" for="inlineRadio2">Membaik</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="memburuk">
                        <label class="form-check-label" for="inlineRadio2">Memburuk</label>
                      </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
