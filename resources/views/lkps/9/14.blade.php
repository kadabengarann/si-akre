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
                        <p><b>Tabel : </b>9.14. Penjaringan Umpan Balik terkait Pelaksanaan Tri Dharma Perguruan Tinggi
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Penjaringan Umpan Balik terkait
                    Pelaksanaan Tri Dharma Perguruan Tinggi
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th class="col-4">Sumber Umpan Balik
                            </th>
                            <th>Isi Umpan Balik

                            </th>
                            <th>Cara memperoleh umpan balik


                            </th>
                            <th>Jenis Tindak Lanjut

                            </th>
                            <th>Waktu (tgl/Bln/Thn)

                            </th>
                            <th>Bukti

                            </th>
                            <th>Keterangan

                            </th>
                            <th>Bukti
                            </th>
                            <th>Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <th class="sub-table">
                            1. Dosen
                        </th>
                    </tr>
                    <tbody>
                        <td></td>

                        <td colspan="9" class="table-isi">
                            No data
                        </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th class="sub-table">
                            2. Mahasiswa

                        </th>
                    </tr>
                    <tbody>
                        <tr>
                            <td></td>

                            <td colspan="9" class="table-isi">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th class="sub-table">
                            3. Alumni
                        </th>
                    </tr>
                    <tbody>
                        <tr>
                            <td></td>
                            <td colspan="9" class="table-isi">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <th class="sub-table">
                            4. Pengguna Lulusan</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td></td>

                            <td colspan="9" class="table-isi">
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
    </section>
@endsection
