@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.7. PENELITIAN</p>
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">PENELITIAN</h3>
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
                                53
                            </td>
                            <td class="text-start">Keberadaan lembaga  penelitian, peta jalan  penelitian dan standar  penelitian.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Keberadaan lembaga  
                                <br>penelitian formal: 
                                <br>a) Memiliki lembaga formal  di tingkat PT dan/atau  
                                <br>UPPS, skor antara 1-4 
                                <br>b) memiliki peta jalan  
                                <br>penelitian, skor antara 1-4 c) memiliki standar  
                                <br>penelitian, skor antara 1-4 
                                <br>Skor 
                                <br>4 : sangat tersistem (untuk  a), sangat jelas (untuk b)  , atau sangat lengkap  
                                <br>(untuk c),  
                                <br>3 : tersistem (untuk a), jelas  (untuk b), atau lengkap  (untuk c), 
                                <br>2 : cukup tersistem (untuk  a), cukup jelas (untuk b),  atau cukup lengkap (untuk  c) 
                                <br>1 : kurang tersistem (untuk  a), kurang jelas (untuk b),  atau kurang lengkap (untuk  c) 
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">Skor = (skor a+ skor b + skor  c)/3
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                54
                            </td>
                            <td class="text-start">Perencanaan, pelaksanaan, pemantauan, dan pelaporan penelitian
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Dokumen penelitian yang  lengkap berisi unsur:  
                                <br>a) Perencanaan  
                                <br>b) Pelaksanaan,  
                                <br>c) Pemantauan dan  
                                <br>d) Pelaporan. 
                                <br>Skor a),b),c) d) sangat  
                                <br>lengkap =4, lengkap = 3,  cukup = 2, kurang = 1, tidak  ada = 0. 
                                <br>
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">Skor = rerata dari skor  
                                a),b),c) dan d)                                
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                55
                            </td>
                            <td class="text-start">Monitoring dan evaluasi  penelitian dosen yang  melibatkan reviewer  yang kompeten pada  bidang infokom.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Monitoring dan evaluasi kegiatan penelitian melibatkan reviewer yang kompeten pada bidang Infokom. 
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">Skor = (skor A + Skor B + Skor C + Skor D)/4                                
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                56
                            </td>
                            <td class="text-start">A. Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen
                                <br>B. Penelitian Dosen
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/701">LKPS 7.1</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Cara memberi skor dilakukan dengan menghitung sebagai berikut:
                                <br>nisbah (%) jumlah mahasiswa TA yang terlibat dalam penelitian dosen terhadap jumlah mahasiswa TA
                                Jika nisbah ≥ 10%, maka
                                skor = 4, jika nisbah = 0%,
                                maka skor = 0, diantaranya
                                dihitung dengan rumus.
                                <br>B.Penelitian dosen pada TS
                                sd TS-2
                                <br>
                                <br>PD: jumlah penelitian
                                dosen DTPS pada TS sd TS2/ jumlah DTPS
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">Skor=4-4*(10%-nisbah)/10%
                                <br>Skor=4-4*(3-PD)/3
                                <br>Nilai akhir = (skor A+2* skor B)/3                                
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>3</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                57
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif apabila semua tahapan PPEPP dijalankan dengan baik.                                
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                <i class="edit_mark fas fa-pen"></i>
                                42 </td>{{-- SKOR --}}
                            <td>4</td>{{-- BOBOT --}}
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
                <form class="form-horizontal" action="/penilaian/101">

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
                <form class="form-horizontal" action="/penilaian/305">

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
