@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Laporan Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>8. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>f. Luaran Penelitian dan PkM Mahasiswa</p>
                        <p><b>Tabel : </b>8.f.4 Luaran penelitian/PkM yang dihasilkan mahasiswa</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                <a class="btn btn-info" href="/lkps/view/863"><i class="fas fa-arrow-circle-left"></i> Prev</a>
                <a class="btn btn-success" href="#">Next <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 8.f.4) Luaran penelitian/PkM
                    yang dihasilkan mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th class="col-1">No.</th>
                            <th class="col-4">Judul Luaran Penelitian/PkM</th>
                            <th>Tahun</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tr>
                        <th>
                            I
                        </th>
                        <th class="sub-table">
                            HKI :<br>
                            c) Paten,<br>
                            d) Paten Sederhana
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <td colspan="2">
                            <b>Jumlah</b>
                        </td>
                        <td>
                            NA =
                        </td>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <th>
                            II
                        </th>
                        <th class="sub-table">
                            HKI :<br>
                            f) Hak Cipta<br>
                            g) Desain Produk Industri,<br>
                            h) Perlindungan Varietas Tanaman (Sertifikat
                            Perlindungan Varietas Tanaman, Sertifikat
                            Pelepasan Varietas, Sertifikat Pendaftaran
                            Varietas),<br>
                            i) Desain Tata Letak Sirkuit Terpadu,<br>
                            j) dll
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <td colspan="2">
                            <b>Jumlah</b>
                        </td>
                        <td>
                            NB =
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            III
                        </th>
                        <th class="sub-table">
                            Teknologi Tepat Guna, Produk (Produk
                            Terstandarisasi, Produk Tersertifikasi), Karya
                            Seni, Rekayasa Sosial
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <td colspan="2">
                            <b>Jumlah</b>
                        </td>
                        <td>
                            NC =
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            IV
                        </th>
                        <th class="sub-table">
                            Teknologi Tepat Guna, Produk (Produk
                            Terstandarisasi, Produk Tersertifikasi), Karya
                            Seni, Rekayasa Sosial
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <td colspan="2">
                            <b>Jumlah</b>
                        </td>
                        <td>
                            ND =
                        </td>
                        <td>

                        </td>
                    </tr>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/864"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
