@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>8. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Capaian Pembelajaran</p>
                        <p><b>Tabel : </b>8.a IPK Lulusan</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 8.a IPK Lulusan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Tahun Lulus</th>
                            <th rowspan="2">Jumlah Lulusan</th>
                            <th colspan="3">Indeks Prestasi Kumulatif (IPK) </th>
                        </tr>
                        <tr>
                            <th>Min.</th>
                            <th>Rata-rata</th>
                            <th>Maks.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                TS-2
                            </td>
                            <td colspan="5">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TS-1
                            </td>
                            <td colspan="5">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                TS
                            </td>
                            <td colspan="5">
                                No data
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/811"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
