@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>6. Pendidikan</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>6.18. Pelaksanaan Perbaikan Sistem Pembelajaran selama 3 tahun terakhir</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Pelaksanaan Perbaikan Sistem
                    Pembelajaran selama 3 tahun terakhir</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th class="mt-1 mb-1">No</th>
                            <th class="mt-1 mb-1">Jenis Perbaikan

                            </th>
                            <th class="mt-1 mb-1">Sumber umpan balik (Dosen/ mahasiswa/ Alumni / Pengguna lulusan)

                            </th>
                            <th class="mt-1 mb-1">Cara Perbaikan
                            </th>
                            <th class="mt-1 mb-1">Dampak Perbaikan
                            </th>
                            <th class="mt-1 mb-1">Keterangan
                            </th>
                            <th class="mt-1 mb-1">Bukti
                            </th>
                        </tr>
                        <tr>
                        </tr>
                    </thead>
                    <tr>
                        <th class="sub-table">
                            a
                        </th>
                        <th class="sub-table">
                            Materi

                        </th>
                        <th class="sub-table" colspan="9">
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
                        <th class="sub-table">
                            b
                        </th>
                        <th class="sub-table">
                            Metode Pembelajaran
                        </th>
                        <th class="sub-table" colspan="9">
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
                        <th class="sub-table">
                            c
                        </th>
                        <th class="sub-table">
                            Penggunaan Teknologi Pembelajaran
                        </th>
                        <th class="sub-table" colspan="9">
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
                        <th class="sub-table">
                            d
                        </th>
                        <th class="sub-table">
                            Cara-Cara Evaluasi
                        </th>
                        <th class="sub-table" colspan="9">
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
                <a class="btn btn-primary" href="/lkps/input/618"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
