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
                                            <input class="custom-control-input" type="checkbox" id="dos211" name='form211[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(211)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos211"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs211" name='form211[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(211)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs211"
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
                                            <input class="custom-control-input" type="checkbox" id="dos311" name='form311[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(311)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos311"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs311" name='form311[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(311)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs311"
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
                                            <input class="custom-control-input" type="checkbox" id="dos312" name='form312[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(312)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos312"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs312" name='form312[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(312)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs312"
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
                                            <input class="custom-control-input" type="checkbox" id="dos313" name='form313[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(313)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos313"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs313" name='form313[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(313)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs313"
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
                                            <input class="custom-control-input" type="checkbox" id="dos411" name='form411[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(411)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos411"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs411" name='form411[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(411)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs411"
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
                                            <input class="custom-control-input" type="checkbox" id="dos412" name='form412[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(412)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos412"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs412" name='form412[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(412)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs412"
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
                                            <input class="custom-control-input" type="checkbox" id="dos413" name='form413[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(413)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos413"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs413" name='form413[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(413)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs413"
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
                                            <input class="custom-control-input" type="checkbox" id="dos414"
                                                name='form414[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(414)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos414"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs414"
                                                name='form414[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(414)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs414"
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
                                            <input class="custom-control-input" type="checkbox" id="dos415"
                                                name='form415[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(415)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos415"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs415"
                                                name='form415[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(415)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs415"
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
                                            <input class="custom-control-input" type="checkbox" id="dos416"
                                                name='form416[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(416)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos416"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs416"
                                                name='form416[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(416)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs416"
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
                                            <input class="custom-control-input" type="checkbox" id="dos417"
                                                name='form417[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(417)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos417"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs417"
                                                name='form417[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(417)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs417"
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
                                            <input class="custom-control-input" type="checkbox" id="dos418"
                                                name='form418[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(418)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos418"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs418"
                                                name='form418[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(418)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs418"
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
                                            <input class="custom-control-input" type="checkbox" id="dos511"
                                                name='form511[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(511)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos511"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs511"
                                                name='form511[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(511)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs511"
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
                                            <input class="custom-control-input" type="checkbox" id="dos512"
                                                name='form512[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(512)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos512"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs512"
                                                name='form512[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(512)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs512"
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
                                            <input class="custom-control-input" type="checkbox" id="dos513"
                                                name='form513[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(513)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos513"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs513"
                                                name='form513[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(513)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs513"
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
                                            <input class="custom-control-input" type="checkbox" id="dos514"
                                                name='form514[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(514)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos514"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs514"
                                                name='form514[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(514)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs514"
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
                                            <input class="custom-control-input" type="checkbox" id="dos515"
                                                name='form515[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(515)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos515"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs515"
                                                name='form515[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(515)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs515"
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
                                            <input class="custom-control-input" type="checkbox" id="dos516"
                                                name='form516[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(516)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos516"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs516"
                                                name='form516[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(516)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs516"
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
                                            <input class="custom-control-input" type="checkbox" id="dos517"
                                                name='form517[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(517)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos517"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs517"
                                                name='form517[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(517)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs517"
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
                                            <input class="custom-control-input" type="checkbox" id="dos518"
                                                name='form518[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(518)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos518"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs518"
                                                name='form518[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(518)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs518"
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
                                            <input class="custom-control-input" type="checkbox" id="dos611"
                                                name='form611[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(611)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos611"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs611"
                                                name='form611[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(611)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs611"
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
                                            <input class="custom-control-input" type="checkbox" id="dos612"
                                                name='form612[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(612)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos612"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs612"
                                                name='form612[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(612)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs612"
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
                                            <input class="custom-control-input" type="checkbox" id="dos613"
                                                name='form613[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(613)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos613"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs613"
                                                name='form613[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(613)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs613"
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
                                            <input class="custom-control-input" type="checkbox" id="dos614"
                                                name='form614[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(614)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos614"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs614"
                                                name='form614[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(614)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs614"
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
                                            <input class="custom-control-input" type="checkbox" id="dos615"
                                                name='form615[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(615)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos615"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs615"
                                                name='form615[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(615)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs615"
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
                                            <input class="custom-control-input" type="checkbox" id="dos616"
                                                name='form616[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(616)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos616"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs616"
                                                name='form616[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(616)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs616"
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
                                            <input class="custom-control-input" type="checkbox" id="dos617"
                                                name='form617[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(617)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos617"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs617"
                                                name='form617[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(617)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs617"
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
                                                name='form618[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(618)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos618"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs618"
                                                name='form618[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(618)->access)))
                                            checked="checked"
                                            @endif
                                            >
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
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 7.1. Keterlibatan Mahasiswa yang melakukan TA dalam Penelitian Dosen pada TS

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos711" name='form711[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(711)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos711"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs711" name='form711[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(711)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs711"
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
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 8.1. Pengabdian kepada Masyarakat yang melibatkan mahasiswa pada 3 tahun terakhir

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos811" name='form811[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(811)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos811"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs811" name='form811[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(211)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs811"
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
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.2. IPK Lulusan
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos911"
                                                name='form911[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(911)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos911"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs911"
                                                name='form911[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(911)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs911"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.3. Prestasi Mahasiswa dalam Mendapatkan penghargaan Hibah Kompetitif di Bidang Infokom
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos912"
                                                name='form912[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(912)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos912"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs912"
                                                name='form912[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(912)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs912"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.5. Prestasi Mahasiswa dalam Lomba Tingkat Nasional/ Internasional
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos913"
                                                name='form913[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(913)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos913"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs913"
                                                name='form913[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(913)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs913"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.6. Kelulusan Tepat Waktu
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos914"
                                                name='form914[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(914)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos914"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs914"
                                                name='form914[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(914)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs914"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.10. Kepuasan Pengguna Lulusan
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos915"
                                                name='form915[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(915)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos915"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs915"
                                                name='form915[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(915)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs915"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.11. Rata-rata Masa tunggu Lulusan untuk bekerja pertama kali
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos916"
                                                name='form916[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(916)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos916"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs916"
                                                name='form916[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(916)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs916"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.12. Kesesuaian Bidang Kerja Lulusan
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos917"
                                                name='form917[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(917)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos917"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs917"
                                                name='form917[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(917)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs917"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.14. Penjaringan Umpan Balik terkait Pelaksanaan Tri Dharma Perguruan Tinggi
</label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos918"
                                                name='form918[]' value=3 @if (in_array(3, json_decode($permission_controller->getPermission(918)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos918"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs918"
                                                name='form918[]' value=4 @if (in_array(4, json_decode($permission_controller->getPermission(918)->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="mhs918"
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
