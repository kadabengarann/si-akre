@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Lembar Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lembar Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
<section class="content">
  <div class="card card-primary card-outline">
    <div class="card-body">    
      <div class="row">
        <div class="col-12 col-lg-6">
          <p><b>Kriteria : </b>3. Sumber Daya Manusia</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
          <p><b>Tabel : </b>Dosen Pembimbing Utama Tugas Akhir</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info" href="/lkps/view/311"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/313">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div>

  </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">Dosen Pembimbing Utama Tugas Akhir</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tbl_list" class="table table-striped table-bordered table-center-text">
          <thead>
              <tr>
                      <th rowspan="3">No.</th>
                      <th rowspan="3">Nama Dosen</th>
                      <th colspan="8">Jumlah Mahasiswa yang Dibimbing </th>
                      <th rowspan="3">Rata-rata Jumlah Bimbingan di semua Program/ Semester</th>
              </tr>
              <tr>
                      <th colspan="4">pada PS yang Diakreditasi</th>
                      <th colspan="4">pada PS Lain di PT</th>
              </tr>
              <tr>
                      <th>TS-2</th>
                      <th>TS-1</th>
                      <th>TS</th>
                      <th>Rata- rata</th>
                      <th>TS-2</th>
                      <th>TS-1</th>
                      <th>TS</th>
                      <th>Rata- rata</th>
              </tr>
              </thead>
          <tbody>
              <tr>
                <td  colspan="11">
                  No data
                </td>
              </tr>
          </tbody>
        </table>
    </div>
    
    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
      <a class="btn btn-primary"  href="/lkps/input/312"><i class="fas fa-plus-circle"></i>  Input data</a>
    </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
