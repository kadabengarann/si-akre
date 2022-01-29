@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>6. Pendidikan </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>6.6. MBKM yang dilaksanakan pada tahun TS</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">MBKM yang dilaksanakan pada tahun TS
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis mbkm
                            </th>
                            <th>Jumlah Mahasiswa yang mengikuti
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Pertukaran Pelajar
                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-left">Magang/Praktik Kerja

                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-left">Asistensi Mengajar di Satuan Pendidikan

                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-left">Penelitian/Riset

                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-left">Proyek Kemanusiaan
                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="text-left">Kegiatan Wirausaha
                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="text-left">Studi/Proyek Independen
                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="text-left">Membangun Desa/Kuliah Kerja Nyata Tematik
                            </td>
                            <td class="table-isi">0</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/411"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
