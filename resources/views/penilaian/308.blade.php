@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.8. PENGABDIAN KEPADA MASYARAKAT</p>
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">PENGABDIAN KEPADA MASYARAKAT</h3>
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
                                58
                            </td>
                            <td class="text-start">"Keberadaan lembaga pengabdian kepada masyarakat
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Perguruan Tinggi memiliki unit Lembaga Pengabdian kepada Masyarakat yang mengelola kegiatan pengabdian kepada masyarakat.
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
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                59
                            </td>
                            <td class="text-start">Perencanaan, pelaksanaan, pemantauan, dan pelaporan PkM.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Dokumen PkM yang lengkap
                                berisi unsur:
                                <br>a) Perencanaan
                                <br>b) Pelaksanaan,
                                <br>c) Pemantauan dan
                                <br>d) Pelaporan
                                Skor a),b),c) d) sangat
                                lengkap =4, lengkap = 3,
                                cukup = 2, kurang = 1, tidak
                                ada = 0.
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
                                60
                            </td>
                            <td class="text-start">A. Pelaksanaan PkM
                                Dosen dan Mahasiswa
                                <br>B. Pelaksanaan PkM
                                Dosen, pada TS sd TS -2                                
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/801">LKPS 8.1</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">A. Nisbah PkM yg
                                melibatkan mahasiswa
                                (tertulis dalam proposal).
                                <br>B. Jumlah PkM dosen
                                PkMD= jumlah dosen DTPS
                                yang melaksanakan PkM /
                                jumlah dosen DTPS                                
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">Nilai = (skor A+ 2 skor B)/3
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                61
                            </td>
                            <td class="text-start">nisbah (%) jumlah
                                mahasiswa yg terlibat
                                dalam kegiatan PkM thd
                                jumlah mahasiswa aktif
                                pada TS.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/801">LKPS 8.1</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Jika nisbah = 2,5% maka
                                skor 4. Jika nisbah = 0%
                                maka skor 0.
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">Skor=4-4*(2.5%-nisbah)/2.5%                                
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>3</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                62
                            </td>
                            <td class="text-start">Jumlah kegiatan
                                pengabdian kepada
                                masyarakat (PkM)
                                berdasarkan sumber
                                dana PkM.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/801">LKPS 8.1</a>
                            </td>{{-- LOKASI --}}
                            <td>Penilaian dilakukan dengan
                                penghitungan berikut:
                                <br>NK = (4*na+2*nb+nc)/n ,
                                dimana na = Jumlah
                                kegiatan PkM dengan biaya
                                luar negeri yang sesuai
                                bidang ilmu.
                                <br>nb = Jumlah kegiatan PkM
                                dengan biaya luar PT yang
                                sesuai bidang ilmu,
                                <br>nc = Jumlah kegiatan PkM
                                dengan biaya dari PT/sendiri
                                yang sesuai bidang ilmu,
                                <br>n = Jumlah DTPS                              
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
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                63
                            </td>
                            <td class="text-start">Monitoring dan evaluasi
                                pengabdian kepada
                                masyarakat oleh dosen
                                melibatkan reviewer
                                yang memenuhi syarat
                                sebagai reviewer
                                pengabdian kepada
                                masyarakat bidang
                                INFOKOM. Reviewer
                                minimal ditetapkan oleh
                                pimpinan institusi.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Kegiatan PKM di-review
                                oleh reviewer yang
                                kompeten pada bidangnya.
                                Hal ini ditunjukkan oleh:
                                <br>a) Ada bukti monev
                                <br>b) Melibatkan reviewer
                                <br>c) Reviewer memenuhi
                                syarat sebagai reviewer
                                bidang INFOKOM
                                
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                64
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu
                                (PPEPP) berjalan dengan
                                efektif
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/906">LKPS 9.6</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Siklus Penjaminan Mutu
                                (PPEPP) berjalan dengan
                                efektif apabila semua
                                tahapan PPEPP dijalankan
                                dengan baik.
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
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
