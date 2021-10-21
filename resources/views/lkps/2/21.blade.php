@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>2. Mahasiswa</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>b. Mahasiswa Asing</p>
                        <p><b>Tabel : </b>Mahasiswa Asing (Foreign Student)
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Mahasiswa Asing (Foreign Student)
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Program Studi</th>
                            <th colspan="3">Jumlah Mahasiswa Aktif</th>
                            <th colspan="3">Jumlah Mahasiswa Asing Penuh Waktu (Full-time)</th>
                            <th colspan="3">Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</th>
                        </tr>
                        <tr>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="11">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Jumlah</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>

                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/221"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
