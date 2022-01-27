@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>3. Mahasiswa</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>b. Layanan dan Kualitas Layanan Kepada mahasiswa</p>
                        <p><b>Tabel : </b>Layanan dan Kualitas Layanan Kepada mahasiswa</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Layanan dan Kualitas Layanan Kepada
                    mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th class="mt-1 mb-1">No</th>
                            <th class="mt-1 mb-1">Jenis Layanan</th>
                            <th class="mt-1 mb-1">Bentuk
                                Layanan
                            </th>
                            <th class="mt-1 mb-1">Pelaksanaan (waktu
                                pelaksanaan)
                            </th>
                            <th class="mt-1 mb-1">Bukti (daftar
                                peserta, laporan
                                kegiatan)</th>
                            <th class="mt-1 mb-1">Keterangan
                            </th>


                        </tr>
                        <tr>
                        </tr>
                    </thead>
                    <tr>
                        <th class="sub-table">

                        </th>
                        <th class="sub-table">
                            Bimbingan dan Konseling
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

                        </th>
                        <th class="sub-table">
                            Minat dan Bakat (ekstra
                            kulikuler)

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

                        </th>
                        <th class="sub-table">
                            Pembinaan Soft Skill
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

                        </th>
                        <th class="sub-table">
                            Beasiswa
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

                        </th>
                        <th class="sub-table">
                            Kesehatan
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

                        </th>
                        <th class="sub-table">
                            Karir
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
                <a class="btn btn-primary" href="/lkps/input/221"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
