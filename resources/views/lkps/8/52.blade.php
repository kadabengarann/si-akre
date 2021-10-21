@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>8. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>e. Kinerja Lulusan</p>
                        <p><b>Tabel : </b>8.e.2 Kepuasan Pengguna </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 8.e.2) Kepuasan Pengguna
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Kemampuan</th>
                            <th colspan="4">Tingkat Kepuasan Pengguna
                                (%)</th>
                            <th rowspan="2">Rencana Tindak
                                Lanjut oleh UPPS/PS
                            </th>
                        </tr>
                        <tr>
                            <th>Sangat Baik</th>
                            <th>Baik</th>
                            <th>Cukup</th>
                            <th>Kurang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td class="text-left">
                                Etika
                            </td>
                            <td colspan="5" rowspan="7">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td class="text-left">Keahlian pada
                                bidang ilmu
                                (kompetensi utama)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td class="text-left">Kemampuan
                                berbahasa asing</td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td class="text-left">Penggunaan
                                teknologi informasi
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td class="text-left">Kemampuan
                                berkomunikasi
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td class="text-left">Kerjasama tim</td>
                        </tr>
                        <tr>
                            <td>
                                7
                            </td>
                            <td class="text-left">
                                Pengembangan diri</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Jumlah</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/852"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
