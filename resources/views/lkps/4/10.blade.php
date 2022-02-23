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
                        <p><b>Tabel : </b>4.10. Upaya yang telah dilakukan UPPS dalam Meningkatkan Kualifikasi dan
                            Kompetensi Tenaga Kependidikan dalam 3 tahun terakhir
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Upaya yang telah dilakukan UPPS dalam
                    Meningkatkan Kualifikasi dan
                    Kompetensi Tenaga Kependidikan dalam 3 tahun terakhir</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Tenaga Kependidikan</th>
                            <th>Jabatan (pustakawan dll)</th>
                            <th>Nama Studi lanjut/Pelatihan/Seminar/Workshop</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Bukti (sertifikat,surat tugas,dll)</sup> </th>

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
