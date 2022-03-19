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
                                <span class="tooltiptext">Hint text </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Hint text </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Hint text </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai111" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Hint text </span>
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
                                <span class="tooltiptext">Hint text </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Hint text </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Hint text </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" name="nilai211" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Hint text </span>
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
    <div class="modal fade" id="text_penilaian" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Alasan penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="/matriks/101">

                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-12 col-form-label">Masukkan alasan penilaian
                                </label>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            class="form-control @error('textPenilaian') is-invalid @enderror"
                                            name="textPenilaian">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {{ $prodi->alamat }}</textarea>
                                        <div class="invalid-feedback">
                                            @error('textPenilaian')
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
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="skor_penilaian" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Skor Penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="/matriks/101">

                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-12 col-form-label">Berikan skor
                                </label>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input id="input_skor" required type="number" min="0" max="100"
                                                name="skorPenilaian" class="fieldInsertInput form-control rupiah"
                                                placeholder="0" @error('skorPenilaian') is-invalid @enderror" value="">
                                        </div> </textarea>
                                        <div class="invalid-feedback">
                                            @error('skorPenilaian')
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
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@include('matriks.scripts')
