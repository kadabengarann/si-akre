@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>KONDISI EKSTERNAL DAN PROFIL</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        {{-- <p><b>Sub-kriteria : </b>a. Jumlah Calon Mahasiswa Baru</p> --}}
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('penilaian.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">KONDISI EKSTERNAL DAN PROFIL</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No Butir</th>
                            <th>Elemen</th>
                            <th>Lokasi
                            </th>
                            <th>Indikator
                            </th>
                            <th>Alasan Penilaian
                            </th>
                            <th>Perhitungan

                            </th>
                            <th>Skor

                            </th>
                            <th>BOBOT
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td class="text-start">A. Kondisi Eksternal
                            </td>
                            <td></td>
                            <td>Konsistensi dengan hasil analisis SWOT dan/atau analisis lain serta rencana pengembangan ke
                                depan.
                            </td>
                            <td colspan="3">
                                No data
                            </td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td class="text-start">B. Profil Unit Pengelola Program Studi
                            </td>
                            <td></td>
                            <td>Keserbacakupan informasi dalam profil dan konsistensi antara profil dengan data dan
                                informasi yang disampaikan pada masing-masing kriteria, serta menunjukkan iklim yang
                                kondusif untuk pengembangan dan reputasi sebagai rujukan di bidang keilmuannya.
                            </td>
                            <td colspan="3">
                                No data
                            </td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/311"><i class="fas fa-plus-circle"></i> Input data</a>
            </div> --}}

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
