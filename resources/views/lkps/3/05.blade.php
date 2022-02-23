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
                        <p><b>Sub-kriteria : </b>b. Kegiatan Mahasiswa</p>
                        <p><b>Tabel : </b> Kegiatan Mahasiswa</p>
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
                            <th class="mt-1 mb-1">Nama Kegiatan</th>
                            <th class="mt-1 mb-1">Substansi Kegiatan yang
                                dilaksanakan
                            </th>
                            <th class="mt-1 mb-1">Jumlah mahasiswa
                                program studi yang
                                diakreditasi yang
                                aktif dalam kegiatan

                            </th>
                            <th class="mt-1 mb-1">Jumlah mahasiswa
                                program studi yang
                                diakreditasi yang
                                aktif dalam kegiatan
                            </th>
                            <th class="mt-1 mb-1">Keterangan
                            </th>


                        </tr>
                        <tr>
                        </tr>
                    </thead>
                    <tr>
                        <th class="sub-table" colspan="10">
                            <div class=" w-50 "> Kegiatan Mahasiswa yang sesuai dengan bidang Infokom
                                (yang
                                dibimbing oleh
                                dosen) dalam konteks MBKM dan non MBKM
                            </div>
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
                            <div class=" w-50 "> Kegiatan Mahasiswa yang TIDAK sesuai dengan bidang Infokom
                            </div>
                        </th>

                        </th>
                    </tr>
                    <tbody>
                        <tr class=" table-isi">
                            <td colspan="10">
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
