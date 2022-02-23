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
                        <p><b>Tabel : </b>4.8. Peningkatan Kemampuan DTPS melalui program Tugas Belajar dalam bidang Infokom
                            ( isian hanya untuk dosen
                            yang sedang/belum selesai tugas belajar)
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Peningkatan Kemampuan DTPS melalui
                    program Tugas Belajar dalam bidang Infokom ( isian hanya untuk dosen
                    yang sedang/belum selesai tugas belajar)</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Dosen</th>
                            <th>Jenjang Tugas Belajar</th>
                            <th>Nama Perguruan Tinggi ( tempat tugas belajar)</th>
                            <th>Program Studi</th>
                            <th>Akreditasi PS ( tempat tugas belajar)</sup> </th>
                            <th>Tahun Masuk</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="9">
                                No data
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/{{ $idTable }}"><i class="fas fa-plus-circle"></i> Input
                    data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
