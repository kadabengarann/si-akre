@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>4. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
                        <p><b>Tabel : </b>4.4. Rata-rata beban DTPS per semester, pada TS
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Rata-rata beban DTPS per semester,
                    pada TS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Dosen Tetap</th>
                            <th colspan="3">SKS Pengajaran<sup>1)</sup> Pada</th>

                            <th rowspan="2">SKS
                                Penelitian<sup>2)</sup></th>
                            <th rowspan="2">SKS
                                Pengabdian
                                pada Masy<sup>2)</sup></th>
                            <th colspan="2">SKS Manajemen<sup>3)</sup></th>

                            <th rowspan="2">Jumlah (sks)</th>
                        </tr>
                        <tr>
                            <th rowspan="2">PS Sendiri </th>
                            <th rowspan="2">PS Lain,
                                PT Sendiri
                            </th>
                            <th rowspan="2">PT Lain</th>
                            <th rowspan="2">PT Sendiri </th>
                            <th rowspan="2">PT Lain</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="11">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right">Jumlah *</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right">Rata-rata **</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                        </tr>
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
