@inject('permission_controller', 'App\Http\Controllers\PermissionController')
@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Form Access</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row justify-content-center">
                <section class="col-lg-9 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card card-secondary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">LKPS</h3>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="/form-access/update">
                        @csrf

                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    2. Tata Pamong, Tata Kelola, dan Kerjasama
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel.
                                        2.5.
                                        Kerjasama
                                        Pendidikan, Penelitian dan PkM
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos205" name='form205[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(205)->access))) checked="checked" @endif>
                                            <label for="dos205"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs205" name='form205[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(205)->access))) checked="checked" @endif>
                                            <label for="mhs205"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    3. Mahasiswa
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel.
                                        3.1. Jumlah Calon Mahasiswa Baru
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos301" name='form301[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(301)->access))) checked="checked" @endif>
                                            <label for="dos301"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs301" name='form301[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(301)->access))) checked="checked" @endif>
                                            <label for="mhs301"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel.
                                        3.4. Layanan dan Kualitas Layanan Kepada mahasiswa
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos304" name='form304[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(304)->access))) checked="checked" @endif>
                                            <label for="dos304"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs304" name='form304[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(304)->access))) checked="checked" @endif>
                                            <label for="mhs304"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel.
                                        3.5. Kegiatan Mahasiswa
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos305" name='form305[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(305)->access))) checked="checked" @endif>
                                            <label for="dos305"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs305" name='form305[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(305)->access))) checked="checked" @endif>
                                            <label for="mhs305"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    4. Sumber Daya Manusia
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel
                                        4.2. Daftar Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata
                                        kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti program studi yang
                                        diakreditasi.

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos402" name='form402[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(402)->access))) checked="checked" @endif>
                                            <label for="dos402"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs402" name='form402[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(402)->access))) checked="checked" @endif>
                                            <label for="mhs402"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.3.
                                        Dosen Pembimbing Utama Tugas Akhir

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos403" name='form403[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(403)->access))) checked="checked" @endif>
                                            <label for="dos403"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs403" name='form403[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(403)->access))) checked="checked" @endif>
                                            <label for="mhs403"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.4.
                                        Rata-rata beban DTPS per semester, pada TS

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos404" name='form404[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(404)->access))) checked="checked" @endif>
                                            <label for="dos404"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs404" name='form404[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(404)->access))) checked="checked" @endif>
                                            <label for="mhs404"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.5.
                                        Kesesuaian Keahlian DTPS dengan mata kuliah yang diajarkan pada 3 tahun terakhir


                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos405"
                                                name='form405[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(405)->access))) checked="checked" @endif>
                                            <label for="dos405"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs405"
                                                name='form405[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(405)->access))) checked="checked" @endif>
                                            <label for="mhs405"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.6.
                                        Profesionalisme Dosen


                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos406"
                                                name='form406[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(406)->access))) checked="checked" @endif>
                                            <label for="dos406"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs406"
                                                name='form406[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(406)->access))) checked="checked" @endif>
                                            <label for="mhs406"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.8.
                                        Peningkatan Kemampuan DTPS melalui program Tugas Belajar dalam bidang Infokom (
                                        isian hanya untuk dosen yang sedang/belum selesai tugas belajar)


                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos408"
                                                name='form408[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(408)->access))) checked="checked" @endif>
                                            <label for="dos408"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs408"
                                                name='form408[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(408)->access))) checked="checked" @endif>
                                            <label for="mhs408"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.9.
                                        Kualifikasi Tenaga Kependidikan


                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos409"
                                                name='form409[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(409)->access))) checked="checked" @endif>
                                            <label for="dos409"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs409"
                                                name='form409[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(409)->access))) checked="checked" @endif>
                                            <label for="mhs409"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 4.10.
                                        Upaya yang telah dilakukan UPPS dalam Meningkatkan Kualifikasi dan Kompetensi Tenaga
                                        Kependidikan dalam 3 tahun terakhir

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos410"
                                                name='form410[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(410)->access))) checked="checked" @endif>
                                            <label for="dos410"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs410"
                                                name='form410[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(410)->access))) checked="checked" @endif>
                                            <label for="mhs410"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    5. Keuangan, Sarana, dan Prasarana
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.1.
                                        Sumber Pendanaan Program Studi pada TS


                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos501"
                                                name='form501[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(501)->access))) checked="checked" @endif>
                                            <label for="dos501"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs501"
                                                name='form501[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(501)->access))) checked="checked" @endif>
                                            <label for="mhs501"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.2.
                                        Aksesibilitas data dalam Sistem Informasi

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos502"
                                                name='form502[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(502)->access))) checked="checked" @endif>
                                            <label for="dos502"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs502"
                                                name='form502[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(502)->access))) checked="checked" @endif>
                                            <label for="mhs502"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.3.
                                        Pendayagunaan Sarana Utama Laboratorium
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos503"
                                                name='form503[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(503)->access))) checked="checked" @endif>
                                            <label for="dos503"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs503"
                                                name='form503[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(503)->access))) checked="checked" @endif>
                                            <label for="mhs503"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.4.
                                        Kecukupan, Aksesibilitas dan Mutu Sarana, Prasarana
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos504"
                                                name='form504[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(504)->access))) checked="checked" @endif>
                                            <label for="dos504"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs504"
                                                name='form504[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(504)->access))) checked="checked" @endif>
                                            <label for="mhs504"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.5.
                                        Fasilitas Laboratorium untuk Keahlian Infokom
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos505"
                                                name='form505[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(505)->access))) checked="checked" @endif>
                                            <label for="dos505"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs505"
                                                name='form505[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(505)->access))) checked="checked" @endif>
                                            <label for="mhs505"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.6.
                                        Sumber Pustaka berupa Jurnal Ilmiah dalam bidang Infokom
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos506"
                                                name='form506[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(506)->access))) checked="checked" @endif>
                                            <label for="dos506"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs506"
                                                name='form506[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(506)->access))) checked="checked" @endif>
                                            <label for="mhs506"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.7.
                                        Sumber Pustaka berupa Buku teks dan lain-lain dalam bidang Infokom
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos507"
                                                name='form507[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(507)->access))) checked="checked" @endif>
                                            <label for="dos507"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs507"
                                                name='form507[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(507)->access))) checked="checked" @endif>
                                            <label for="mhs507"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.9.
                                        Lisensi/ Open source Software
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos509"
                                                name='form509[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(509)->access))) checked="checked" @endif>
                                            <label for="dos509"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs509"
                                                name='form509[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(509)->access))) checked="checked" @endif>
                                            <label for="mhs509"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    6. Pendidikan
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.3.
                                        Matakuliah Pilihan (MBKM) yang harus ditempuh dan matakuliah pilihan yang disajikan
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos603"
                                                name='form603[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(603)->access))) checked="checked" @endif>
                                            <label for="dos603"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs603"
                                                name='form603[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(603)->access))) checked="checked" @endif>
                                            <label for="mhs603"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.6.
                                        MBKM yang dilaksanakan pada tahun TS
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos606"
                                                name='form606[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(606)->access))) checked="checked" @endif>
                                            <label for="dos606"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs606"
                                                name='form606[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(606)->access))) checked="checked" @endif>
                                            <label for="mhs606"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.7.
                                        Matakuliah Praktikum, Pelaksanaannya dan Kualitas modul Praktikum.
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos607"
                                                name='form607[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(607)->access))) checked="checked" @endif>
                                            <label for="dos607"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs607"
                                                name='form607[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(607)->access))) checked="checked" @endif>
                                            <label for="mhs607"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.9.
                                        Pelaksanaan Matakuliah Daring dan Luring
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos609"
                                                name='form609[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(609)->access))) checked="checked" @endif>
                                            <label for="dos609"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs609"
                                                name='form609[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(609)->access))) checked="checked" @endif>
                                            <label for="mhs609"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.10.
                                        Pengajaran yang dikaitkan dengan Penelitian dan Pengabdian kepada Masyarakat Dosen
                                        (DTPS) dalam 3 tahun terakhir
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos610"
                                                name='form610[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(610)->access))) checked="checked" @endif>
                                            <label for="dos610"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs610"
                                                name='form610[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(610)->access))) checked="checked" @endif>
                                            <label for="mhs610"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.12.
                                        Penilaian Matakuliah yang diampu oleh lebih dari 1 dosen
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos612"
                                                name='form612[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(612)->access))) checked="checked" @endif>
                                            <label for="dos612"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs612"
                                                name='form612[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(612)->access))) checked="checked" @endif>
                                            <label for="mhs612"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.16.
                                        Tugas Akhir Mahasiswa pada tahun TS
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos616"
                                                name='form616[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(616)->access))) checked="checked" @endif>
                                            <label for="dos616"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs616"
                                                name='form616[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(616)->access))) checked="checked" @endif>
                                            <label for="mhs616"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 6.18.
                                        Pelaksanaan Perbaikan Sistem Pembelajaran selama 3 tahun terakhir
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos618"
                                                name='form618[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(618)->access))) checked="checked" @endif>
                                            <label for="dos618"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs618"
                                                name='form618[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(618)->access))) checked="checked" @endif>
                                            <label for="mhs618"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    7. Penelitian
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 7.1.
                                        Keterlibatan Mahasiswa yang melakukan TA dalam Penelitian Dosen pada TS

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos701"
                                                name='form701[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(701)->access))) checked="checked" @endif>
                                            <label for="dos701"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs701"
                                                name='form701[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(701)->access))) checked="checked" @endif>
                                            <label for="mhs701"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    8. Pengabdian Kepada Masyarakat
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 8.1.
                                        Pengabdian kepada Masyarakat yang melibatkan mahasiswa pada 3 tahun terakhir

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos801"
                                                name='form801[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(801)->access))) checked="checked" @endif>
                                            <label for="dos801"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs801"
                                                name='form801[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(801)->access))) checked="checked" @endif>
                                            <label for="mhs801"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    9. Luaran dan Capaian Tridharma
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.2. IPK
                                        Lulusan
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos902"
                                                name='form902[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(902)->access))) checked="checked" @endif>
                                            <label for="dos902"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs902"
                                                name='form902[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(902)->access))) checked="checked" @endif>
                                            <label for="mhs902"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.3.
                                        Prestasi Mahasiswa dalam Mendapatkan penghargaan Hibah Kompetitif di Bidang Infokom
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos903"
                                                name='form903[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(903)->access))) checked="checked" @endif>
                                            <label for="dos903"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs903"
                                                name='form903[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(903)->access))) checked="checked" @endif>
                                            <label for="mhs903"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.5.
                                        Prestasi Mahasiswa dalam Lomba Tingkat Nasional/ Internasional
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos905"
                                                name='form905[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(905)->access))) checked="checked" @endif>
                                            <label for="dos905"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs905"
                                                name='form905[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(905)->access))) checked="checked" @endif>
                                            <label for="mhs905"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.6.
                                        Kelulusan Tepat Waktu
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos906"
                                                name='form906[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(906)->access))) checked="checked" @endif>
                                            <label for="dos906"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs906"
                                                name='form906[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(906)->access))) checked="checked" @endif>
                                            <label for="mhs906"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.10.
                                        Kepuasan Pengguna Lulusan
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos910"
                                                name='form910[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(910)->access))) checked="checked" @endif>
                                            <label for="dos910"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs910"
                                                name='form910[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(910)->access))) checked="checked" @endif>
                                            <label for="mhs910"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.11.
                                        Rata-rata Masa tunggu Lulusan untuk bekerja pertama kali
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos911"
                                                name='form911[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(911)->access))) checked="checked" @endif>
                                            <label for="dos911"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs911"
                                                name='form911[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(911)->access))) checked="checked" @endif>
                                            <label for="mhs911"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.12.
                                        Kesesuaian Bidang Kerja Lulusan
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos912"
                                                name='form912[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(912)->access))) checked="checked" @endif>
                                            <label for="dos912"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs912"
                                                name='form912[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(912)->access))) checked="checked" @endif>
                                            <label for="mhs912"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.14.
                                        Penjaringan Umpan Balik terkait Pelaksanaan Tri Dharma Perguruan Tinggi
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos914"
                                                name='form914[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(914)->access))) checked="checked" @endif>
                                            <label for="dos914"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs914"
                                                name='form914[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(914)->access))) checked="checked" @endif>
                                            <label for="mhs914"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">9.15 Adopsi
                                        Tugas Akhir (TA) dalam Masyarakat
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos915"
                                                name='form915[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(915)->access))) checked="checked" @endif>
                                            <label for="dos915"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs915"
                                                name='form915[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(915)->access))) checked="checked" @endif>
                                            <label for="mhs915"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.18.
                                        Sertifikasi Profesi Bidang Infokom untuk Lulusan pada TS
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos918"
                                                name='form918[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(918)->access))) checked="checked" @endif>
                                            <label for="dos918"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs918"
                                                name='form918[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(918)->access))) checked="checked" @endif>
                                            <label for="mhs918"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.19
                                        Karya Mahasiswa dan/atau Dosen yang memperoleh HaKI, dalam 3 tahun
                                        terakhir
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos919"
                                                name='form919[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(919)->access))) checked="checked" @endif>
                                            <label for="dos919"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs919"
                                                name='form919[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(919)->access))) checked="checked" @endif>
                                            <label for="mhs919"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.23
                                        Prestasi Mahasiswa Program Kreatifitas Mahasiswa (PKM)
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos923"
                                                name='form923[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(923)->access))) checked="checked" @endif>
                                            <label for="dos923"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs923"
                                                name='form923[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(923)->access))) checked="checked" @endif>
                                            <label for="mhs923"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="save_record" type="submit"
                                value="save_record"><i class="far fa-save"></i> Simpan Perubahan</button>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
    {{-- <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Menu Admin Program Studi
            </h3>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 style="font-weight: 400">Program Studi</h3>
                        <p>Pengaturan data</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <a href="/dosen/prodi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3 style="font-weight: 400">Profile</h3>

                        <p>Pengaturan akun</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
