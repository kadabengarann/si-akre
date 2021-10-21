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
@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Data Instrumen Akreditasi Program Studi
                (IAPS) Fakultas
            </h3>
        </div>
        <div class="card-body pb-0">
            <div class="row justify-content-center">
                <section class="col-lg-9 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">Program Studi</h3>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    @foreach ($prodi as $p)
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-university mr-1"></i>
                                    {{ $p->nama }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row m-1">
                                    <a href="/lkps?id={{ $p->id }}" class="btn btn-success col-md-4">Laporan Kinerja
                                        Program Studi</a>
                                </div>
                                <div class="row m-1">
                                    <a href="#" class="btn btn-primary col-md-4">Laporan Evaluasi Diri Program Studi</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
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
