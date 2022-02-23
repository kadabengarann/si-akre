@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>D. Suplemen PS Sarjana TI</p>
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">Suplemen PS Sarjana TI</h3>
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
                                89
                            </td>
                            <td class="text-start">Mata Kuliah
Inti/Khas Teknologi
Informasi
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Program Studi menguraikan
                            struktur kurikulum yang
                            memuat mata kuliah inti
                            Teknologi Informasi yang
                            mencakup:
                            <br>(1) Dasar-dasar Perangkat
                            Lunak: strategi
                            penyelesaian masalah,
                            praktek pemrograman
                            aplikasi modern,
                            pengembangan dan prinsip
                            algoritma dll.,
                            <br>(2) Manajemen informasi:
                            basis data tujuan khusus,
                            dan pengelolaan
                            lingkungan basis data dll.,
                            <br>(3) Teknologi Platform:
                            infrastruktur komputasi,
                            arsitektur dan organisasi,
                            lingkungan eksekusi
                            aplikasi, sistem operasi dll.,
                            <br>(4) Paradigma Sistem:
                            arsitektur sistem, analisis
                            kinerja dll.
                            <br>(5) Teknologi Sistem
                            Terintegrasi: pemrograman
                            integrative, komunikasi
                            antar sistem dll.
                            <br>(6) Jaringan: Dasar jaringan,
                            layanan jaringan aplikasi,
                            routing, switching, internet
                            dll.
                            <br>(7) Sistem Web dan Seluler
                            (Mobile): konsep aplikasi,
                            kerangka pengembangan,
                            software social dll.,
                            <br>(8) desain user experience:
                            Aspek domain aplikasi
                            Pengalaman pengguna
                            yang afektif Evaluasi yang
                            berpusat pada manusia
                            Teknologi pendukung dan
                            aksesibilitas Advokasi
                            pengguna,
                            <br>(9) Prinsip Keamanan Siber:
                            kriptografi, dasar-dasar 
                            Matrik Penilaian Akreditasi Program Studi Sarjana LAM-INFOKOM – 2021 66
                            malware dll.,
                            <br>(10) Praktek professional
                            global: tanggung jawab dan
                            isu-isu professional, prinsip
                            manajemen proyek,
                            manajemen sumber daya
                            dan tata ebagi TI, prinsip
                            sistem informasi, isu etika,
                            hukum, & privasi
                            <br>(11) proyek utama (major
                            projects): integrasi dan
                            penerapan pengetahuan
                            dan keterampilan yang
                            diperoleh dari tugas-tugas
                            mata kuliah sebelumnya.
                            <br>(12) Minimal 30 sks
                            dan dilengkapi RPS yang
                            memuat CPMK yang sesuai
                            dengan CPL
                            Skor 4 jika Program Studi
                            menguraikan struktur
                            kurikulum yang memuat
                            mata-kuliah inti Teknologi
                            Informasi yang mencakup
                            12 aspek. 
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
                                42
                            </td>{{-- SKOR --}}
                            <td>5</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                90
                            </td>
                            <td class="text-start">Mata kuliah Pilihan
Domain Spesifik
dan Lingkungan
Teknologi
Informasi
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Program Studi menguraikan
                            struktur kurikulum yang
                            memuat daftar mata kuliah
                            pilihan domain Teknologi
                            Informasi yang mencakup:
                            <br>(1) bidang kompetensi:
                            Aplikasi seluler (mobile),
                            Struktur
                            kurikulum
                            terkait daftar
                            mata kuliah
                            pilihan
                            memenuhi 2
                            aspek dan
                            Struktur
                            kurikulum
                            terkait daftar
                            mata kuliah
                            pilihan
                            memenuhi 2
                            aspek dan
                            Struktur
                            kurikulum
                            terkait daftar
                            mata kuliah
                            pilihan
                            memenuhi 2
                            aspek dan
                            Struktur
                            kurikulum
                            terkait daftar
                            mata kuliah
                            pilihan
                            memenuhi 2
                            aspek dan
                            Struktur
                            kurikulum
                            terkait daftar
                            mata kuliah
                            pilihan kurang
                            dari 18 sks
                            Matrik Penilaian Akreditasi Program Studi Sarjana LAM-INFOKOM – 2021 67
                            komputasi awan, Internet
                            of Things, skalabilitas dan
                            analitik data, sistem dan
                            layanan virtual, dan
                            Software Development and
                            Management, Tantangan
                            baru di Keamanan Siber.
                            <br>(2) Total 18 sks
                            dan dilengkapi RPS yang
                            memuat CPMK yang
                            relevan dengan CPL.
                            Skor 4 jika UPPS
                            menguraikan struktur
                            kurikulum yang memuat
                            daftar mata kuliah pilihan
                            domain Teknologi Informasi
                            yang mencakup 2 aspek. 
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
                                42
                            </td>{{-- SKOR --}}
                            <td>5</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                91
                            </td>
                            <td class="text-start">Mata kuliah terkait
