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
          <p><b>Kriteria : </b>1. Tata Pamong, Tata Kelola, dan Kerjasama</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>a. Kerjasama</p>
          <p><b>Tabel : </b>Kerjasama Tridharma</p>
          <p><b>Sub-tabel : </b>Pendidikan</p>
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
        <h3 class="card-title">Kerjasama Pendidikan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Lembaga Mitra</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Lembaga Mitra">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Peringkat Akreditasi PS</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Peringkat Akreditasi PS">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Tingkat</label>
            <div class="col-sm-10">
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                <label for="customRadio1" class="custom-control-label">Internasional</label>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
                <label for="customRadio2" class="custom-control-label">Nasional</label>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
                <label for="customRadio2" class="custom-control-label">Wilayah/Lokal</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Kegiatan Kerjasama</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Judul Kegiatan">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Manfaat bagi PS Yang Diakreditasi</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Manfaat bagi PS Yang Diakreditasi">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Waktu dan Durasi</label>
            <div class="input-group col-sm-4" >
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-clock"></i></span>
              </div>
              <input type="text" class="form-control float-right" id="reservationtime">
            </div>
          </div>
          <div class="form-group row">

            
            <!-- /.input group -->
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Bukti Kerjasama</label>

            <div class="custom-file col-sm-3">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun Berakhirnya Kerjasama</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Tahun Berakhirnya Kerjasama">
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Submit</button>
          <a href="/lkps/view/111" class="btn btn-default float-right">Cancel</button>
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
