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
            <form method="post" action="/pasien/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor BPJS</label>
                    <input type="text" class="form-control" name="no_bpjs">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor KTP</label>
                    <input type="text" class="form-control" name="no_ktp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Pasien</label>
                    <input type="text" class="form-control" name="no_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" name="nama_pasien">
                </div>
                <div class="mb-3">
                    <label class="form-label">-Pilih Jenis Kelamin-</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="laki-laki">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                      </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label class="form-label">Handphone</label>
                    <input type="text" class="form-control" name="hp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Pasien</label>
                    <input type="text" class="form-control" name="alamat_pasien">
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
