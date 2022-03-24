@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>KONDISI EKSTERNAL DAN PROFIL</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        {{-- <p><b>Sub-kriteria : </b>a. Jumlah Calon Mahasiswa Baru</p> --}}
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('matriks.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">KONDISI EKSTERNAL DAN PROFIL</h3>
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
                                1
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">A. Kondisi Eksternal
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Kemampuan UPPS dalam menganalisis aspek-aspek dalam lingkungan makro dan lingkungan mikro
                                yang relevan dan dapat mempengaruhi eksistensi dan pengembangan PS maupun UPPS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">UPPS mampu menganalisis aspek-aspek dalam lingkungan makro dan lingkungan mikro yang relevan dan dapat mempengaruhi eksistensi dan pengembangan PS maupun UPPS dengan sangat komprehensif.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">UPPS mampu menganalisis aspek-aspek dalam lingkungan makro dan lingkungan mikro yang relevan dan dapat mempengaruhi eksistensi dan pengembangan PS maupun UPPS secara komprehensif.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">UPPS mampu menganalisis aspek-aspek dalam lingkungan makro dan lingkungan mikro yang relevan dan dapat mempengaruhi eksistensi dan pengembangan PS maupun UPPS secara cukup komprehensif.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">UPPS mampu menganalisis aspek-aspek dalam lingkungan makro dan lingkungan mikro yang relevan dan dapat mempengaruhi eksistensi dan pengembangan PS maupun UPPS secara kurang komprehensif.</span>
                            </td>

                            <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="6">6</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="24">
                                24 </td>{{-- SKOR MAKS --}}
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Profil Unit Pengelola Program Studi / Analisis Internal
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Kemampuan UPPS dan PS dalam menyajikan seluruh informasi secara ringkas, komprehensif, serta
                                konsisten terhadap data dan informasi yang disampaikan pada masing-masing kriteria.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">UPPS mampu menyajikan seluruh informasi secara ringkas, sangat komprehensif dan konsisten terhadap data dan informasi yang disampaikan pada masing-masing kriteria.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">UPPS mampu menyajikan seluruh informasi secara ringkas, komprehensif dan konsisten terhadap data dan informasi yang disampaikan padamasing-masing kriteria.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">UPPS mampu menyajikan seluruh informasi secara ringkas, cukup komprehensif dan konsisten terhadap data dan informasi yang disampaikan pada masing-masing kriteria.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">UPPS mampu menyajikan seluruh informasi secara ringkas, kurang komprehensif dan konsisten terhadap data dan informasi yang disampaikan pada masing-masing kriteria.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                           <td class="nilai"></td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="6">6</td>{{-- BOBOT --}}
                            <td data-target="#skor_penilaian" data-skor="24">
                                24 </td>{{-- SKOR MAKS --}}
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
    
@endsection

@include('matriks.scripts')
