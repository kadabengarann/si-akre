@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Laporan Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kualitas Input Mahasiswa</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="jsGrid1"></div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
