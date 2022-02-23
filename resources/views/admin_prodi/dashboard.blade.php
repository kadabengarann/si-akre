@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div><!-- /.col -->
    <div class="col-sm-12 mt-2">
        @if (!$isComplete)
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                Profil tidak lengkap, silahkan <a href="/profile">klik disini</a>
            </div>
        @endif<!-- /.container-fluid -->

    </div><!-- /.col -->

@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Instrumen Akreditasi Program Studi
                (IAPS)
            </h3>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 style="font-weight: 400">LKPS</h3>

                        <p>Laporan Kinerja Program Studi</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-chart-bar"></i>
                    </div>
                    <a href="/lkps" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3 style="font-weight: 400">Penilaian Matriks</h3>

                        <p>Isi Penilaian Matriks</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-pen"></i>
                    </div>
                    <a href="/penilaian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Menu Admin Program Studi
            </h3>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 style="font-weight: 400">Program Studi</h3>
                        <p>Pengaturan data</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <a href="/dosen/prodi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3 style="font-weight: 400">Profile</h3>

                        <p>Pengaturan akun</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