Matematika dan
Ilmu Dasar yang
Relevan dengan
Bidang Teknologi
Informasi.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Program Studi menguraikan
                                struktur kurikulum yang
                                memuat mata-kuliah
                                terkait analisis atau metode
                                kuantitatif yang mencakup:
                                <br>(1) matematika diskrit,
                                aljabar linier, statistik dan
                                probabilitas, analitik data.
                                <br>(2) Minimal 4 sks
                                dan dilengkapi RPS yang
                                memuat CPMK yang
                                relevan dengan CPL
                                Skor 4 jika UPPS
                                menguraikan struktur
                                Struktur
                                kurikulum
                                terkait metode
                                atau analisis
                                kuantitatif
                                memenuhi 2
                                aspek dan
                                dilengkapi RPS
                                yang memuat
                                CPMK yang
                                relevan
                                dengan CPL
                                Struktur
                                kurikulum
                                terkait metode
                                atau analisis
                                kuantitatif
                                memenuhi 2
                                aspek dan
                                dilengkapi RPS
                                yang memuat
                                CPMK yang
                                sebagian besar
                                relevan
                                dengan CPL
                                Struktur
                                kurikulum
                                terkait metode
                                atau analisis
                                kuantitatif
                                memenuhi 2
                                aspek dan
                                dilengkapi RPS
                                yang memuat
                                CPMK yang
                                kurang relevan
                                dengan CPL
                                Struktur
                                kurikulum
                                terkait metode
                                atau analisis
                                kuantitatif
                                memenuhi 2
                                aspek dan
                                dilengkapi RPS
                                yang memuat
                                CPMK yang
                                tidak relevan
                                dengan CPL
                                Struktur
                                kurikulum
                                memuat
                                kurang dari 4
                                sks mata
                                kuliah terkait
                                metode atau
                                analisis
                                kuantitatif
                                Matrik Penilaian Akreditasi Program Studi Sarjana LAM-INFOKOM – 2021 68
                                kurikulum yang memuat
                                mata-kuliah terkait analisis
                                atau metode kuantitatif
                                yang mencakup 2 aspek. 
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
                                42
                            </td>{{-- SKOR --}}
                            <td>5</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                92
                            </td>
                            <td class="text-start">Proyek utama
(Capstone project)
yang Relevan
dengan Bidang
Teknologi
Informasi.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Program Studi menguraikan
                                pelaksanaan proyek utama
                                (Capstone Project) yang
                                merupakan integrasi dan
                                penerapan pengetahuan
                                dan keterampilan yang
                                diperoleh dari tugas-tugas
                                mata kuliah sebelumnya
                                yang mencakup:
                                <br>(1) Panduan pelaksanaan
                                <br>(2) Daftar mata kuliah
                                terkait proyek utama
                                <br>(3) Standar minimal kualitas
                                aplikasi dari hasil proyek.
                                Proyek ini bisa merupakan
                                bagian dari kurikulum
                                reguler maupun kurikulum
                                Merdeka Belajar-Kampus
                                Merdeka (MBKM)
                                Skor 4 jika Program Studi
                                menguraikan pelaksanaan
                                proyek utama (capstone
                                project) yang merupakan
                                integrasi dan penerapan
                                pengetahuan dan
                                keterampilan yang
                                diperoleh dari tugas-tugas
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi 3
                                aspek
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi
                                aspek 1,2 dan
                                kualitas
                                aplikasi cukup
                                memenuhi
                                standar
                                minimal
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi
                                aspek 1,2 dan
                                kualitas
                                aplikasi kurang
                                memenuhi
                                standar
                                minimal
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi
                                aspek 1 dan 2.
                                Tidak ada
                                aplikasi yang
                                dihasilkan
                                Tidak ada
                                bukti
                                Matrik Penilaian Akreditasi Program Studi Sarjana LAM-INFOKOM – 2021 69
                                mata kuliah sebelumnya
                                yang mencakup 3 aspek. 
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
                                42
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                93
                            </td>
                            <td class="text-start">Pengembangan
Teknologi
Informasi Dalam
Rangka Pengabdian
kepada Masyarakat
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Program Studi menguraikan
                                upaya dalam rangka
                                pengembangan aplikasi
                                Teknologi Informasi yang
                                digunakan di masyarakat
                                dan pemangku kepentingan
                                pada suatu domain
                                (domain-domainnya:
                                kesehatan, keuangan, dll.)
                                yang mencakup aspek
                                <br>(1) Kebijakan berupa
                                pedoman pelaksanaan
                                upaya
                                <br>(2) Pelaksanaan upayaupaya
                                <br>(3) Kesesuaian upaya
                                dengan peta jalan PKM
                                dan/atau peta jalan
                                penelitian
                                <br>(4) Sumber pendanaan
                                dan efektivitas dan
                                keberlanjutan upaya yang
                                telah dilakukan.
                                Skor 4 jika Program Studi
                                menguraikan upaya-upaya
                                dalam rangka pengembangan aplikasi Teknologi
                                Informasi yang digunakan
                                di masyarakat dan
                                pemangku kepentingan
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi 4
                                aspek, efektif
                                dan ada
                                keberlanjutan
                                upaya yang
                                telah
                                dilakukan
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi 4
                                aspek, cukup
                                efektif dan ada
                                keberlanjutan
                                upaya yang
                                telah
                                dilakukan
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi
                                aspek 1,2,4
                                dan kurang
                                efektif dan
                                tidak ada
                                keberlanjutan
                                upaya yang
                                telah
                                dilakukan
                                Ada bukti
                                pelaksanaan
                                yang
                                memenuhi
                                kurang dari 3
                                aspek,
                                Tidak ada skor
                                0
                                Matrik Penilaian Akreditasi Program Studi Sarjana LAM-INFOKOM – 2021 70
                                pada suatu domain yang
                                mencakup 4 aspek.
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
                                42
                            </td>{{-- SKOR --}}
                            <td>5</td>{{-- BOBOT --}}
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
