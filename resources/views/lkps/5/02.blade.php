@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>5.2. Aksesibilitas data dalam Sistem Informasi
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Aksesibilitas data dalam Sistem
                    Informasi
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2" colspan="2">Jenis Data</th>
                            <th colspan="4">Sistem Pengolahan Data Ditangani

                            </th>
                        </tr>
                        <tr>
                            <th>Secara
                                Manual</th>
                            <th>Dengan
                                Komputer
                                Tanpa
                                Jaringan</th>
                            <th>Dengan
                                Komputer
                                serta dapat
                                diakses
                                melalui
                                Jaringan
                                Lokal (LAN)</th>
                            <th>Dengan
                                Komputer
                                serta dapat
                                diakses
                                melalui
                                Jaringan
                                Luas (WAN)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left" colspan="2">Mahasiswa</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-left" colspan="2">Kartu Rencana Studi (KRS)</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-left" colspan="2"> Jadwal Mata Kuliah
                            </td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-left" colspan="2">Nilai Mata Kuliah</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-left" colspan="2">Transkrip Akademik</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="text-left" colspan="2">Lulusan
                            </td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="text-left" colspan="2"> Dosen</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="text-left" colspan="2">Pegawai</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="text-left" colspan="2">Keuangan</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="text-left" colspan="2">Inventaris</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td class="text-left" colspan="2">Perpustakaan</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
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
