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
                        <p><b>Tabel : </b>Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di
                            Program Studi yang diakreditasi</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Dosen Tetap Perguruan Tinggi yang
                    ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Dosen</th>
                            <th rowspan="2">NIDN/ NIDK</th>
                            <th colspan="2">Pendidikan Pasca Sarjana</th>
                            <th rowspan="2">Bidang Keahlian</th>
                            <th rowspan="2">Kesesuaian dengan Kompetensi Inti PS</th>
                            <th rowspan="2">Jabatan Akademik</th>
                            <th rowspan="2">Sertifikat Pendidik Profesional</th>
                            <th rowspan="2">Sertifikat Kompetensi/ Profesi/ Industr</th>
                            <th rowspan="2">Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>
                            <th rowspan="2">Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>
                            <th rowspan="2">Mata Kuliah yang Diampu pada PS Lain</th>
                        </tr>
                        <tr>
                            <th>Magister/ Magister Terapan/ Spesialis</th>
                            <th>Doktor/ Doktor Terapan/ Spesialis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="13">
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
                            <th>NDTS = </th>
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
                <a class="btn btn-primary" href="/lkps/input/311"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
