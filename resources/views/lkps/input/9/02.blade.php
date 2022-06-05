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
                        <p><b>Kriteria : </b>9. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Capaian Pembelajaran</p>
                        <p><b>Tabel : </b>9.1. Kelulusan Tepat Waktu</p>
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
                        <h3 class="card-title">Tahun Lulus : </h3>
                    </li>
                </ul>
            </div>
            <div class="card-header p-0 ">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-1-tab" data-toggle="pill" href="#custom-tabs-1"
                            role="tab" aria-controls="custom-tabs-1" aria-selected="true">TS-6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-2-tab" data-toggle="pill" href="#custom-tabs-2" role="tab"
                            aria-controls="custom-tabs-2" aria-selected="false">TS-5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-3-tab" data-toggle="pill" href="#custom-tabs-3" role="tab"
                            aria-controls="custom-tabs-3" aria-selected="false">TS-4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-4-tab" data-toggle="pill" href="#custom-tabs-4" role="tab"
                            aria-controls="custom-tabs-4" aria-selected="false">TS-3</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-1" role="tabpanel"
                        aria-labelledby="custom-tabs-1-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">TS-6</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Mahasiswa
                                        Diterima</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Jumlah Mahasiswa yang lulus
                                            pada
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-6
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-5</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-4</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-3
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-2</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-1</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Lulusan s.d. Akhir
                                            TS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Rata-rata Masa
                                            Studi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah mhs. Yang masih
                                            aktif</label>
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
                            <h3 class="col-form-label text-center m-0 p-0">TS-5</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Mahasiswa
                                        Diterima</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Jumlah Mahasiswa yang lulus
                                            pada
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-6
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-5</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-4</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-3
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-2</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-1</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Lulusan s.d. Akhir
                                            TS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Rata-rata Masa
                                            Studi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah mhs. Yang masih
                                            aktif</label>
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
                    <div class="tab-pane fade" id="custom-tabs-3" role="tabpanel" aria-labelledby="custom-tabs-3-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">TS-4</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Mahasiswa
                                        Diterima</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Jumlah Mahasiswa yang lulus
                                            pada
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-6
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-5</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-4</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-3
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-2</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-1</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Lulusan s.d. Akhir
                                            TS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Rata-rata Masa
                                            Studi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah mhs. Yang masih
                                            aktif</label>
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
                    <div class="tab-pane fade" id="custom-tabs-4"4 role="tabpanel" aria-labelledby="custom-tabs-4-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">TS-3</h3>
                            <hr>
                        </div>
                        <form class="form-horizontal" action="/lkps/view/{{ $idTable }}">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Mahasiswa
                                        Diterima</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Jumlah Mahasiswa yang lulus
                                            pada
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-6
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-5</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-4</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir TS-3
                                                </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-2</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS-1</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">Akhir
                                                    TS</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="inputPassword3"
                                                        placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Lulusan s.d. Akhir
                                            TS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Rata-rata Masa
                                            Studi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah mhs. Yang masih
                                            aktif</label>
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


                </div>
            </div>
            <!-- /.card -->
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
