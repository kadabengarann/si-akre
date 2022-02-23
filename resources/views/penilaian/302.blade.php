@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        {{-- <p><b>Sub-kriteria : </b>a. Jumlah Calon Mahasiswa Baru</p> --}}
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('penilaian.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">TATA PAMONG, TATA KELOLA, DAN
                    KERJASAMA
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No Butir</th>
                            <th class="p_elem">Elemen</th>
                            <th>Lokasi
                            </th>
                            <th class="p_indi">Indikator
                            </th>
                            <th class="p_indi">Alasan Penilaian
                            </th>
                            <th>Perhitungan

                            </th>
                            <th>Skor

                            </th>
                            <th>BOBOT
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                6
                            </td>
                            <td class="text-start">Keberadaan sistem tata pamong yang menjamin penyelengg araan UPPS
                                yang baik.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Keberadaan sistem tata pamong yang menjamin penyelenggaraan UPPS yang memenuhi aspek- aspek:
                                <br> a) kredibel,
                                <br>b) transparan,
                                <br>c) akuntabel,
                                <br>d) bertanggung jawab, dan
                                <br>e) adil.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                7
                            </td>
                            <td class="text-start">Peran UPPS dalam kepemimpinan yang efektif
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td> Kepemimpinan UPPS memiliki karakteristik yang kuat dalam 3 kepemimpinan:
                                <br> a) kepemimpinan operasional,
                                <br>b) kepemimpinan organisasi,
                                <br>c) kepemimpinan publik
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                8
                            </td>
                            <td class="text-start">Sistem pengelolaan fungsional dan operasional UPPS
                                mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanaka n.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Sistem pengelolaan fungsional dan operasional UPPS berjalan
                                <br>a) sesuai dengan SOP,
                                <br>b) minimal didukung 6 dokumen yg memuat Struktur Organisasi, Tupoksi, Renop, Renstra,
                                Aturan
                                Kepegawaian, Dokumen Hasil Audit dari SPMI terhadap PS.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                9
                            </td>
                            <td class="text-start">Keterlaksan aan Sistem Penjaminan Mutu Internal (akademik dan non
                                akademik) .</td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Keterlaksanaan Sistem Penjaminan Mutu Internal (akademik dan
                                non akademik) di kriteria 2 sampai 9, yang dibuktikan dengan keberadaan 5 aspek:
                                <br>a) dokumen legal
                                pembentukan unsur pelaksana penjaminan mutu.
                                <br>b) ketersediaan dokumen SPMI: kebijakan SPMI, manual SPMI, standar SPMI, dan formulir
                                SPMI.
                                <br>c) terlaksananya siklus penjaminan mutu (siklus PPEPP)
                                <br>d) bukti sahih efektivitas pelaksanaan penjaminan mutu
                                <br>e) memiliki ekternal bechmarking dalam peningkatan mutu.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td class="text-start">Kerjasama pendidikan, penelitian, dan PkM yang relevan dengan program
                                studi
                                dan dikelola oleh UPPS dalam 3 tahun terakhir.</td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/205">LKPS 2.5</a></td>{{-- LOKASI --}}
                            <td>Jumlah kerjasama pendidikan, penelitian, dan PkM yang relevan dengan program studi dan
                                dikelola oleh UPPS dalam 3 tahun terakhir.
                                <br> Perhitungan skor sebagai berikut:
                                <br>RK = ((a x N1) + (b x N2) + (c x N3)) / NDTPS
                                <br> Bobot: a = 3 , b = 2 , c = 1 N1 = Jumlah kerjasama pendidikan.
                                <br>N2 = Jumlah kerjasama penelitian. N3 = Jumlah kerjasama PkM.
                                <br>NDTPS = Jumlah dosen tetap yang ditugaskan sebagai pengampu mata kuliah dengan bidang
                                keahlian yang sesuai dengan kompetensi inti program studi yang
                                diakreditasi.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                11
                            </td>
                            <td class="text-start">Kerjasama tingkat internasion al, nasional, wilayah/lok al yang
                                relevan dengan program studi dan dikelola oleh
                                UPPS dalam 3 tahun terakhir.</td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/205">LKPS 2.5</a></td>{{-- LOKASI --}}
                            <td>Kerjasama tingkat internasional, nasional, wilayah/lokal yang relevan dengan program studi
                                dan dikelola oleh UPPS dalam 3 tahun terakhir.
                                <br>R = ((a x NI) + (b x NN) + (c x N3)) / NDTPS
                                <br>Bobot: a = 3 , b = 2 , c = 1 NI = Jumlah kerjasama di tingkat internasional
                                <br> NN = Jumlah kerjasama tingkat nasional.
                                <br>NW = Jumlah kerjasama PkM tingkat wilayah/lokal NDTPS = Jumlah dosen tetap yang
                                ditugaskan
                                sebagai pengampu mata
                                kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti
                                program studi yang diakreditasi.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                12
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu (PPEPP)
                                berjalan dengan efektif</td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif apabila semua tahapan PPEPP
                                dijalankan dengan baik.</td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
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
                <form class="form-horizontal" action="/penilaian/302">

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
                <form class="form-horizontal" action="/penilaian/302">

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

@push('scripts')
    <script>
        $(".input_skor_trigg").click(function() {
            var text = $(this).data('skor');
            console.log($('#skor_penilaian').find('.modal-body input'));
            console.log(parseInt(text));
            $('#skor_penilaian').find('.modal-body input').attr('value', parseInt(text))
        });
        $(".input_alasan_trigg").click(function() {
            var text = $(this).data('penilaian');
            console.log($('#text_penilaian').find('.modal-body textarea'));
            $('#text_penilaian').find('.modal-body textarea').text($.trim(text))
        });
    </script>
@endpush
