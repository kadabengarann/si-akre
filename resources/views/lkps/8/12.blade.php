@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>9. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>9.3. Prestasi Mahasiswa dalam Mendapatkan penghargaan Hibah Kompetitif di
                            Bidang Infokom
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Prestasi Mahasiswa dalam
                    Mendapatkan penghargaan Hibah Kompetitif di
                    Bidang Infokom
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th class="col-1">No.</th>
                            <th class="col-4">Tahun
                            </th>
                            <th>Jumlah Mhs Aktif</th>
                            <th>Jenis Hibah
                            </th>
                            <th>Tahun</th>
                            <th>Pendanaan Program (Rp.)

                            </th>
                            <th>Sumber Dana

                            </th>
                            <th>Tingkat Nasional/ Internasional

                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <th>

                        </th>
                        <th class="sub-table">
                            TS-2
                        </th>
                        <td class="table-isi">0 </td>
                    </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td colspan="6" class="table-isi">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th>

                        </th>
                        <th class="sub-table">
                            TS-12
                        </th>
                        <td class="table-isi">0 </td>
                    </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td colspan="6" class="table-isi">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th>

                        </th>
                        <th class="sub-table">
                            TS
                        </th>
                        <td class="table-isi">0 </td>
                    </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td colspan="6" class="table-isi">
                                No data
                            </td>
                        </tr>
                    </tbody>

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
