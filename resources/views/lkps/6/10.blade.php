@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>6. Pendidikan</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>6.10. Pengajaran yang dikaitkan dengan Penelitian dan Pengabdian kepada Masyarakat
                            Dosen (DTPS) dalam 3 tahun terakhir</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Pengajaran yang dikaitkan dengan
                    Penelitian dan Pengabdian kepada Masyarakat Dosen (DTPS) dalam 3 tahun terakhir</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun
                            </th>
                            <th>Judul Penelitian Dosen
                            </th>
                            <th>Nama matakuliah dan Bab materi pembelajaran yang menggunakan hasil penelitian tersebut
                            </th>
                            <th>Judul PkM Dosen
                            </th>
                            <th>Nama matakuliah dan bab materi pembelajaran yang menggunakan hasil PkM tersebut
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
                <a class="btn btn-primary" href="/lkps/input/{{ $idTable }}"><i class="fas fa-plus-circle"></i> Input
                    data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
