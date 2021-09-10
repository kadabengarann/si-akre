@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
<div class="col-sm-6">
    <h1 class="m-0">Input Data</h1>
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
                    <p><b>Sub-kriteria : </b>a. Kurikulum
                    </p>
                    <p><b>Tabel : </b>5.a Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran
                    </p>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        {{-- <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
            <a class="btn btn-info disabled" href="#"><i class="fas fa-arrow-circle-left"></i> Prev</a>
            <a class="btn btn-success" href="/lkps/view/211">Next <i class="fas fa-arrow-circle-right"></i></a>
        </div> --}}

    </div>


    <!-- /.card -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tabel 5.a Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/lkps/view/511">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Semester</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Mata Kuliah</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Mata Kuliah</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Mata Kuliah Kompetensi
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="inputPassword3" class="col-sm-3 form-label">Bobot Kredit (sks)</label>
                        <label class="col-sm-3 form-label">
                            :
                        </label>

                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kuliah/Responsi/Tutorial
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Seminar</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Praktikum/Praktik/
                                    Praktik Lapangan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Konversi Kredit ke Jam
                    </label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Capaian Pembelajaran</label>
                        <div class="col-sm-9">
                            <div class="form-group row">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1">
                                    <label for="customCheckbox1" class="custom-control-label">Sikap</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox2">
                                    <label for="customCheckbox2" class="custom-control-label">Pengetahuan</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox3">
                                    <label for="customCheckbox3" class="custom-control-label">Keterampilan Umum</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox4">
                                    <label for="customCheckbox4" class="custom-control-label">Keterampilan
                                        Khusus</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Dokumen Rencana Pembelajaran</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Unit Penyelenggara</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="">
                  </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="/lkps/view/511" class="btn btn-default float-right">Cancel</button>
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