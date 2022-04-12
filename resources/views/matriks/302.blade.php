@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h3>
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
                            <th rowspan="2">Bukti
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
                            @php($row_id = 321)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                12
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">2.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama terkait sistem tata pamong. 
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>2.1 [PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama mencakup: A. Sistem tata pamong yang memenuhi aspek: a) kredibel, b) transparan, c) akuntabel, d) bertanggung jawab, dan e) adil.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU, dan IKT yang sangat memenuhi berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama mencakup: A. Sistem tata pamong yang memenuhi aspek: a) kredibel, b) transparan, c) akuntabel, d) bertanggung jawab, dan e) adil.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU, dan IKT yang memenuhi berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama mencakup: A. Sistem tata pamong yang memenuhi aspek: a) kredibel, b) transparan, c) akuntabel, d) bertanggung jawab, dan e) adil.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU, dan IKT yang cukup memenuhi berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama mencakup: A. Sistem tata pamong yang memenuhi aspek: a) kredibel, b) transparan, c) akuntabel, d) bertanggung jawab, dan e) adil.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU, dan IKT yang kurang memenuhi berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama mencakup: A. Sistem tata pamong yang memenuhi aspek: a) kredibel, b) transparan, c) akuntabel, d) bertanggung jawab, dan e) adil.</span>
                            </td>

                            <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                    {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 322)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                13
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Ketersediaan sistem pengelolaan fungsional dan operasional UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Ketersediaan sistem pengelolaan fungsional dan operasional UPPS dan PS yang didukung kecukupan dokumen yang diperlukan.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan fungsional dan operasional UPPS dan PS yang didukung dokumen yang diperlukan, serta bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan fungsional dan operasional UPPS dan PS yang didukung dokumen yang diperlukan, serta bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan fungsional dan operasional UPPS dan PS yang didukung dokumen yang diperlukan, serta bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan fungsional dan operasional UPPS dan PS yang didukung dokumen yang diperlukan, serta bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                    {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 323)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                14
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Ketersediaan kebijakan terkait pengembangan kerjasama. 
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Ketersediaan kebijakan terkait pengembangan kerjasama.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait pengembangan kerjasama disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait pengembangan kerjasama disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait pengembangan kerjasama disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait pengembangan kerjasama disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 324)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                15
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Ketersediaan fungsi kelembagaan sistem penjaminan mutu internal
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Ketersediaan fungsi kelembagaan sistem penjaminan mutu internal. Tersedianya fungsi kelembagaan sistem penjaminan mutu internal, disertai bukti yang sahih dan sangat lengkap. 
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya fungsi kelembagaan sistem penjaminan mutu internal, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya fungsi kelembagaan sistem penjaminan mutu internal, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya fungsi kelembagaan sistem penjaminan mutu internal, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya fungsi kelembagaan sistem penjaminan mutu internal, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 325)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                16
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">2.2 [PELAKSANAAN] A. Keterlaksanaan atas kebijakan, standar, IKU, dan IKT yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama terkait kepemimpinan UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>2.2 [PELAKSANAAN] Keterlaksanaan atas kebijakan, standar, IKU, dan IKT yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama mencakup: A. Kepemimpinan UPPS dan PS dalam tiga aspek: operasional, organisasi dan publik.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya kepemimpinan UPPS dan PS dalam tiga aspek: operasional, organisasi dan publik, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya kepemimpinan UPPS dan PS dalam tiga aspek: operasional, organisasi dan publik, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya kepemimpinan UPPS dan PS dalam tiga aspek: operasional, organisasi dan publik, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya kepemimpinan UPPS dan PS dalam tiga aspek: operasional, organisasi dan publik, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 326)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                17
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan sistem pengelolaan fungsional dan operasional UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan sistem pengelolaan fungsional dan operasional UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya sistem pengelolaan fungsional dan operasional UPPS dan PS, secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya sistem pengelolaan fungsional dan operasional UPPS dan PS, secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya sistem pengelolaan fungsional dan operasional UPPS dan PS, secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya sistem pengelolaan fungsional dan operasional UPPS dan PS, secara kurang efektif disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 327)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                18
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C.Keterlaksanaan kerjasama di bidang pendidikan, penelitian dan pengabdian kepada masyarakat.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C.  Keterlaksanaan kerjasama di bidang pendidikan, penelitian dan pengabdian kepada masyarakat.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya kerjasama di bidang pendidikan, penelitian dan pengabdian kepada masyarakat secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya kerjasama di bidang pendidikan, penelitian dan pengabdian kepada masyarakat secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya kerjasama di bidang pendidikan, penelitian dan pengabdian kepada masyarakat secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya kerjasama di bidang pendidikan, penelitian dan pengabdian kepada masyarakat secara kurang efektif disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 328)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                19
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D.Keterlaksanaan proses penjaminan mutu internal.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Keterlaksanaan proses penjaminan mutu internal.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses penjaminan mutu internal secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses penjaminan mutu internal secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses penjaminan mutu internal secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses penjaminan mutu internal secara kurang efektif disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 329)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                20
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">2.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait Tata Kelola, Tata Pamong, dan Kerjasama. 
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>2.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama, termasuk survei kepuasan dosen, tenaga kependidikan dan mahasiswa terhadap Tata Kelola Organisasi UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama, termasuk survei kepuasan dosen, tenaga kependidikan dan mahasiswa terhadap Tata Kelola Organisasi UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama, termasuk survei kepuasan dosen, tenaga kependidikan dan mahasiswa terhadap Tata Kelola Organisasi UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama, termasuk survei kepuasan dosen, tenaga kependidikan dan mahasiswa terhadap Tata Kelola Organisasi UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan Tata Kelola Tata Pamong, dan Kerjasama, termasuk survei kepuasan dosen, tenaga kependidikan dan mahasiswa terhadap Tata Kelola Organisasi UPPS dan PS.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="5">5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 3210)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                21
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">2.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait Tata Kelola, Tata Pamong, dan Kerjasama.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>2.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang sangat lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong dan Kerjasama.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
                                </label>
                            </td>{{-- BUKTI PENILAIAN --}}
                        </tr>
                        <tr>
                            @php($row_id = 3211)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                22
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">2.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap standar (IKU dan IKT) terkait Tata Kelola, Tata Pamong, dan Kerjasama.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>2.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan Tata Kelola, Tata Pamong, dan Kerjasama disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                            ? 'skor_a'
                            : (getMatriksGrade($row_id, $matriks) == 3
                                ? 'skor_b'
                                : (getMatriksGrade($row_id, $matriks) == 2
                                    ? 'skor_c'
                                    : (getMatriksGrade($row_id, $matriks) == 1
                                        ? 'skor_d'
                                        : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-10 ml-auto mr-auto" id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriks) }}" target="_blank">Lihat Bukti</a>
                                </label>
                                <label for="bukti" class="row">
                                    <a class="btn btn-outline-primary col-10 ml-auto mr-auto input_bukti_trigg alasan_pen"
                                        data-toggle="modal" data-target="#bukti_penilaian" data-row="{{ $row_id }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriks) }}" data-skor="">Upload Bukti</a>
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