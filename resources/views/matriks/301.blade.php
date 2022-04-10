@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.1. VISI, MISI, TUJUAN DAN STRATEGI</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">1. VISI, MISI, TUJUAN DAN STRATEGI
                </h3>
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
                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">1.1 [PENETAPAN]</th>
                            </tr>
                        </div>
                        <tr>
                            @php($row_id = 311)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                3
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU, dan
                                IKT yang berkaitan dengan Visi, Misi, Tujuan, Strategi (VMTS) UPPS dan PS
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.1[PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan
                                Visi, Misi, Tujuan,Strategi (VMTS) UPPS dan PS yang mencakup: A. Rumusan VMTS UPPS dan PS
                                yang sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                kepentingan internal dan eksternal.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sangat sesuai dengan
                                    VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku kepentingan
                                    internal dan eksternal.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sesuai dengan VMTS
                                    PT, memayungi visi keilmuan program Tersedianya rumusan VMTS UPPS dan PS yang sesuai
                                    dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                    kepentingan internal dan eksternal</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>

                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2 </span>
                                </label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sesuai dengan VMTS
                                    PT, memayungi visi keilmuan program Tersedianya rumusan VMTS UPPS dan PS yang cukup
                                    sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                    kepentingan internal dan eksternal</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sesuai dengan VMTS
                                    PT, memayungi visi keilmuan program Tersedianya rumusan VMTS UPPS dan PS yang kurang
                                    sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                    kepentingan internal dan eksternal</span>
                            </td>

                            <td
                                class="nilai 
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
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row ">
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
                        <tr>@php($row_id = 312)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                4
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Rumusan strategi pencapaian VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Rumusan strategi pencapaian VMTS UPPS dan PS yang memenuhi tahapan yang jelas, dokumen
                                yang lengkap dan terkait pencapaian visi misi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS sangat
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS cukup
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS kurang
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
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
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row ">
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
                            @php($row_id = 313)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                5
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Rumusan visi keilmuan PS
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Rumusan visi keilmuan PS sesuai KKNI level 6.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio" 
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara sangat jelas.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio" 
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara jelas.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio" 
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara cukup jelas.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio" 
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara kurang jelas</span>
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
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row ">
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
                            <th colspan="11">1.2 [PELAKSANAAN]</th>
                        </tr>
                        <tr>
                            @php($row_id = 314)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                6
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.2 [PELAKSANAAN] A. Keterlaksanaan kebijakan, standar, IKU, dan IKT
                                yang berkaitan dengan VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.2 [PELAKSANAAN] Keterlaksanaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan VMTS
                                UPPS dan PS mencakup: A. Keterlaksanaan VMTS UPPS dan PS yang sesuai dengan VMTS PT,
                                memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal dan
                                eksternal.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang sangat efektif dengan VMTS
                                    PT, memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal
                                    dan eksternal, disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang efektif dengan VMTS PT,
                                    memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal dan
                                    eksternal, disertai bukti sahih</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang cukup efektif dengan VMTS
                                    PT, memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal
                                    dan eksternal, disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang kurang efektif dengan VMTS
                                    PT, memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal
                                    dan eksternal, disertai bukti sahih.</span>
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
                            @php($row_id = 315)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                7
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan strategi pencapaian VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan strategi pencapaian VMTS UPPS dan PS yang memenuhi tahapan yang jelas,
                                dokumen yang lengkap dan terkait pencapaian visi misi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    sangat efektif dilengkapi dengan tahapan yang jelas, dokumen yang lengkap dan terkait
                                    pencapaian visi misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    efektif dilengkapi dengan tahapan yang jelas, dokumen yang lengkap dan terkait
                                    pencapaian visi misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    cukup efektif dilengkapi dengan tahapan yang cukup jelas, dokumen yang cukup lengkap dan
                                    terkait pencapaian visi misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    kurang efektif dilengkapi dengan tahapan yang kurang jelas, dokumen yang kurang lengkap
                                    dan kurang terkait pencapaian visi misi.</span>
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
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
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
                            @php($row_id = 316)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                8
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Keterlaksanaan visi keilmuan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Keterlaksanaan visi keilmuan PS mengandung muatan KKNI level 6.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara kurang efektif disertai bukti yang sahih.</span>
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
                                {{ getMatriksSkor($row_id, $matriks) }}</td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
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
                            <th colspan="11">1.3 [EVALUASI]</th>
                        </tr>
                        <tr>
                            @php($row_id = 317)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                9
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala dan efektif
                                mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala dan efektif mengenai kebijakan dan
                                ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk
                                dan praktik yang baru yang berkaitan dengan VMTS UPPS dan PS, termasuk survei pemahaman
                                dosen, tendik dan mahasiswa terhadap VMTS UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan
                                    PS, termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan
                                    PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenai
                                    kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik
                                    baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan PS,
                                    termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan
                                    PS, termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan
                                    PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan
                                    PS, termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan
                                    PS.</span>
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
                            <th colspan="11">1.4 [PENGENDALIAN]</th>
                        </tr>
                        <tr>
                            @php($row_id = 318)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                10
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan
                                implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait VMTS UPPS
                                dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan
                                rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan
                                dengan VMTS UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang sangat
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
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
                            <th colspan="11">1.5 [PENINGKATAN]</th>
                        </tr>
                        <tr>
                            @php($row_id = 319)
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                11
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap
                                standar (IKU dan IKT) terkait VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan
                                penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan VMTS UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan VMTS UPPS dan PS, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan,
                                    penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan VMTS
                                    UPPS dan PS, disertai bukti yang sahih. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan VMTS UPPS dan PS, disertai bukti yang sahih. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                    name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan VMTS UPPS dan PS, disertai bukti yang sahih.</span>
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
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <div class="modal fade" id="bukti_penilaian" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Bukti Penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="/penilaian/101" id="bukti_form">

                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-12 col-form-label">Masukkan Link
                                </label>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="hidden" id="input_row_id" name="row_id" value="">
                                            <input id="input_bukti" type="url" name="buktiPenilaian"
                                                class="fieldInsertInput form-control bukti"
                                                pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                required placeholder="https://"
                                                @error('buktiPenilaian') is-invalid @enderror value="">

                                        </div>
                                        <div class="invalid-feedback">
                                            @error('buktiPenilaian')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="bukti_submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@include('matriks.scripts')
