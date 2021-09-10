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
  <div class="card card-primary card-outline">
    <div class="card-body">    
      <div class="row">
        <div class="col-12 col-lg-6">
          <p><b>Kriteria : </b>3. Sumber Daya Manusia</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
          <p><b>Tabel : </b>Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info" href="/lkps/view/312"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/314">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div>

  </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tbl_list" class="table table-striped table-bordered table-center-text">
          <thead>
              <tr>
                      <th rowspan="3">No.</th>
                      <th rowspan="3">Nama Dosen (DT)</th>
                      <th rowspan="3">DTPS</th>
                      <th colspan="6">Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                      <th rowspan="3">Jumlah (sks)</th>
                      <th rowspan="3">Rata-rata 
                        per 
                        Semester
                        (sks)
                        </th>
              </tr>
              <tr>
                      <th colspan="3">Pendidikan: Pembelajaran dan Pembimbingan</th>
                      <th rowspan="2">Penelitian</th>
                      <th rowspan="2">PkM</th>
                      <th rowspan="2">Tugas Tambahan dan/atau Penunjang</th>
              </tr>
              <tr>
                      <th>PS yang Diakreditasi</th>
                      <th>PS Lain di dalam PT</th>
                      <th>PS Lain di luar PT</th>
              </tr>
              </thead>
          <tbody>
              <tr>
                <td  colspan="11">
                  No data
                </td>
              </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="9" class="text-right">Rata-rata DT</th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th colspan="9" class="text-right">Rata-rata DTPS</th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
    </div>
    
    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
      <a class="btn btn-primary"  href="/lkps/input/313"><i class="fas fa-plus-circle"></i>  Input data</a>
    </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
