@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>4. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
                        <p><b>Tabel : </b>4.6. Profesionalisme Dosen</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500"> Profesionalisme Dosen</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Dosen Tetap</th>
                            <th rowspan="2">Nama Asosiasi Keanggotaan Bidang Infokom</th>
                            <th rowspan="2">Nomor Anggota</th>
                            <th colspan="2">Tingkat</th>
                            <th rowspan="2">Bukti Keanggotaan <sup>1)</sup> </th>
                            <th colspan="2">Sertifikasi Profesi</th>
                            <th rowspan="2">Bukti Pemilihan<sup>1)</sup></th>

                        </tr>
                        <tr>
                            <th>Nasional</th>
                            <th>Internasional</th>
                            <th>Nama Sertifikasi</th>
                            <th>Tingkat (Nasional/Internasional)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/415"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection