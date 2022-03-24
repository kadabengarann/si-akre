@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.7. PENELITIAN</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">7. PENELITIAN</h3>
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
                                65
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">7.1 [PENETAPAN] A. Ketersediaan peraturan terkait keberadaan lembaga penelitian DTPR dan mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>7.1 [PENETAPAN] Ketersediaan kebijakan, standar, IKU dan IKT yang berkaitan dengan penelitian DTPR yang mencakup: A. Peraturan terkait keberadaan lembaga/ unit pengelola penelitian, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Penelitian atau peta jalan penelitian yang memayungi tema penelitian DTPR dan mahasiswa, serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai371" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya peraturan terkait lembaga penelitian, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Penelitian atau peta jalan penelitian yang memayungi tema penelitian DTPR dan mahasiswa, serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai371" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya peraturan terkait lembaga penelitian, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Penelitian atau peta jalan penelitian yang memayungi tema penelitian DTPR dan mahasiswa, serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai371" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya peraturan terkait lembaga penelitian, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Penelitian atau peta jalan penelitian yang memayungi tema penelitian DTPR dan mahasiswa, serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai371" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya peraturan terkait lembaga penelitian, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Penelitian atau peta jalan penelitian yang memayungi tema penelitian DTPR dan mahasiswa, serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="2">
                                2</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                66
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Ketersediaan dokumen pengelolaan penelitian yang lengkap.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Ketersediaan dokumen pengelolaan penelitian yang lengkap.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai372" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan penelitian disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai372" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan penelitian disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai372" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan penelitian disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai372" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan penelitian disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="2">
                                2</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                67
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Ketersediaan mekanisme pelaksanaan penelitian DTPR dan mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Ketersediaan mekanisme pelaksanaan penelitian DTPR dan mahasiswa sesuai dengan agenda penelitian DTPR yang merujuk kepada peta jalan penelitian.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai373" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai373" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai373" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai373" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="2">
                                2</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                68
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Ketersediaan mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Ketersediaan mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai374" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai374" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai374" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai374" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian penelitian DTPR dan mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="2">
                                2</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                69
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">7.2 [PELAKSANAAN] A. Keterlaksanaan proses pengelolaan lembaga penelitian DTPR dan mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>7.2 [PELAKSANAAN] Keterlaksanaan kebijakan dan standar terkait penelitian DTPR yang mencakup: A. Proses pengelolaan lembaga penelitian dalam mengelola penelitian DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian yang relevan dengan Rencana Induk Penelitian yang memuat peta jalan penelitian dan/atau Fokus Penelitian PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai375" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses pengelolaan lembaga penelitian dalam mengelola penelitian DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian yang relevan dengan Rencana Induk Penelitian yang memuat peta jalan penelitian dan/atau Fokus Penelitian PS secara sangat efektif dan disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai375" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses pengelolaan lembaga penelitian dalam mengelola penelitian DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian yang relevan dengan Rencana Induk Penelitian yang memuat peta jalan penelitian dan/atau Fokus Penelitian PS secara efektif dan disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai375" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses pengelolaan lembaga penelitian dalam mengelola penelitian DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian yang relevan dengan Rencana Induk Penelitian yang memuat peta jalan penelitian dan/atau Fokus Penelitian PS secara cukup efektif dan disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai375" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses pengelolaan lembaga penelitian dalam mengelola penelitian DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar penelitian yang relevan dengan Rencana Induk Penelitian yang memuat peta jalan penelitian dan/atau Fokus Penelitian PS secara kurang efektif dan disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                70
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan pengelolaan penelitian dengan dokumen yang lengkap.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan pengelolaan penelitian dengan dokumen yang lengkap, mulai dari call for proposal hingga laporan akhir.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai376" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan penelitian dengan dokumen yang sangat lengkap, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai376" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan penelitian dengan dokumen yang lengkap, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai376" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan penelitian dengan dokumen yang cukup lengkap, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai376" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan penelitian dengan dokumen yang kurang lengkap, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                71
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Keterlaksanaan penelitian DTPR dan mahasiswa yang merujuk pada RIP.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Keterlaksanaan penelitian DTPR danmahasiswa sesuai dengan agenda penelitian DTPR yang merujuk kepada Rencana Induk Penelitian.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai377" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya penelitian DTPR dan mahasiswa sesuai dengan agenda penelitian DTPR yang merujuk kepada Rencana Induk Penelitian dilengkapi dengan dokumen yang sangat lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai377" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya penelitian DTPR dan mahasiswa sesuai dengan agenda penelitian DTPR yang merujuk kepada Rencana Induk Penelitian dilengkapi dengan dokumen yang lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai377" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya penelitian DTPR dan mahasiswa sesuai dengan agenda penelitian DTPR yang merujuk kepada Rencana Induk Penelitian dilengkapi dengan dokumen yang cukup lengkap dan sahih. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai377" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya penelitian DTPR dan mahasiswa sesuai dengan agenda penelitian DTPR yang merujuk kepada Rencana Induk Penelitian dilengkapi dengan dokumen yang kurang lengkap dan sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                72
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Keterlaksanaan monitoring kesesuaian penelitian DTPR dan mahasiswa untuk perbaikan relevansi penelitian dan pengembangan keilmuan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Keterlaksanaan monitoring kesesuaian penelitian DTPR dan mahasiswa dengan Rencana Induk Penelitian, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai378" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Keterlaksanaan monitoring kesesuaian penelitian DTPR dan mahasiswa dengan Rencana Induk Penelitian, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai378" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Keterlaksanaan monitoring kesesuaian penelitian DTPR dan mahasiswa dengan Rencana Induk Penelitian, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai378" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Keterlaksanaan monitoring kesesuaian penelitian DTPR dan mahasiswa dengan Rencana Induk Penelitian, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai378" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Keterlaksanaan monitoring kesesuaian penelitian DTPR dan mahasiswa dengan Rencana Induk Penelitian, dan penggunaan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan Program Studi, secara kurang efektif disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                73
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">7.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait penelitian DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>7.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan penelitian DTPR , termasuk survei kepuasan DTPR terhadap pengelolaan kegiatan penelitian.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai379" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan penelitian DTPR , termasuk survei kepuasan DTPR terhadap pengelolaan kegiatan penelitian.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai379" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan penelitian DTPR , termasuk survei kepuasan DTPR terhadap pengelolaan kegiatan penelitian.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai379" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan penelitian DTPR , termasuk survei kepuasan DTPR terhadap pengelolaan kegiatan penelitian.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai379" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan penelitian DTPR , termasuk survei kepuasan DTPR terhadap pengelolaan kegiatan penelitian.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="12">
                                12</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                74
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">7.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjutdan implementasi terkait penelitian DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>7.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3710" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut danimplementasi yang sangat lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3710" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3710" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3710" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                75
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">7.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terkait penelitian DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>7.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3711" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3711" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3711" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai3711" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan penelitian DTPR disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>

@endsection

@include('matriks.scripts')