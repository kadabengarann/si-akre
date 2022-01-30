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
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b> 5.7. Sumber Pustaka berupa Buku teks dan lain-lain dalam bidang Infokom</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

        </div>


        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Nama Terbitan </h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-1-tab" data-toggle="pill" href="#custom-tabs-1"
                            role="tab" aria-controls="custom-tabs-1" aria-selected="true">Buku teks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-2-tab" data-toggle="pill" href="#custom-tabs-2" role="tab"
                            aria-controls="custom-tabs-2" aria-selected="false"> Disertasi/Tesis/Skripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-3-tab" data-toggle="pill" href="#custom-tabs-3" role="tab"
                            aria-controls="custom-tabs-3" aria-selected="false">Prosiding seminar Nasional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-4-tab" data-toggle="pill" href="#custom-tabs-4" role="tab"
                            aria-controls="custom-tabs-4" aria-selected="false"> Prosiding Seminar Internasional</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-1" role="tabpanel"
                        aria-labelledby="custom-tabs-1-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Buku teks</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/517">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah judul</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah eksp</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Versi (online/Cetak)</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/517" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-2" role="tabpanel" aria-labelledby="custom-tabs-2-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0"> Disertasi/Tesis/Skripsi</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/517">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah judul</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah eksp</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Versi (online/Cetak)</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/517" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-3" role="tabpanel" aria-labelledby="custom-tabs-3-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Prosiding seminar Nasional</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/517">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah judul</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah eksp</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Versi (online/Cetak)</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/517" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-4" role="tabpanel" aria-labelledby="custom-tabs-4-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0"> Prosiding Seminar Internasional</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/517">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah judul</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah eksp</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Versi (online/Cetak)</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/517" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <!-- /.card -->
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
