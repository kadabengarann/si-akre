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
                        <p><b>Tabel : </b>5.6. Sumber Pustaka berupa Jurnal Ilmiah dalam bidang Infokom</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Sumber Pustaka berupa Jurnal Ilmiah
                    dalam bidang Infokom</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Jurnal
                            </th>
                            <th>Langganan/ tidak langganan
                            </th>
                            <th>Mulai langganan
                            </th>
                            <th>Akhir langganan
                            </th>
                            <th>Versi (online/Cetak)
                            </th>
                            <th>Internasional/ Nasional
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7">
                                No data
                            </td>
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
