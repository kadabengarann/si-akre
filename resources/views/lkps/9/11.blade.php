@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>9. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>9.11. Rata-rata Masa tunggu Lulusan untuk bekerja pertama kali</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Rata-rata Masa tunggu Lulusan
                    untuk bekerja pertama kali</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>Tahun
                                Lulus</th>
                            <th>Jumlah
                                Lulusan</th>
                            <th>Jumlah
                                Lulusan
                                yang
                                Terlacak</th>
                            <th>Rata- rata Waktu Tunggu (Bulan)
                            </th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                TS-4
                            </td>
                            <td colspan="10" class="table-isi">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TS-3
                            </td>
                            <td colspan="10" class="table-isi">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TS-2
                            </td>
                            <td colspan="10" class="table-isi">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th>Jumlah</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/{{ $idTable }}"><i class="fas fa-plus-circle"></i> Input
                    data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
