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
                        <p><b>Sub-kriteria : </b>b. Kinerja Dosen</p>
                        <p><b>Tabel : </b>3.b.7) Luaran Penelitian/PkM Lainnya oleh DTPS</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 3.b.6) Produk/jasa DTPS yang
                    diadopsi oleh industri/masyarakat </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Luaran Penelitian/PkM</th>
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
                            a) Paten,<br>
                            b) Paten Sederhana
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
                            a) Hak Cipta<br>
                            b) Desain Produk Industri,<br>
                            c) Perlindungan Varietas Tanaman (Sertifikat
                            Perlindungan Varietas Tanaman, Sertifikat
                            Pelepasan Varietas, Sertifikat Pendaftaran
                            Varietas),<br>
                            d) Desain Tata Letak Sirkuit Terpadu,<br>
                            e) dll
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
                <a class="btn btn-primary" href="/lkps/input/327"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
