@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>8. Pengabdian Kepada Masyarakat</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b> 8.1. Pengabdian kepada Masyarakat yang melibatkan mahasiswa pada 3 tahun terakhir
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 7 PkM DTPS yang melibatkan
                    mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Dosen</th>
                            <th rowspan="2">NIDN/K
                            </th>
                            <th rowspan="2">Judul PkM
                            </th>
                            <th rowspan="2">Relevansi dengan Infokom
                            </th>
                            <th rowspan="2">Ketua
                            </th>
                            <th rowspan="2">Nama Mahasiswa yang dilibatkan
                            </th>
                            <th rowspan="2">Jumlah Dana (Rp.)
                            </th>
                            <th colspan="4">Sumber Dana
                            </th>
                            <th colspan="3">Mitra
                            </th>
                        </tr>
                        <tr>
                            <th>Institusi Internasional
                            </th>
                            <th>Istitusi Nasional
                            </th>
                            <th>Institusi Lokal
                            </th>
                            <th>Institusi Sendiri
                            </th>
                            <th>Nama Mitra
                            </th>
                            <th>Apakah ada pengukuran Kepuasan Mitra?
                            </th>
                            <th>Tindak Lanjut Evaluasi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="16">
                                No data
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/711"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
