@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.6. PENDIDIKAN</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">6. PENDIDIKAN</h3>
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
                                5
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">6.1 [PENETAPAN] A. Ketersediaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan pendidikan.                                
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>6.1 [PENETAPAN] Ketersediaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan pendidikan/pembelajaran yang mencakup: A. Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI.                                
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai361" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai361" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai361" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai361" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                51
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Ketersediaan Struktur Kurikulum berbasisKKNI/OBE/SKKNI sesuai dengan Profil Lulusan CPL, CPMK, RPS, Struktur Mata Kuliah dan Asesmen Pembelajaran.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Ketersediaan Struktur Kurikulum berbasis KKNI/OBE/SKKNI sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), Capaian Pembelajaran Mata Kuliah (CPMK), RPS, Struktur Mata Kuliah dan Asesmen Pembelajaran.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai362" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya Struktur Kurikulum berbasis KKNI/OBE/SKKNI sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), Capaian Pembelajaran Mata Kuliah (CPMK), RPS, Struktur Mata Kuliah dan Asesmen Pembelajaran disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai362" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya Struktur Kurikulum berbasis KKNI/OBE/SKKNI sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), Capaian Pembelajaran Mata Kuliah (CPMK), RPS, Struktur Mata Kuliah dan Asesmen Pembelajaran disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai362" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya Struktur Kurikulum berbasis KKNI/OBE/SKKNI sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), Capaian Pembelajaran Mata Kuliah (CPMK), RPS, Struktur Mata Kuliah dan Asesmen Pembelajaran disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai362" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya Struktur Kurikulum berbasis KKNI/OBE/SKKNI sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), Capaian Pembelajaran Mata Kuliah (CPMK), RPS, Struktur Mata Kuliah dan Asesmen Pembelajaran disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                52
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Ketersediaan kebijakan terkait penciptaan suasana akademik.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Ketersediaan kebijakan terkait penciptaan suasana akademik meliputi: 
                                (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; 
                                (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; 
                                (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; 
                                (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal.                                
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai363" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait penciptaan suasana akademik meliputi: 
                                    (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; 
                                    (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; 
                                    (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; 
                                    (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai363" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait penciptaan suasana akademik meliputi: 
                                    (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; 
                                    (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; 
                                    (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; 
                                    (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai363" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait penciptaan suasana akademik meliputi: 
                                    (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; 
                                    (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; 
                                    (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; 
                                    (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai363" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan terkait penciptaan suasana akademik meliputi: 
                                    (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; 
                                    (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; 
                                    (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; 
                                    (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal,disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                53
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Ketersediaan mekanisme integrasi topik penelitian dan kegiatan PkM ke dalam proses pembelajaran.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Ketersediaan mekanisme integrasi topik penelitian dan kegiatan PkM ke dalam proses pembelajaran.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai364" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme integrasi topik penelitian dan kegiatan PkM ke dalam proses pembelajaran disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai364" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme integrasi topik penelitian dan kegiatan PkM ke dalam proses pembelajaran disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai364" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme integrasi topik penelitian dan kegiatan PkM ke dalam proses pembelajaran disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai364" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme integrasi topik penelitian dan kegiatan PkM ke dalam proses pembelajaran disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                54
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">E. Ketersediaan mekanisme proses evaluasi dan pemutakhiran kurikulum.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>E. Ketersediaan mekanisme proses evaluasi dan pemutakhiran kurikulum.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai365" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses evaluasi dan pemutakhiran kurikulum disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai365" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses evaluasi dan pemutakhiran kurikulum disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai365" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses evaluasi dan pemutakhiran kurikulum disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai365" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses evaluasi dan pemutakhiran kurikulum disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                55
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">F. Mekanisme proses penyelesaian tugas akhir/ tesis/ disertasi.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>F. Mekanisme proses penyelesaian tugas akhir/ tesis/ disertasi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai366" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses penyelesaian tugas akhir/ tesis/ disertasi disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai366" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses penyelesaian tugas akhir/ tesis/ disertasi disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai366" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses penyelesaian tugas akhir/ tesis/ disertasi disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai366" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme proses penyelesaian tugas akhir/ tesis/ disertasi disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                56
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">6.2 [PELAKSANAAN] A. Keterlaksanaan proses pembelajaran sesuai Profil Lulusan, CPL sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI.                                
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>6.2 [PELAKSANAAN] Keterlaksanaan kebijakan dan standar yang berkaitan dengan pendidikan/pembelajaran yang mencakup: A. Keterlaksanaan proses pembelajaran sesuai Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI.       
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai367" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran sesuai Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI, secara sangat efektif disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai367" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran sesuai Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI, secara efektif disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai367" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran sesuai Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI, secara cukup efektif disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai367" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran sesuai Profil Lulusan, Capaian Pembelajaran Lulusan (CPL) sesuai dengan Profil Lulusan dan jenjang KKNI/SKKNI, secara kurang efektif disertai bukti sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="12">
                                12</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                57
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan proses pembelajaran yang sesuai dengan Struktur Kurikulum berbasis KKNI/OBE/SKKNI.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan proses pembelajaran yang sesuai dengan Struktur Kurikulum berbasis KKNI/OBE/SKKNI , sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), memiliki Struktur Matakuliah, Capaian Pembelajaran Mata Kuliah (CPMK), Asesmen Pembelajaran dan RPS, proses pembelajaran yang isi materi pembelajaran sesuai dengan RPS, memiliki kedalaman dan keluasan yang relevan untuk mencapai Capaian Pembelajaran Lulusan dengan Asesmen Pembelajaran yang relevan.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai368" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran yang sesuai dengan Struktur Kurikulum berbasis KKNI/OBE/SKKNI, sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), memiliki Struktur Matakuliah, Capaian Pembelajaran Mata Kuliah (CPMK), Asesmen Pembelajaran dan RPS, proses pembelajaran yang isi materi pembelajaran sesuai dengan RPS, memiliki kedalaman dan keluasan yang relevan untuk mencapai Capaian Pembelajaran Lulusan dengan Asesmen Pembelajaran yang relevan secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai368" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran yang sesuai dengan Struktur Kurikulum berbasis KKNI/OBE/SKKNI, sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), memiliki Struktur Matakuliah, Capaian Pembelajaran Mata Kuliah (CPMK), Asesmen Pembelajaran dan RPS, proses pembelajaran yang isi materi pembelajaran sesuai dengan RPS, memiliki kedalaman dan keluasan yang relevan untuk mencapai Capaian Pembelajaran Lulusan dengan Asesmen Pembelajaran yang relevan secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai368" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran yang sesuai dengan Struktur Kurikulum berbasis KKNI/OBE/SKKNI, sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), memiliki Struktur Matakuliah, Capaian Pembelajaran Mata Kuliah (CPMK), Asesmen Pembelajaran dan RPS, proses pembelajaran yang isi materi pembelajaran sesuai dengan RPS, memiliki kedalaman dan keluasan yang relevan untuk mencapai Capaian Pembelajaran Lulusan dengan Asesmen Pembelajaran yang relevan secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai368" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses pembelajaran yang sesuai dengan Struktur Kurikulum berbasis KKNI/OBE/SKKNI, sesuai dengan Profil Lulusan, Capaian Pembelajaran Lulusan (CPL), memiliki Struktur Matakuliah, Capaian Pembelajaran Mata Kuliah (CPMK), Asesmen Pembelajaran dan RPS, proses pembelajaran yang isi materi pembelajaran sesuai dengan RPS, memiliki kedalaman dan keluasan yang relevan untuk mencapai Capaian Pembelajaran Lulusan dengan Asesmen Pembelajaran yang relevan secara kurang efektif disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="12">
                                12</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                58
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Keterlaksanaan suasana akademik.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Keterlaksanaan suasana akademik meliputi : (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai369" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya suasana akademik meliputi: (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai369" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya suasana akademik meliputi: (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai369" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya suasana akademik meliputi: (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai369" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya suasana akademik meliputi: (1) Bentuk interaksi antara dosen, mahasiswa dan sumber belajar; (2) Pemantauan kesesuaian proses terhadap rencana pembelajaran; (3) Keterlibatan pemangku kepentingan dalam proses evaluasi dan pemutakhiran kurikulum; (4) Penciptaan suasana akademik melalui kegiatan ilmiah yang terjadwal, secara kurang efektif disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                59
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Keterlaksanaan integrasi topik penelitian dan kegiatan PkM dalam proses pembelajaran.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Keterlaksanaan integrasi topik penelitian dan kegiatan PkM dalam proses pembelajaran.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3610" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya integrasi topik penelitian dan kegiatan PkM dalam proses pembelajaran, secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3610" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya integrasi topik penelitian dan kegiatan PkM dalam proses pembelajaran, secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3610" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya integrasi topik penelitian dan kegiatan PkM dalam proses pembelajaran, secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3610" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya integrasi topik penelitian dan kegiatan PkM dalam proses pembelajaran, secara kurang efektif disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                60
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">E. Proses evaluasi dan pemutakhiran kurikulum, dan keterlibatan pemangku kepentingan.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>E. Proses evaluasi dan pemutakhiran kurikulum, dan keterlibatan pemangku kepentingan.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3611" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses evaluasi dan pemutakhiran kurikulum, dan keterlibatan pemangku kepentingan secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3611" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses evaluasi dan pemutakhiran kurikulum, dan keterlibatan pemangku kepentingan secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3611" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses evaluasi dan pemutakhiran kurikulum, dan keterlibatan pemangku kepentingan secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3611" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses evaluasi dan pemutakhiran kurikulum, dan keterlibatan pemangku kepentingan secara kurang efektif disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                61
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">F. Keterlaksanaan mekanisme proses penyelesaian tugas akhir.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>F. Keterlaksanaan mekanisme proses penyelesaian tugas akhir.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3612" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses penyelesaian tugas akhir secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3612" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses penyelesaian tugas akhir secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3612" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses penyelesaian tugas akhir secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3612" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses penyelesaian tugas akhir, secara kurang efektif disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                62
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">6.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait pendidikan.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>6.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan pendidikan/ pembelajaran, termasuk evaluasi kepuasan mahasiswa terhadap proses pembelajaran.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3613" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksannya evaluasi secara berkala dan sangat efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan pendidikan/pembelajaran, termasuk evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3613" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksannya evaluasi secara berkala dan efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan pendidikan/ pembelajaran, termasuk evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3613" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksannya evaluasi secara berkala dan cukup efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan pendidikan/ pembelajaran, termasuk evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3613" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksannya evaluasi secara berkala dan kurang efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan pendidikan/ pembelajaran, termasuk evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="6">6</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="24">
                                24</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                63
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">6.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait pendidikan.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>6.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran, termasuk analisis dan tindak lanjut dari evaluasi kepuasan mahasiswa terhadap proses pembelajaran.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3614" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang sangat lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran, termasuk analisis dan tindak lanjut dari evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3614" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran, termasuk analisis dan tindak lanjut dari evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3614" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran, termasuk analisis dan tindak lanjut dari evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3614" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran, termasuk analisis dan tindak lanjut dari evaluasi kepuasan mahasiswa terhadap proses pembelajaran.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                64
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">6.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terkait pendidikan.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>6.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3615" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3615" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan,penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3615" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3615" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan pendidikan/ pembelajaran disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>

@endsection

@include('matriks.scripts')