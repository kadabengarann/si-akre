@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
<div class="row">
    <div class="col-lg-5 col-md-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3 style="font-weight: 400">Laporan Kinerja PS</h3>

          <p>LKPS</p>
        </div>
        <div class="icon">
            <i class="far fa-chart-bar"></i>
        </div>
        <a href="/lkps" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-5 col-md-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3 style="font-weight: 400">Laporan Evaluasi PS</h3>

          <p>LED</p>
        </div>
        <div class="icon">
            <i class="far fa-chart-bar"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
</div>
@endsection
