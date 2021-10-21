@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>3. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
                        <p><b>Tabel : </b> Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di Program Studi
                            yang Diakreditasi</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500"> Dosen Tidak Tetap yang ditugaskan
                    sebagai pengampu mata kuliah di Program Studi yang Diakreditasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Dosen</th>
                            <th>NIDN/ NIDK</th>
                            <th>Pendidikan Pasca Sarjana</th>
                            <th>Bidang Keahlian</th>
                            <th>Jabatan Akademik</th>
                            <th>Sertifikat Pendidik Profesional</th>
                            <th>Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>
                            <th>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>
                            <th>Jabatan Akademik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10">
                                No data
                            </td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>&Sigma;</th>
                            <th>NDT = </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/314"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
