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
          <p><b>Kriteria : </b>5. Pendidikan</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>a. Kurikulum</p>
          <p><b>Tabel : </b>Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info" href="/lkps/view/411"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/521">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div>

  </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        {{-- <table id="tbl_list" class="table table-striped table-bordered table-center-text">
          <thead>
              <tr>
                      <th rowspan="2">Tahun Akademik</th>
                      <th rowspan="2">Daya Tampung</th>
                      <th colspan="2">Jumlah Calon Mahasiswa</th>
                      <th colspan="2">Jumlah Mahasiswa Baru</th>
                      <th colspan="2">Jumlah Mahasiswa Aktif</th>
              </tr>
              <tr>
                      <th>Pendaftar</th>
                      <th>Lulus Seleksi</th>
                      <th>Reguler</th>
                      <th>Transfer</th>
                      <th>Reguler</th>
                      <th>Transfer</th>
              </tr>
              </thead>
          <tbody>
              <tr>
                <td>
                  TS-4
                </td>
                <td  colspan="7">
                  No data
                </td>
              </tr>
              <tr>
                <td>
                  TS-3
                </td>
                <td  colspan="7">
                  No data
                </td>
              </tr>
              <tr>
                <td>
                  TS-2
                </td>
                <td  colspan="7">
                  No data
                </td>
              </tr>
              <tr>
                <td>
                  TS-1
                </td>
                <td  colspan="7">
                  No data
                </td>
              </tr>
              <tr>
                <td>
                  TS
                </td>
                <td  colspan="7">
                  No data
                </td>
              </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2">Jumlah</th>
              <th>NA = </th>
              <th>NA = </th>
              <th>NA = </th>
              <th>NA = </th>
              <th colspan="2">NM = </th>
      </tr>

          </tfoot>
        </table> --}}
    </div>
    
    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
      <a class="btn btn-primary"  href="/lkps/input/211"><i class="fas fa-plus-circle"></i>  Input data</a>
    </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
