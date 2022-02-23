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
                        <p><b>Tabel : </b>5.7. Sumber Pustaka berupa Buku teks dan lain-lain dalam bidang Infokom
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Sumber Pustaka berupa Buku teks dan
                    lain-lain dalam bidang Infokom
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Terbitan
                            </th>
                            <th>Jumlah judul
                            </th>
                            <th>Jumlah eksp
                            </th>
                            <th>Versi
                                (online/Cetak)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left">Buku teks
                            </td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-left">Disertasi/Tesis/Skripsi
                            </td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-left">Prosiding seminar Nasional
                            </td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                            <td class="table-isi">0</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-left">Prosiding Seminar Internasional
                            </td>
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
