@extends('layouts.master')

@section('title', 'Dashboard SIM')
@section('judul', 'Dashboard')

@section('bc')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
</ol>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h1>{{$pasien}}</h1>
                    <p>Pasien</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-users"></i>
                </div>
                <a href="/pasien/" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h1>{{$petugas}}</h1>
                    <p>Petugas</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-nurse"></i>
                </div>
                <a href="/petugas" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h1>{{$rekammedis}}</h1>
                    <p>Rekam Medis</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-stethoscope"></i>
                </div>
                <a href="/rekammedis" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
