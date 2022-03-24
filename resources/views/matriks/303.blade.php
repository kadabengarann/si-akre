@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.3. MAHASISWA</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">3. MAHASISWA</h3>
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
                                23
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">3.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan mahasiswa terkait sistem rekrutmen.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>3.1 [PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan mahasiswa mencakup: A. Sistem rekrutmen (metode rekrutmen, kriteria) dan proses seleksi calon mahasiswa.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai331" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya sistem rekrutmen (metode rekrutmen, kriteria) dan proses seleksi calon mahasiswa, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai331" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya sistem rekrutmen (metode rekrutmen, kriteria) dan proses seleksi calon mahasiswa, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai331" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya sistem rekrutmen (metode rekrutmen, kriteria) dan proses seleksi calon mahasiswa, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai331" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya sistem rekrutmen (metode rekrutmen, kriteria) dan proses seleksi calon mahasiswa, disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                24
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Ketersediaan sistem layanan kepada mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Ketersediaan sistem layanan kepada mahasiswa.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai332" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya sistem layanan kepada mahasiswa, disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai332" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya sistem layanan kepada mahasiswa, disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai332" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya sistem layanan kepada mahasiswa, disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai332" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya sistem layanan kepada mahasiswa, disertai bukti yang sahih dan kurang lengkap</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="2">
                                2</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                25
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Ketersediaan kebijakan peningkatan animo calon mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Ketersediaan kebijakan peningkatan animo calon mahasiswa di level lokal, nasional atau internasional.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai333" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan peningkatan animo calon mahasiswa di level lokal, nasional atau internasional disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai333" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan peningkatan animo calon mahasiswa di level lokal, nasional atau internasional disertai bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai333" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan peningkatan animo calon mahasiswa di level lokal, nasional atau internasional disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai333" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya kebijakan peningkatan animo calon mahasiswa di level lokal, nasional atau internasional disertai bukti yang sahih dan kurang lengkap.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="2">
                                2</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                26
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">3.2 [PELAKSANAAN] A. Keterlaksanaan atas kebijakan, standar, IKU, dan IKT yang berkaitan dengan mahasiswa terkait sistem rekrutmen.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/301{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">3.1</a></td>{{-- LOKASI --}}
                            <td>3.2 [PELAKSANAAN] Keterlaksanaan atas kebijakan, standar, IKU, dan IKT yang berkaitan dengan mahasiswa mencakup: A. Sistem rekrutmen dan seleksi calon mahasiswa serta pertumbuhan jumlah mahasiswa, sesuai Tabel 3.1. LKPS
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai334" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya sistem rekrutmen dan seleksi calon mahasiswa serta pertumbuhan jumlah mahasiswa secara sangat efektif, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai334" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya sistem rekrutmen dan seleksi calon mahasiswa serta pertumbuhan jumlah mahasiswa secara efektif, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai334" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya sistem rekrutmen dan seleksi calon mahasiswa serta pertumbuhan jumlah mahasiswa secara cukup efektif, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai334" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya sistem rekrutmen dan seleksi calon mahasiswa serta pertumbuhan jumlah mahasiswa secara kurang efektif, disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                27
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan mutu, akses dan kecukupan layanan kepada mahasiswa. 
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan mutu, akses dan kecukupan layanan kepada mahasiswa.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai335" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya mutu, akses dan kecukupan layanan kepada mahasiswa yang sangat memadai, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai335" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya mutu, akses dan kecukupan layanan kepada mahasiswa yang memadai, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai335" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya mutu, akses dan kecukupan layanan kepada mahasiswa yang cukup memadai, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai335" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya mutu, akses dan kecukupan layanan kepada mahasiswa yang kurang memadai, disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                28
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C.Keterlaksanaan upaya peningkatan animo calon mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Keterlaksanaan upaya peningkatan animo calon mahasiswa di level lokal, nasional atau internasional.                                
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai336" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya upaya peningkatan animo calon mahasiswa di level lokal, nasional atau internasional dengan sangat efektif, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai336" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya upaya peningkatan animo calon mahasiswa di level lokal, nasional atau internasional dengan efektif, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai336" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya upaya peningkatan animo calon mahasiswa di level lokal, nasional atau internasional dengan cukup efektif, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai336" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya upaya peningkatan animo calon mahasiswa di level lokal, nasional atau internasional dengan kurang efektif, disertai bukti yang sahih.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="8">
                                8</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                29
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">3.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>3.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan mahasiswa, termasuk evaluasi tingkat kepuasan mahasiswa terhadap layanan mahasiswa.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai337" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan mahasiswa, termasuk evaluasi tingkat kepuasan mahasiswa terhadap layanan mahasiswa.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai337" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan mahasiswa, termasuk evaluasi tingkat kepuasan mahasiswa terhadap layanan mahasiswa.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai337" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan mahasiswa, termasuk evaluasi tingkat kepuasan mahasiswa terhadap layanan mahasiswa.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai337" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan mahasiswa, termasuk evaluasi tingkat kepuasan mahasiswa terhadap layanan mahasiswa.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="4">4</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="16">
                                16</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                30
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">3.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT). 
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>3.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan mahasiswa.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai338" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang sangat lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan mahasiswa.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai338" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan mahasiswa.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai338" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan mahasiswa.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai338" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan mahasiswa.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="4">
                                4</td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                31
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">3.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap standar (IKU dan IKT) terkait mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>3.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan mahasiswa.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai339" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan mahasiswa disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai339" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan mahasiswa disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai339" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan mahasiswa disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai339" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan mahasiswa disertai bukti yang sahih.</span>
                            </td>

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