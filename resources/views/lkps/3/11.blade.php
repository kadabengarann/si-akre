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
                        <p><b>Tabel : </b>4.2. Daftar Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan 
kompetensi inti program studi yang diakreditasi.</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Daftar Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan 
kompetensi inti program studi yang diakreditasi.
</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Dosen</th>
                            <th rowspan="2">NIDN/ NIDK</th>
                            <th rowspan="2">Tanggal Lahir (dd/mm/yyyy)</th>
                            <th rowspan="2">Jabatan Akademik</th>
                            <th rowspan="2">Sertifikasi Dosen (Ya/Tidak)</th>
                            <th colspan="3">Pendidikan S1</th>
                            <th colspan="3">Pendidikan S2</th>
                            <th colspan="3">Pendidikan S3</th>
                
                        </tr>
                        <tr>
                            <th>Gelar</th>
                            <th>PT Asal</th>
                            <th>Bidang Keahlian</th>
                            <th>Gelar</th>
                            <th>PT Asal</th>
                            <th>Bidang Keahlian</th>
                            <th>Gelar</th>
                            <th>PT Asal</th>
                            <th>Bidang Keahlian</th>
                        </tr>
                        
                       
                       
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td colspan="13">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                      

                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/311"><i class="fas fa-plus-circle"></i> Input data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
