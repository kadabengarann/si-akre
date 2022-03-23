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
                        <p><b>Tabel : </b>5.3. Pendayagunaan Sarana Utama Laboratorium</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Pendayagunaan Sarana Utama
                    Laboratorium</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sarana/ Prasarana</th>
                            <th>Daya Tampung</th>
                            <th>Luas Ruang (m2)</th>
                            <th>Jumlah Mahasiswa yang Dilayani Lab</th>
                            <th>Jam Layanan</th>
                            <th>Perangkat yang Dimiliki</th>
                        </tr>


                    <tbody>
                        <tr class="table-isi">
                            <td colspan="10">
                                No data
                            </td>
                            </td>
                        </tr>
                    </tbody>
                    </thead>
                    <tr>

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
