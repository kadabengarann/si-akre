@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
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
                            <td>
                                87
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">9.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian terkait pendidikan.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>9.1 [PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian mencakup: A. Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya DTPR/mahasiswa yang mendapat HKI.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai391" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai391" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai391" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai391" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen kebijakan, standar, IKU dan IKT yang berkaitan dengan luaran dan capaian kegiatan Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang program studi, karya DTPR/mahasiswa yang mendapat HKI disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                88
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai392" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai392" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai392" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai392" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                89
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai393" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai393" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai393" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai393" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang terkait dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom. disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                90
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai394" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai394" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai394" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai394" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                91
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI .
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai395" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai395" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai395" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai395" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                92
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai396" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai396" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai396" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai396" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                93
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">G. Kegiatan PkM: jumlah PkM bidang infokom yang mendapat pengakuan HKI.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>G. Kegiatan PkM: jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai397" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai397" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai397" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai397" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                94
                            </td>
                            Z{{-- NO BUTIR --}}
                            <td class="text-start">9.2 [PELAKSANAAN] A. Keterlaksanaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan luaran dan capaian terkait pendidikan.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>9.2 [PELAKSANAAN] Keterlaksanaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan luaran dan capaian mencakup: A. Pendidikan: Pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai398" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai398" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai398" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai398" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya pemenuhan Capaian Pembelajaran Lulusan (CPL), rata-rata IPK, prestasi mahasiswa, kelulusan tepat waktu, pelacakan dan perekaman data lulusan, rata-rata masa tunggu, kesesuaian bidang kerja dengan bidang Program Studi, karya dosen/mahasiswa yang mendapat HKI disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="74">74</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="296">
                                296</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                95
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Penelitian: jumlah publikasi penelitian DTPR dengan tema bidang infokom.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai399" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai399" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai399" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai399" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah publikasi penelitian DTPR dengan tema bidang infokom, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="60">
                                60</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                96
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Penelitian: jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3910" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3910" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3910" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3910" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian DTPR bersama mahasiswa dengan tema bidang infokom disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="60">
                                60</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                97
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Penelitian: jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3911" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3911" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3911" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3911" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah artikel karya ilmiah DTPR bidang infokom yang disitasi, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="60">
                                60</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                98
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">E. Penelitian: jumlah penelitian bidang infokom yang  mendapat pengakuan HKI.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>E. Penelitian: jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3912" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3912" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3912" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3912" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah penelitian bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="15">15</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="60">
                                60</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                99
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>F. Kegiatan PkM: jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3913" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3913" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3913" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3913" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah kegiatan PkM yang relevan dengan bidang infokom yang diadopsi oleh masyarakat, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="30">30</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="120">
                                120</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                100
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">G. Kegiatan PkM: jumlah PkM bidang infokom pengakuan HKI.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>G. Kegiatan PkM: jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri).
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3914" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3914" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3914" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3914" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya peraturan, kebijakan, standar, IKU dan IKT yang berkaitan dengan jumlah PkM bidang infokom yang mendapat pengakuan HKI (Paten, Paten Sederhana, Hak Cipta, Desain Produk Industri), disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="10">10</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="40">
                                40</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                101
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">9.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait luaran dan capaian tridarma PT.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>9.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3915" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasisecara berkala dansangat efektifmengenai kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3915" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenaikebijakan danketercapaian standar(IKU dan IKT) sehinggadapat menemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3915" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasisecara berkala dancukup efektifmengenai kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3915" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasisecara berkala dankurang efektifmengenai kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan luaran dancapaian kegiatantridarma PerguruanTinggi.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="12">12</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="48">
                                48</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                102
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">9.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait luaran dan capaian tridarma PT.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>9.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3916" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangsangat lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3916" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yanglengkap (revisi danrekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3916" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangcukup lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3916" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangkurang lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggi.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="8">8</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="32">
                                32</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                103
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">9.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap standar (IKU dan IKT) terkait luaran dan capaian tridarma PT.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>9.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3917" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya prosesoptimalisasi secarasangat efektif(peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggidisertai bukti yangsahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3917" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya prosesoptimalisasi secaraefektif (peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKUdan IKT) yang berkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggidisertai bukti yangsahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3917" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan luaran dan capaian kegiatan tridarma Perguruan Tinggi disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3917" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya prosesoptimalisasi secarakurang efektif(peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKU dan IKT) yangberkaitan denganluaran dan capaiankegiatan tridarmaPerguruan Tinggidisertai bukti yangsahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="5">5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="20">
                                20</td>{{-- SKOR MAKS --}}
                        </tr>
                     

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>

@endsection

@include('matriks.scripts')