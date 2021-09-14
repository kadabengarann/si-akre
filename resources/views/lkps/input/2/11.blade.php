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

        </div>


        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Seleksi Mahasiswa</h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-1-tab" data-toggle="pill" href="#custom-tabs-1"
                            role="tab" aria-controls="custom-tabs-1" aria-selected="true">TS-4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-2-tab" data-toggle="pill" href="#custom-tabs-2" role="tab"
                            aria-controls="custom-tabs-2" aria-selected="false">TS-3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-3-tab" data-toggle="pill" href="#custom-tabs-3" role="tab"
                            aria-controls="custom-tabs-3" aria-selected="false">TS-2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-4-tab" data-toggle="pill" href="#custom-tabs-4" role="tab"
                            aria-controls="custom-tabs-4" aria-selected="false">TS-1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-5-tab" data-toggle="pill" href="#custom-tabs-5" role="tab"
                            aria-controls="custom-tabs-5" aria-selected="false">TS</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-1" role="tabpanel"
                        aria-labelledby="custom-tabs-1-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Seleksi Mahasiswa TS-4</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Daya Tampung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Calon Mahasiswa</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Pendaftar</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Lulus Sleksi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Baru</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Aktif</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/211" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-2" role="tabpanel" aria-labelledby="custom-tabs-2-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Seleksi Mahasiswa TS-3</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Daya Tampung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Calon Mahasiswa</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Pendaftar</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Lulus Sleksi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Baru</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Aktif</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/211" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-3" role="tabpanel" aria-labelledby="custom-tabs-3-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Seleksi Mahasiswa TS-2</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Daya Tampung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Calon Mahasiswa</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Pendaftar</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Lulus Sleksi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Baru</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Aktif</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/211" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-4" role="tabpanel" aria-labelledby="custom-tabs-4-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Seleksi Mahasiswa TS-1</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Daya Tampung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Calon Mahasiswa</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Pendaftar</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Lulus Sleksi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Baru</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Aktif</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/211" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-5" role="tabpanel" aria-labelledby="custom-tabs-5-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Seleksi Mahasiswa TS</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Daya Tampung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Calon Mahasiswa</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Pendaftar</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Lulus Sleksi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Baru</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa Aktif</label>

                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-3 col-form-label"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Reguler</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputtext3" class="col-sm-1 col-form-label">Transfer</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputtext3" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/211" class="btn btn-default float-right">Cancel</a>
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
