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
                        <p><b>Tabel : </b> 5.1 Sumber Pendanaan Program Studi pada TS</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Sumber Pendanaan Program Studi pada
                    TS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sumber Dana</th>
                            <th>Jumlah (dalam Juta rupiah)</th>
                            <th>Bukti</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-left" colspan="1">Dana dari SPP Mahasiswa</td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-left" colspan="1">Dana dari Yayasan</td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-left" colspan="1"> Dana dari luar SPP, non Yayasan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="text-left">a.</td>
                            <td class="text-left"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">b.</td>
                            <td class="text-left"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-left">c.</td>
                            <td class="text-left"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        </tfoot>
                </table>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/511"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
