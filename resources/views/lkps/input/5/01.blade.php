@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Input Data</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
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
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b> 5.1 Sumber Pendanaan Program Studi pada TS
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            {{-- <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
            <a class="btn btn-info disabled" href="#"><i class="fas fa-arrow-circle-left"></i> Prev</a>
            <a class="btn btn-success" href="/lkps/view/{{ $idTable }}">Next <i class="fas fa-arrow-circle-right"></i></a>
        </div> --}}

        </div>


        <!-- /.card -->
        <div class="card card-info card-tabs">
            <div class="card-header p-0">
                <ul class="nav nav-tabs  p-0 pt-1 pb-2" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Sumber Dana : </h3>
                    </li>
                </ul>
            </div>
            <div class="card-header p-0 ">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-1-tab" data-toggle="pill" href="#custom-tabs-1"
                            role="tab" aria-controls="custom-tabs-1" aria-selected="true">Dana dari SPP Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-2-tab" data-toggle="pill" href="#custom-tabs-2" role="tab"
                            aria-controls="custom-tabs-2" aria-selected="false">Dana dari Yayasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-3-tab" data-toggle="pill" href="#custom-tabs-3" role="tab"
                            aria-controls="custom-tabs-3" aria-selected="false">Dana dari luar SPP, non Yayasan</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-1" role="tabpanel"
                        aria-labelledby="custom-tabs-1-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Dana dari SPP Mahasiswa</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah (dalam Juta
                                            rupiah)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Bukti</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-2" role="tabpanel" aria-labelledby="custom-tabs-2-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Dana dari Yayasan</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah (dalam Juta
                                        rupiah)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Bukti</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-3" role="tabpanel" aria-labelledby="custom-tabs-3-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Dana dari luar SPP, non Yayasan</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah (dalam Juta
                                        rupiah)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Bukti</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>


                </div>
            </div>
            <!-- /.card -->
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
