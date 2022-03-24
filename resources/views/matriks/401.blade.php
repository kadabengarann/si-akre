@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>D.SUPLEMEN PROGRAM STUDI</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">SUPLEMEN PROGRAM STUDI</h3>
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
                                109
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">[PENDIDIKAN] 1.1 Mata Kuliah Inti/Khas Teknologi Informasi.
                            </td>{{-- ELEMEN --}}
                            <td>1.1</td>{{-- LOKASI --}}
                            <td>[PENDIDIKAN] 1.1 Mata Kuliah Inti/Khas Teknologi Informasi Program Studi menguraikan Struktur Kurikulum yang memuat mata kuliah inti Teknologi Informasi yang mencakup: (1) Dasar-dasar Perangkat Lunak (2) Manajemen Informasi (3) Teknologi Platform (4) Paradigma Sistem (5) Teknologi Sistem Terintegrasi (6) Jaringan (7) Sistem Web dan Seluler (Mobile) (8) Desain User Experience (9) Prinsip Keamanan Siber (10) Praktek Professional Global (11) Proyek Utama (major projects) (12) Dilengkapi RPS yang memuat CPMK yang sesuai dengan CPL.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai411" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Struktur kurikulum memenuhi semua aspek dan dilengkapi RPS yang memuat CPMK yang sangat sesuai dengan CPL.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai411" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Struktur kurikulum memenuhi sebagian besar aspek dan dilengkapi RPS yang memuat CPMK yang sesuai dengan CPL.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai411" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Struktur kurikulum memenuhi sebagian aspek dan dilengkapi RPS yang memuat CPMK yang cukup sesuai dengan CPL. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai411" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Struktur kurikulum memenuhi sedikit aspek dan dilengkapi RPS yang memuat CPMK yang kurang sesuai dengan CPL.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="5">5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="20">
                                20</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                110
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.2 Mata kuliah Pilihan Domain Spesifik dan Lingkungan Teknologi Informasi. 
                            </td>{{-- ELEMEN --}}
                            <td>1.2</td>{{-- LOKASI --}}
                            <td>1.2 Mata kuliah Pilihan Domain Spesifik dan Lingkungan Teknologi Informasi Program Studi menguraikan Struktur Kurikulum yang memuat daftar mata kuliah pilihan domain Teknologi Informasi yang mencakup: (1) Bidang kompetensi: Aplikasi seluler (mobile), komputasi awan, Internet of Things, skalabilitas dan analitik data, sistem dan layanan virtual, dan Software Development and Management, Tantangan baru di Keamanan Siber. (2) Dilengkapi RPS yang memuat CPMK yang relevan dengan CPL. 
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai412" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait daftar mata kuliah pilihan memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang sangat relevan dengan CPL. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai412" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait daftar mata kuliah pilihan memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang relevan dengan CPL.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai412" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait daftar mata kuliah pilihan memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang cukup relevan dengan CPL.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai412" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait daftar mata kuliah pilihan memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang kurang relevan dengan CPL.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="5">5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="20">
                                20</td>{{-- SKOR MAKS --}}
                        </tr>
                              
                        <tr>
                            <td>
                                111
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.3 Mata kuliah terkait Matematika dan Ilmu Dasar yang Relevan dengan Bidang Teknologi Informasi Program Studi menguraikan Struktur Kurikulum yang memuat mata-kuliah terkait metode kuantitatif yang mencakup: (1) matematika diskrit, aljabar linier, statistik dan probabilitas, analitik data. (2)Dilengkapi RPS yang memuat CPMK yang relevan dengan CPL.
                            </td>{{-- ELEMEN --}}
                            <td>1.3</td>{{-- LOKASI --}}
                            <td>
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai413" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait metode kuantitatif memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang sangat relevan dengan CPL. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai413" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait metode kuantitatif memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang relevan dengan CPL.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai413" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait metode kuantitatif memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang cukup relevan dengan CPL.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai413" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Struktur kurikulum terkait metode kuantitatif memenuhi 2 aspek dan dilengkapi RPS yang memuat CPMK yang kurang relevan dengan CPL.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="4">4</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="16">
                                16</td>{{-- SKOR MAKS --}}
                        </tr>
                               
                        <tr>
                            <td>
                                112
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.4 Proyek utama (Capstone project) yang Relevan dengan Bidang Teknologi Informasi.
                            </td>{{-- ELEMEN --}}
                            <td>1.4</td>{{-- LOKASI --}}
                            <td>1.4 Proyek utama (Capstone project) yang Relevan dengan Bidang Teknologi Informasi Program Studi menguraikan pelaksanaan proyek utama (Capstone Project) yang merupakan integrasi dan penerapan pengetahuan dan keterampilan yang diperoleh dari tugas-tugas mata kuliah sebelumnya yang mencakup: (1) Panduan pelaksanaan (2) Daftar mata kuliah terkait proyek utama (3) Standar minimal kualitas aplikasi dari hasil proyek. Proyek ini bisa merupakan bagian dari kurikulum reguler maupun kurikulum Merdeka Belajar-Kampus Merdeka (MBKM).
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai414" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi semua aspek dengan hasil proyek sangat relevan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai414" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi sebagian besar aspek dengan hasil proyek relevan. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai414" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi sebagian aspek dengan hasil proyek cukup relevan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai414" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi sedikit aspek dengan hasil proyek kurang relevan.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="12">
                                12</td>{{-- SKOR MAKS --}}
                        </tr>
                             
                        <tr>
                            <td>
                                113
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">Pengembangan Teknologi Informasi Dalam Rangka Pengabdian kepada Masyarakat.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>[Pengabdian kepada Masyarakat] Program Studi menguraikan upaya dalam rangka pengembangan aplikasi Teknologi Informasi yang digunakan di masyarakat dan pemangku kepentingan pada suatu domain (domain-domainnya: kesehatan, keuangan, dll.)
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai415" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi semua aspek, sangat efektif dan ada keberlanjutan upaya yang telah dilakukan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai415" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi sebagian besar aspek, efektif dan ada keberlanjutan upaya yang telah dilakukan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai415" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi sebagian aspek dan cukup efektif dan ada keberlanjutan upaya yang telah dilakukan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai415" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Ada bukti pelaksanaan yang memenuhi sedikit aspek dan kurang efektif dan tidak ada keberlanjutan upaya yang telah dilakukan.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="12">
                                12</td>{{-- SKOR MAKS --}}
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>

@endsection

@include('matriks.scripts')