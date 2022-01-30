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
                        <p><b>Kriteria : </b>3. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Profil Dosen
                        </p>
                        <p><b>Tabel : </b>4.2. Daftar Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata
                            kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti program studi yang
                            diakreditasi.
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            {{-- <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info disabled" href="#"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/411">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div> --}}

        </div>


        <!-- /.card -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di
                    Program Studi yang diakreditasi
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/lkps/view/411">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Dosen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">NIDN/NIDK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Lahir (dd/mm/yyyy)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="">

                            <!-- <div class="form-group row"> -->
                            <!-- <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Lahir (dd/mm/yyyy)</label> -->
                            <!-- <div class="col-sm-9 d-flex flex-column justify-content-center"> -->

                            <!-- <div class="custom-control custom-radio"> -->
                            <!-- <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio"> -->
                            <!-- <label for="customRadio1" class="custom-control-label">Magister/Magister Terapan/ -->
                            <!-- Spesialis</label> -->
                            <!-- </div> -->
                            <!-- <div class="custom-control custom-radio"> -->
                            <!-- <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio"> -->
                            <!-- <label for="customRadio2" class="custom-control-label">Doktor/Doktor Terapan/ -->
                            <!-- Spesialis</label> -->

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan Akademik</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Sertifikasi Dosen (Ya/Tidak)</label>
                        <div class="col-sm-9 custom-checkbox d-flex align-items-center ">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2">
                                <label for="customCheckbox2" class="custom-control-label">Ya</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="inputPassword3" class="col-sm-3 form-label">
                                Pendidikan S1
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gelar</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">PT Asal</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <label for="inputPassword3" class="col-sm-3 form-label">
                                    Pendidikan S2
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Gelar</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">PT Asal</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Pendidikan S3
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Gelar</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">PT Asal</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Bidang
                                                Keahlian</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="/lkps/view/411" class="btn btn-default float-right">Cancel</a>
                        </div>
                        <!-- /.card-footer -->
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function() {
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
