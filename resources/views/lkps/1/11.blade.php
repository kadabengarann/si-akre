@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>2. Tata Pamong, Tata Kelola, dan Kerjasama</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Kerjasama</p>
                        <p><b>Tabel : </b>Kerjasama Pendidikan, Penelitian dan PkM</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Kerjasama Pendidikan, Penelitian dan
                    PkM</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Lembaga</th>
                            <th colspan="3">Tingkat</th>
                            <th rowspan="2">Judul Kegiatan Kerjasama</th>
                            <th rowspan="2">Manfaat
                                bagi PS
                                yang
                                Diakreditasi</th>
                            <th rowspan="2">Waktu
                                dan
                                Durasi</th>
                            <th rowspan="2">Bukti
                                Kerjasama</th>
                            <th rowspan="2">Tahun
                                Berakhirnya
                                Kerjasama
                                (YYYY) </th>

                        </tr>
                        <tr>
                            <th>Internasional</th>
                            <th>Nasional</th>
                            <th>Lokal/Wilayah</th>
                        </tr>
                    </thead>
                    <tr>
                        <th class="sub-table" colspan="10">
                            Kerjasama Pendidikan
                        </th>
                    </tr>
                    <tbody>
                        <tr class="table-isi">
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th class="sub-table" colspan="10">
                            Kerjasama Penelitian
                        </th>
                    </tr>
                    <tbody>
                        <tr class="table-isi">
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th class="sub-table" colspan="10">
                            Kerjasama Pengabdian Masyarakat
                        </th>
                    </tr>
                    <tbody>
                        <tr class="table-isi">
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/111"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
