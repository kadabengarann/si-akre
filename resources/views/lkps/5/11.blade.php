@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>5. Pendidikan</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Kurikulum</p>
                        <p><b>Tabel : </b>5.a Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 5.a Kurikulum, Capaian
                    Pembelajaran, dan Rencana Pembelajaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Semester</th>
                            <th rowspan="2">Nama Mata Kuliah</th>
                            <th rowspan="2">Mata
                                Kuliah
                                Kompetens</th>
                            <th colspan="3">Bobot Kredit
                                (sks)</th>
                            <th rowspan="2">Konversi Kredit ke Jam</th>
                            <th colspan="4">Capaian Pembelajaran</th>
                            <th rowspan="2">Dokumen Rencana Pembelajaran</th>
                            <th rowspan="2">Unit Penyelenggara</th>
                        </tr>
                        <tr>
                            <th>Kuliah/ Responsi/
                                Tutoria</th>
                            <th>Seminar</th>
                            <th>Praktikum/ Praktik/
                                Praktik Lapangan</th>
                            <th>Sikap</th>
                            <th>Pengetahuan</th>
                            <th>Keterampilan
                                Umum</th>
                            <th>Keterampilan
                                Umum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="15">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Jumlah</th>
                        </tr>

                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/511"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
