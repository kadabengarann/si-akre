@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Input Data</h1>
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
          <p><b>Kriteria : </b>2. Mahasiswa</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>a. Kualitas Input Mahasiswa</p>
          <p><b>Tabel : </b>Seleksi Mahasiswa</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    {{-- <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info disabled" href="#"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/211">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div> --}}

  </div>


    <!-- /.card -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Seleksi Mahasiswa</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Akademik</label>
            <div class="col-sm-4">
              <select class="form-control " id="subject" name="id_dosen">
                <option value="" selected disabled hidden>Pilih Tahun Akademik</option>
                    <option value="4">TS-4</option>
                    <option value="3">TS-3</option>
                    <option value="2">TS-2</option>
                    <option value="1">TS-1</option>
                    <option value="0">TS</option>
                  </select>
                  <div class="invalid-feedback">
                                                          </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Daya Tampung</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Calon Mahasiswa</label>
            
            <div class="col-sm-10">
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label"></label>              
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-1 col-form-label">Pendaftar</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
              </div>
              <div class="row">
                <label for="inputPassword3" class="col-sm-1 col-form-label">Lulus Sleksi</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah  Mahasiswa Baru</label>
            
            <div class="col-sm-10">
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label"></label>              
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-1 col-form-label">Reguler</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
              </div>
              <div class="row">
                <label for="inputPassword3" class="col-sm-1 col-form-label">Transfer</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah  Mahasiswa Aktif</label>
            
            <div class="col-sm-10">
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label"></label>              
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-1 col-form-label">Reguler</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
              </div>
              <div class="row">
                <label for="inputPassword3" class="col-sm-1 col-form-label">Transfer</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Submit</button>
          <a href="/lkps/view/211" class="btn btn-default float-right">Cancel</button>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
  </section>    
  @endsection

  @section('script')
  <script>
    $(function () {
      //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    })
  </script>
  @endsection
