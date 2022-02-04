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
                                                value=3 @if (in_array(3, json_decode($permission[3]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos211"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs211" name='form211[]'
                                                value=4 @if (in_array(4, json_decode($permission[3]->access)))
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
                                                value=3 @if (in_array(3, json_decode($permission[4]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos311"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs311" name='form311[]'
                                                value=4 @if (in_array(4, json_decode($permission[4]->access)))
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
                                                value=3 @if (in_array(3, json_decode($permission[5]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos312"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs312" name='form312[]'
                                                value=4 @if (in_array(4, json_decode($permission[5]->access)))
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
                                                value=3 @if (in_array(3, json_decode($permission[6]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos313"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs313" name='form313[]'
                                                value=4 @if (in_array(4, json_decode($permission[6]->access)))
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
                                                value=3 @if (in_array(3, json_decode($permission[7]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos411"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs411" name='form411[]'
                                                value=4 @if (in_array(4, json_decode($permission[7]->access)))
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
                                                value=3 @if (in_array(3, json_decode($permission[8]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos412"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs412" name='form412[]'
                                                value=4 @if (in_array(4, json_decode($permission[8]->access)))
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
                                                value=3 @if (in_array(3, json_decode($permission[9]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos413"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs413" name='form413[]'
                                                value=4 @if (in_array(4, json_decode($permission[9]->access)))
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
                                                name='form414[]' value=3 @if (in_array(3, json_decode($permission[10]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos414"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs414"
                                                name='form414[]' value=4 @if (in_array(4, json_decode($permission[10]->access)))
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
                                                name='form415[]' value=3 @if (in_array(3, json_decode($permission[11]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos415"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs415"
                                                name='form415[]' value=4 @if (in_array(4, json_decode($permission[1]->access)))
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
                                                name='form416[]' value=3 @if (in_array(3, json_decode($permission[12]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos416"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs416"
                                                name='form416[]' value=4 @if (in_array(4, json_decode($permission[12]->access)))
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
                                                name='form417[]' value=3 @if (in_array(3, json_decode($permission[13]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos417"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs417"
                                                name='form417[]' value=4 @if (in_array(4, json_decode($permission[13]->access)))
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
                                                name='form418[]' value=3 @if (in_array(3, json_decode($permission[14]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos418"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs418"
                                                name='form418[]' value=4 @if (in_array(4, json_decode($permission[14]->access)))
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
                                                name='form511[]' value=3 @if (in_array(3, json_decode($permission[15]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos511"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs511"
                                                name='form511[]' value=4 @if (in_array(4, json_decode($permission[15]->access)))
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
                                                name='form512[]' value=3 @if (in_array(3, json_decode($permission[16]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos512"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs512"
                                                name='form512[]' value=4 @if (in_array(4, json_decode($permission[16]->access)))
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
                                                name='form513[]' value=3 @if (in_array(3, json_decode($permission[17]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos513"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs513"
                                                name='form513[]' value=4 @if (in_array(4, json_decode($permission[17]->access)))
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
                                                name='form514[]' value=3 @if (in_array(3, json_decode($permission[18]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos514"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs514"
                                                name='form514[]' value=4 @if (in_array(4, json_decode($permission[18]->access)))
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
                                                name='form515[]' value=3 @if (in_array(3, json_decode($permission[19]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos515"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs515"
                                                name='form515[]' value=4 @if (in_array(4, json_decode($permission[19]->access)))
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
                                                name='form516[]' value=3 @if (in_array(3, json_decode($permission[20]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos516"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs516"
                                                name='form516[]' value=4 @if (in_array(4, json_decode($permission[20]->access)))
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
                                                name='form517[]' value=3 @if (in_array(3, json_decode($permission[21]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos517"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs517"
                                                name='form517[]' value=4 @if (in_array(4, json_decode($permission[21]->access)))
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
                                                name='form518[]' value=3 @if (in_array(3, json_decode($permission[22]->access)))
                                            checked="checked"
                                            @endif
                                            >
                                            <label for="dos518"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs518"
                                                name='form518[]' value=4 @if (in_array(4, json_decode($permission[22]->access)))
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
