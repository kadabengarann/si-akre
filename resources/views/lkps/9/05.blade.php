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
                        <p><b>Tabel : </b>9.5. Kesesuaian Bidang Kerja Lulusan</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Kesesuaian Bidang Kerja Lulusan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">Tahun Lulus</th>
                            <th rowspan="2">Jumlah Lulusan</th>
                            <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                            <th rowspan="2">Profesi kerja bidang Infokom</th>
                            <th rowspan="2">Profesi kerja bidang NON Infokom</th>
                            <th colspan="3">Lingkup tempat kerja</th>


                        </tr>
                        <tr>
                            <th>Multinasional/ Internasional </th>
                            <th>Nasional</th>
                            <th>Wirausaha</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>TS-4</td>
                            <td colspan="12">
                                No data
                            </td>



                        </tr>
                        <tr>
                            <td>TS-3</td>

                            <td colspan="12">
                                No data
                            </td>

                        </tr>
                        <tr>
                            <td>TS-2</td>
                            <td colspan="12">
                                No data
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td colspan="12">
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
</section> @endsection
