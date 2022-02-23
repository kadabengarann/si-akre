@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>KEUANGAN, SARANA DAN PRASARANA</p>
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">KEUANGAN, SARANA DAN PRASARANA</h3>
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
                                31
                            </td>
                            <td class="text-start">Pengelolaan keuangan UPPS dan Program Studi
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Pengelolaan keuangan UPPS mencakup aspek (a) perencanaan, (b) pengalokasian, (c) realisasi,
                                dan (d) pertanggung-jawaban biaya operasional tridharma serta investasi
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                32
                            </td>
                            <td class="text-start">Perolehan dana dari mahasiswa
                            </td>{{-- ELEMEN --}}
                            <td> <a href="/lkps/view/501"> LK PS 5.1</a>
                            </td>{{-- LOKASI --}}
                            <td>Perhitungan nisbah (%) perolehan dana dari mahasiswa terhadap total dana penerimaan.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                33
                            </td>
                            <td class="text-start">Aksesibilitas data dalam sistem informasi
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/502">LK PS 5.2</a>
                            </td>{{-- LOKASI --}}
                            <td>Aksesibilitas data dalam sistem informasi. Skor butir ini didasarkan pada hasil penilaian
                                11 jenis data. Untuk setiap jenis data, skor didasarkan atas aturan berikut:
                                <br>Skor = 1: Data ditangani secara manual
                                <br>2: Data itangani dengan komputer tanpa jaringan
                                <br>3: Data ditangani dengan komputer, serta dapat diakses melalui jaringan lokal (LAN)
                                <br>4: Data ditangani dengan komputer, serta dapat diakses melalui jaringan luas (WAN)
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                34
                            </td>
                            <td class="text-start">Penggunaan dan ketersediaan bandwidth.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Penggunaan dan ketersediaan bandwidth. N: Kapasitas bandwidth untuk tiap mahasiswa.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                35
                            </td>
                            <td class="text-start">Pendayagunaan sarana utama laboratorium, beserta kelayakan penggunaan
                                dengan mempertimbangkan jumlah mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/503">LK PS 5.3</a>
                            </td>{{-- LOKASI --}}
                            <td>Pendayagunaan sarana utama laboratorium, beserta kelayakan penggunaan dengan
                                mempertimbangkan jumlah mahasiswa.
                                <br>NK = skor untuk ketersedian sarana utama
                                <br>NT = skor untuk keterawatan
                                <br>NL = skor untuk kelayakan Skor
                                <br>4: sangat memadai (untuk NK), atau sangat terawat (untuk NT), atau sangat layak (NL).
                                <br>3 : memadai (untuk NK) atau terawat (untuk NT), atau layak (untuk NL).
                                <br>2: cukup (untuk NK,NT,NL)
                                <br>1: untuk kurang (untuk NK,NT,NL).
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                36
                            </td>
                            <td class="text-start">Kecukupan, Aksesibilitas dan Mutu Sarana, Prasarana
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/504">LK PS 5.4</a>
                            </td>{{-- LOKASI --}}
                            <td>Ketersediaan dan kelengkapan jenis prasarana, sarana serta dana yang memungkinkan
                                terciptanya interaksi akademik antara sivitas akademika (misalnya tempat olah raga, ruang
                                bersama, ruang himpunan mahasiswa, poliklinik, ruang dosen , kantor,ruang kelas, ruang
                                laboratorium, ruang perpustakaan )
                                <br>
                                <br>NM = skor untuk
                                <br>kepemilikan
                                <br>NP = skor untuk
                                <br>kelengkapan
                                <br>ND = skor untuk
                                <br>pendanaan
                                <br>
                                <br>Skor
                                <br>4 : milik sendiri (untuk NM), atau sangat lengkap (untuk NP), atau sangat layak ( untuk
                                ND).
                                <br>3 : lengkap (unt NP), atau memadai (untuk ND),
                                <br>2: cukup (untuk NK,NM,NL), sewa (untuk NM)
                                <br>1: kurang (untuk NK,NM,NL) .
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                37
                            </td>
                            <td class="text-start">Fasilitas Laboratorium untuk keahlian Infokom.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/505">LK PS 5.5</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Kesesuaian laboratorium dengan bidang peminatan/ keahlian Infokom. Nisbah kesesuaian 100 %
                                maka skor = 4, nisbah = 0% maka skor = 0.
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td>2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td rowspan="3">
                                38
                            </td>
                            <td class="text-start">A. Sumber pustaka berupa jurnal Internasional bidang Infokom
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/506">LK PS 5.6</a>
                            </td>{{-- LOKASI --}}
                            <td>Bahan pustaka berupa jurnal ilmiah bidang ilmu IT internasional yang dilanggan (Jint).
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td rowspan="3">3</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Sumber pustaka berupa jurnal ilmiah nasional bidang ilmu infokom
                                yang terakreditasi Sinta.
                            </td>{{-- ELEMEN --}}
                            <td>
                            </td>{{-- LOKASI --}}
                            <td>Bahan pustaka berupa jurnal ilmiah nasional bidang ilmu infokom yang terakreditasi Sinta
                                yang dilanggan.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                        </tr>
                        <tr>
                            <td class="text-start">C. Sumber pustaka berupa buku teks dan lain-lain dalam bidang
                                Infokom.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/507">LK PS 5.7</a>
                            </td>{{-- LOKASI --}}
                            <td>Bahan pustaka berupa buku teks (bukan buku kopian) dan lain-lain dalam bidang infokom
                                (bukan buku praktis), termasuk e-book.
                                <br>
                                <br>J = jumlah judul buku yang berbeda (bukan jumlah exemplar /copy)
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                        </tr>
                        <tr>
                            <td>
                                39
                            </td>
                            <td class="text-start">Lisensi/Open-source software.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/509">LK PS 5.9</a>
                            </td>{{-- LOKASI --}}
                            <td>"Keberadaan lisensi software/ Open-source yang digunakan di laboratorium dan keperluan di
                                lingkungan Program Studi.
                                <br>
                                <br>N:Nisbah (%) jumlah lisensi, atau open source, atau campus agreement terhadap jumlah
                                software yang digunakan untuk penelitian, administrasi, dan PBM;"
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42 </td>{{-- SKOR --}}
                            <td>1</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                40
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif apabila semua tahapan PPEPP
                                dijalankan dengan baik.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
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
