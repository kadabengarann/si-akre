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
                        <p><b>Sub-kriteria : </b>a. Capaian Pembelajaran</p>
                        <p><b>Tabel : </b>9.2. Kelulusan Tepat Waktu
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">IPK Lulusan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">Tahun Masuk</th>
                            <th rowspan="2">Jumlah Mahasiswa Diterima</th>
                            <th colspan="7">Jumlah Mahasiswa yang lulus pada</th>
                            <th rowspan="2">Jumlah Lulusan s.d. Akhir TS</th>
                            <th rowspan="2">Rata-rata Masa Studi</th>
                            <th rowspan="2">Jumlah mhs. Yang masih aktif </th>


                        </tr>
                        <tr>
                            <th>Akhir TS-6</th>
                            <th>Akhir TS-5</th>
                            <th>Akhir TS-4</th>
                            <th>Akhir TS-3</th>
                            <th>Akhir TS-2</th>
                            <th>Akhir TS-1</th>
                            <th>Akhir TS</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>


                        </tr>
                        <tr>
                            <td>TS-6</td>
                            <td colspan="12">
                                No data
                            </td>



                        </tr>
                        <tr>
                            <td>TS-5</td>

                            <td colspan="12">
                                No data
                            </td>

                        </tr>
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
