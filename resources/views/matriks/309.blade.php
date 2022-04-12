@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
<section class="content">
    <div class="card card-primary card-outline header_stick">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p><b>Matriks : </b>C.9. LUARAN DAN CAPAIAN TRIDHARMA</p> {{-- Judul --}}
                </div>
                <div class="col-12 col-lg-6">
                    {{-- <p><b>Sub-kriteria : </b></p> --}}
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        @include('matriks.form_nav')

    </div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">9. LUARAN DAN CAPAIAN TRIDHARMA</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tbl_list" class="table table-bordered table-center-text">
                <thead>
                    <tr>
                        <th rowspan="2">No Butir</th>
                        <th rowspan="2" class="p_elem">Elemen</th>
                        <th rowspan="2">Lokasi
                        </th>
                        <th rowspan="2" class="p_indi">Deskriptor
                        </th>
                        <th colspan="4" class="p_indi">Alasan Penilaian
                        </th>
                        <th rowspan="2">Nilai
                        </th>
                        <th rowspan="2">Bobot
                        </th>
                        <th rowspan="2">Skor
                        </th>
                    </tr>
                    <tr>
                        <th>Sangat Baik</th>
                        <th>Baik</th>
                        <th>Cukup</th>
                        <th>Kurang</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        @php($row_id = 391)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            87
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">9.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian terkait pendidikan.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>9.1 [PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian mencakup: A. Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya DTPR/mahasiswa yang mendapat HKI.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>

                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 392)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            88
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 393)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            89
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3914)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            90
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 395)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            91
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI .
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 396)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            92
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 397)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            93
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">G. Kegiatan PkM: jumlah PkM bidang infokom yang mendapat pengakuan HKI.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>G. Kegiatan PkM: jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 398)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            94
                        </td>
                        {{-- NO BUTIR --}}
                        <td class="text-start">9.2 [PELAKSANAAN] A. Keterlaksanaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan luaran dan capaian terkait pendidikan.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>9.2 [PELAKSANAAN] Keterlaksanaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan luaran dan capaian mencakup: A. Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="74">74</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 399)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            95
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3910)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            96
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3911)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            97
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3912)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            98
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3913)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            99
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="30">30</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 394)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            100
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">G. Kegiatan PkM: jumlah PkM bidang infokom pengakuan HKI.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>G. Kegiatan PkM: jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="10">10</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3915)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            101
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">9.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait luaran dan capaian tridarma PT.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>9.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya evaluasisecara berkala dansangat efektifmengenai kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenaikebijakan danketercapaian standar(IKU dan IKT) sehinggadapat menemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya evaluasisecara berkala dancukup efektifmengenai kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya evaluasisecara berkala dankurang efektifmengenai kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="12">12</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3916)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            102
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">9.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait luaran dan capaian tridarma PT.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>9.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangsangat lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yanglengkap (revisi danrekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangcukup lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangkurang lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="8">8</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>
                    <tr>
                        @php($row_id = 3917)
                        <td class="matriks_id" data-id="{{ $row_id }}">
                            103
                        </td>{{-- NO BUTIR --}}
                        <td class="text-start">9.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap standar (IKU dan IKT) terkait luaran dan capaian tridarma PT.
                        </td>{{-- ELEMEN --}}
                        <td></td>{{-- LOKASI --}}
                        <td>9.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi.
                        </td>{{-- DESKRIPTOR --}}
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="4">
                                <span class="caption">4</span></label>
                            <span class="tooltiptext">Terlaksananya prosesoptimalisasi secarasangat efektif(peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggidisertai bukti yangsahih.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="3">
                                <span class="caption">3</span></label>
                            <span class="tooltiptext">Terlaksananya prosesoptimalisasi secaraefektif (peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKUdan IKT) yang berkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggidisertai bukti yangsahih.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="2">
                                <span class="caption">2</span></label>
                            <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi disertai bukti yang sahih.</span>
                        </td>
                        <td class="penilaian_check_field">
                            <label>
                                <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" name="nilai{{ $row_id }}" value="1">
                                <span class="caption">1</span></label>
                            <span class="tooltiptext">Terlaksananya prosesoptimalisasi secarakurang efektif(peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggidisertai bukti yangsahih.</span>
                        </td>{{-- ALASAN PENILAIAN 1 --}}
                        <td class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                            {{ getMatriksSkor($row_id, $matriks) }}
                        </td>{{-- NILAI --}}
                        <td class="bobot" data-bobot="4">4</td>{{-- BOBOT --}}
                        <td class="bukti_penilaian">
                            <label for="bukti" class="row ">
                                <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti" href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                            </label>
                            <label for="bukti" class="row">
                                <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen" data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}" data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                            </label>
                        </td>{{-- BUKTI PENILAIAN --}}
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->
</section>
@include('matriks.modal_bukti_penilaian')

@endsection

@include('matriks.scripts')