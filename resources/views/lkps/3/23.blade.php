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
                        <p><b>Tabel : </b>3.b.3) Pengabdian kepada Masyarakat (PkM) DTPS</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                <a class="btn btn-info" href="/lkps/view/322"><i class="fas fa-arrow-circle-left"></i> Prev</a>
                <a class="btn btn-success" href="/lkps/view/324">Next <i class="fas fa-arrow-circle-right"></i></a>
            </div>

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 3.b.3) Pengabdian kepada
                    Masyarakat (PkM) DTPS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Sumber Pembiyaan</th>
                            <th colspan="3">Jumlah Judul</th>
                            <th rowspan="2">Jumlah</th>
                        </tr>
                        <tr>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td class="text-left">
                                a) Perguruan Tinggi <br>
                                b) Mandiri
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td class="text-left">
                                Lembaga Dalam Negeri (di luar PT)
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td class="text-left">Lembaga Luar Negeri</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Jumlah</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>

                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/323"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
