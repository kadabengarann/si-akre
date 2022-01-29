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
                        <p><b>Tabel : </b>5.2. Aksesibilitas data dalam Sistem Informasi
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
        <div class="card card-info card-tabs">
            <div class="card-header p-0">
                <ul class="nav nav-tabs  p-0 pt-1 pb-2" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Jenis Data : </h3>
                    </li>
                </ul>
            </div>
            <div class="card-header p-0 ">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-1-tab" data-toggle="pill" href="#custom-tabs-1"
                            role="tab" aria-controls="custom-tabs-1" aria-selected="true">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-2-tab" data-toggle="pill" href="#custom-tabs-2" role="tab"
                            aria-controls="custom-tabs-2" aria-selected="false">Kartu Rencana Studi (KRS)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-3-tab" data-toggle="pill" href="#custom-tabs-3" role="tab"
                            aria-controls="custom-tabs-3" aria-selected="false">Jadwal Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-4-tab" data-toggle="pill" href="#custom-tabs-4" role="tab"
                            aria-controls="custom-tabs-4" aria-selected="false">Nilai Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-5-tab" data-toggle="pill" href="#custom-tabs-5" role="tab"
                            aria-controls="custom-tabs-5" aria-selected="false">Transkrip Akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-6-tab" data-toggle="pill" href="#custom-tabs-6" role="tab"
                            aria-controls="custom-tabs-6" aria-selected="false">Lulusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-7-tab" data-toggle="pill" href="#custom-tabs-7" role="tab"
                            aria-controls="custom-tabs-7" aria-selected="false">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-8-tab" data-toggle="pill" href="#custom-tabs-8" role="tab"
                            aria-controls="custom-tabs-8" aria-selected="false">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-9-tab" data-toggle="pill" href="#custom-tabs-9" role="tab"
                            aria-controls="custom-tabs-9" aria-selected="false">Keuangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-10-tab" data-toggle="pill" href="#custom-tabs-10"
                            role="tab" aria-controls="custom-tabs-10" aria-selected="false">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-11-tab" data-toggle="pill" href="#custom-tabs-11"
                            role="tab" aria-controls="custom-tabs-11" aria-selected="false">Perpustakaan</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-1" role="tabpanel"
                        aria-labelledby="custom-tabs-1-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Mahasiswa</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/411">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                    Manual</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                    Tanpa
                                                    Jaringan</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                    serta dapat
                                                    diakses melalui Jaringan Lokal (LAN)</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                    serta dapat
                                                    diakses melalui Jaringan Luas (WAN)</label>
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
                    <div class="tab-pane fade" id="custom-tabs-2" role="tabpanel" aria-labelledby="custom-tabs-2-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Kartu Rencana Studi (KRS)</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                            <h3 class="col-form-label text-center m-0 p-0">Jadwal Mata Kuliah</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                            <h3 class="col-form-label text-center m-0 p-0">Nilai Mata Kuliah</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                            <h3 class="col-form-label text-center m-0 p-0">Transkrip Akademik </h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                    <div class="tab-pane fade" id="custom-tabs-6" role="tabpanel" aria-labelledby="custom-tabs-6-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Lulusan</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                    <div class="tab-pane fade" id="custom-tabs-7" role="tabpanel" aria-labelledby="custom-tabs-7-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Dosen</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                    <div class="tab-pane fade" id="custom-tabs-8" role="tabpanel" aria-labelledby="custom-tabs-8-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Pegawai</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                    <div class="tab-pane fade" id="custom-tabs-9" role="tabpanel" aria-labelledby="custom-tabs-9-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Keuangan</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                    <div class="tab-pane fade" id="custom-tabs-10" role="tabpanel" aria-labelledby="custom-tabs-10-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Inventaris</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
                    <div class="tab-pane fade" id="custom-tabs-11" role="tabpanel" aria-labelledby="custom-tabs-11-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Perpustakaan</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/211">
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 form-label">
                                        Sistem Pengolahan Data Ditangani</label>
                                    <label class="col-sm-3 form-label">
                                        :
                                    </label>

                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Secara
                                                Manual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                Tanpa
                                                Jaringan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Lokal (LAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Dengan Komputer
                                                serta dapat
                                                diakses melalui Jaringan Luas (WAN)</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="inputPassword3"
                                                    placeholder="">
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
