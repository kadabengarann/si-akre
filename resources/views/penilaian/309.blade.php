@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.9. Luaran dan Capaian Tridharma</p>
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
                <h3 class="text-center card-title" style="float: none; font-weight:500"></h3>
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
                                65
                            </td>
                            <td class="text-start">Pemenuhan capaian pembelajaran lulusan
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Analisis pemenuhan capaian pembelajaran lulusan yang dilakukan oleh UPPS dan program studi, mencakup aspek: a) keserbacakupan, dengan skor antara 0-4 b) kedalaman, dengan skor antara 0-4 d) kebermanfaatan, dengan skor antara 0-4
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                66
                            </td>
                            <td class="text-start">Rata-rata Indeks Prestasi Kumulatif (RIPK) selama tiga tahun terakhir
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/902">LKPS 9.2</a></td>{{-- LOKASI --}}
                            <td>A. Jika RIPK >=3.15 maka skor 4. Jika RIPK < 2.0 maka skor = 1.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                67
                            </td>
                            <td class="text-start">Prestasi mahasiswa dalam mendapatkan penghargaan hibah kompetitif di Bidang Infokom tingkat Nasional (mis. Program Kreativitas Mahasiswa, PIMNAS, dan lain-lain)
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/903">LK PS 9.3</a></td>{{-- LOKASI --}}
                            <td>saat TS 1000-1500 maka n = 3 Untuk Program Studi dengan jumlah mahasiswa aktif saat TS > 1500 maka n = 4 Adapun yg dihitung adalah banyaknya prestasi mahasiswa (perorangan maupun kelompok) sebagai 
juara 1, 2, atau 3 dalam 3 
tahun terakhir dalam 
mendapatkan penghargaan 
hibah kompetitif tingkat 
Nasional di Bidang Infokom 
yang diikuti. 
Skor = 4 jika ada bukti 
penghargaan hibah 
kompetitif nasional >= 6n, 
selain itu dihitung dengan 
rumus, dengan batas minimal 
2n (skor =2).
p = jumlah bukti penghargaan 
hibah kompetitif bidang 
infokom.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                68
                            </td>
                            <td class="text-start">Prestasi mahasiswa dalam mendapatkan penghargaan hibah kompetitif tingkat Internasional
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/903">LK PS 9.3</a></td>{{-- LOKASI --}}
                            <td>mhs aktif saat ini 1000-1500 maka n = 3
Untuk Program Studi dengan jumlah mhs aktif saat ini > 1500 maka n = 4
Adapun yg dihitung adalah banyaknya prestasi mhs (perorangan maupun 
kelompok) sebagai juara 1, 2, atau 3 dalam 3 tahun terakhir dalam mendapatkan 
penghargaan hibah kompetitif Internasional. Skor = 4 jika ada bukti 
penghargaan hibah kompetitif Internasional 
sebanyak >= 2n, selain itu dihitung dengan rumus, dengan batas minimal 0 (skor 
=2).
p = jumlah bukti penghargaan 
hibah kompetitif 
Internasional bidang infokom.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                69
                            </td>
                            <td class="text-start">Prestasi mahasiswa dalam lomba tingkat Nasional/Inter nasional Urutan bobot: - Nalar di bidang Infokom - Nalar di bidang nonInfokom - Selain Nalar (olahraga, seni, dsb).
- kesetaraan 1 internasional = 3 nasional
Penilaian didasarkan atas jumlah penghargaan dibagi jumlah 
mhs.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/905">LK PS 9.5</a></td>{{-- LOKASI --}}
                            <td>Untuk Program Studi dengan jumlah mhs aktif saat ini < 500 maka n = 0.5 Untuk Program Studi dengan jumlah mhs aktif saat ini 500- 1000 maka n = 1 Untuk Program Studi dengan jumlah mhs aktif saat ini 1000-1500 maka n = 1.5 Untuk Program Studi dengan jumlah mhs aktif saat ini > 1500 maka n = 2 Yang dihitung adalah banyaknya prestasi mhs (perorangan maupun kelompok) sebagai juara 1, 2, 
                           atau 3 dalam 3 tahun terakhir 
                           dalam lomba internasional.
                           Skor = 4 jika ada bukti 
                           penghargaan prestasi mhs di 
                           bidang Infokom tingkat 
                           Nasional sebanyak >=2n buah 
                           prestasi. Selain itu dihitung 
                           dengan rumus, dengan batas 
                           minimal n (skor =2).
                           p = jumlah bukti penghargaan 
                           prestasi mahasiswa bidang nfokom.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                70
                            </td>
                            <td class="text-start">Persentase kelulusan tepat waktu (KTW)
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/906">LK PS 9.6</a></td>{{-- LOKASI --}}
                            <td>Untuk prodi yang beroperasi kurang dari 4 tahun dan belum mempunyai lulusan maka nilai = 2. Selain itu mengikuti rumus berikut ini. Jika kelulusan tepat waktu >= 60% skor 4. Jika 0% skor 0.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                71
                            </td>
                            <td class="text-start">Persentase mahasiswa yang tidak berhasil menyelesaikan studi sampai batas akhir studi (TBMS)
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/906">LK PS 9.6</a></td>{{-- LOKASI --}}
                            <td>Persentase mahasiswa TBMS <= 10% skor 4. Jika lebih dari 40% skor 0.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                72
                            </td>
                            <td class="text-start">Pelaksanaan pelacakan dan perekaman data lulusan dengan memanfaatkan SI dan TI.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Untuk prodi yang beroperasi kurang dari 4 tahun dan belum mempunyai lulusan maka nilai = 2. Selain itu mengikuti rumus berikut ini. Pelaksanaan pelacakan memenuhi 4 aspek: a) dilakukan secara periodik b)memanfaatkan sistem dan teknologi informasi, c) ada analisis hasil pelacakan dan d) ada tindak lanjutnya. Skor 4 memenuhi 4 aspek tersebut.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                73
                            </td>
                            <td class="text-start">Penggunaan hasil pelacakan untuk perbaikan: a) proses pembelajaran, b) penggalangan dana, c) informasi pekerjaan, dan d) membangun jejaring.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Ada bukti penggunaan hasil pelacakan untuk 4 macam perbaikan: a) proses pembelajaran, b) penggalangan dana, c) informasi pekerjaan, dan d) membangun jejaring. Skor 4 jika memenuhi 4 macam perbaikan p : jumlah macam perbaikan
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                74
                            </td>
                            <td class="text-start">Kepuasaan pengguna lulusan (jumlah responden yg memberi penilaian harus memenuhi jumlah minimal tertentu).
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/910">LK PS 9.10</a></td>{{-- LOKASI --}}
                            <td>jumlah lulusan dalam 3 th terakhir 200 - 300 --> jumlah responden minimal 10 perusahaan / pengguna lulusan Untuk Program Studi dengan jumlah lulusan dalam 3 th terakhir > 300 --> jumlah responden minimal 15 perusahaan / pengguna lulusan 

<BR>Ada 7 jenis kompetensi yg 
dinilai 
<BR>a) kerjasama tim, 
<BR>b) keahlian di Bidang 
Infokom, 
<BR>c) kemampuan bahasa inggris
<BR>d) komunikasi, 
<br>e) pengembangan diri,
<br>f) kepemimpinan 
<br>g) etos kerja
=banyaknya responden yang 
terlibat
<br>if k = nr / rm > 1 -> k = 1

<br>Skor akhir =
pa = total persentase tingkat 
kepuasan pengguna yang 
menyatakan sangat baik,
<br>pb = total persentase baik
<br>pc = total persentase cukup
<br>pd = total persentase kurang 
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                75
                            </td>
                            <td class="text-start">RMT (Rata-rata masa tunggu lulusan untuk bekerja). Jika Program Studi kedinasan yang lulusannya semua sudah bekerja saat kuliah, masa tunggu diisi nol. 
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/911">LKPS 9.11</a></td>{{-- LOKASI --}}
                            <td>Untuk prodi yang beroperasi kurang dari 4 tahun dan belum mempunyai lulusan maka nilai = 2. Bagi Prodi kedinasan skor = 4. Selain itu mengikuti rumus berikut ini. skor 4 jika RMT <= 1 bulan , skor 2 jika RMT >=18 bulan.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                76
                            </td>
                            <td class="text-start">Persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan. Kisaran kesesuaian 0- 100%.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/912">LKPS 9.12</a></td>{{-- LOKASI --}}
                            <td>PBS = persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan. Jika PBS ≥ 70%, maka skor = 4. Jika PBS < 70% dan >=20%, maka skor sesuai rumus, dan jika PBS < 20% maka skor = 2.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                77
                            </td>
                            <td class="text-start">Jumlah lulusan yang bekerja di badan usaha tingkat multinasional/ internasional, nasional/ berwirausaha yang berizin/ badan usaha tingkat wilayah/ lokal/ berwirausaha tidak berizin (3 tahun terakhir). pa = persentase jumlah lulusan yg di badan usaha / instansi tingkat multinasional/ internasional, pb = persentase jumlah lulusan yg di badan usaha / instansi tingkat nasional (dalam negeri) pc = persentase jumlah lulusan yg berwirausaha
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/912">LKPS 9.12</a></td>{{-- LOKASI --}}
                            <td>skor 4 jika lulusan yg bekerja di badan usaha di tingkat internasional min 1% atau nasional+wirausaha 10%. Skor 2 jika tdk ada lulusan yg bekerja atau wirausaha.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                78
                            </td>
                            <td class="text-start">Penjaringan umpan balik untuk peningkatan mutu program studi. Ada sumber umpan balik, cara memperoleh umpan balik, tindak lanjut dari umpan balik, waktu, bukti, keterangan. Ada dokumen resmi umpan balik.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/914">LKPS 9.14</a></td>{{-- LOKASI --}}
                            <td>Umpan balik harus memenuhi aspek-aspek sebagai berikut : A. dari alumni B. dari pengguna alumni C. menggunakan sistem informasi, D. ditindaklanjuti secara berkelanjutan. --}}
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                79
                            </td>
                            <td class="text-start">Persentase jumlah penelitian TA mahasiswa di Program Studi yang diadopsi dan dimanfaatkan langsung oleh masyarakat
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/915">LKPS 9.15</a></td>{{-- LOKASI --}}
                            <td>Persentase jumlah penelitian TA mahasiswa di Program Studi yang berpotensi untuk diadopsi dan dimanfaatkan langsung oleh masyarakat. 
<br>skor=4 Jika 50% penelitian TA mahasiswa berpotensi untuk diadopsi dan dimanfaatkan langsung oleh masyarakat.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                80
                            </td>
                            <td class="text-start">Hasil skripsi/ TA mahasiswa yang relevan dengan CPL Program Studi.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/915">LKPS 9.15</a></td>{{-- LOKASI --}}
                            <td>Hasil skripsi/ TA mahasiswa. Persentase karya skripsi/ TA mahasiswa yang relevan dengan CPL Program Studi. 
Skor 4 jika 75% TA relevan dengan CPL Program Studi
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                81
                            </td>
                            <td class="text-start">Sertifikasi profesi Bidang Infokom untuk lulusan.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/918">LKPS 9.18</a></td>{{-- LOKASI --}}
                            <td>memiliki minimal satu buah sertifikasi profesi Bidang Infokom terhadap jumlah lulusan.Jika nisbah >= 10%, maka 
skor 4. Jika nisbah = 0% skor 0. 
Asesor dapat memberikan tambahan atau pengurangan skor maksimum sebesar 1 
dengan memperhatikan tingkat kredibilitas, 
kualifikasi, dan sebagainya dari sertifikat dan lembaga penerbit sertifikat. 
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                82
                            </td>
                            <td class="text-start">Karya-karya mahasiswa mandiri atau bersama dosen yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/919">LKPS 9.19</a></td>{{-- LOKASI --}}
                            <td>Dalam 3 tahun terakhir, 
<br>a = jumlah karya buku Infokom ber ISBN yg ditulis mahasiswa/ dosen DTPS. 
<br>b = jumlah karya Hak Cipta yang telah keluar sertifikatnya, 
<br>c = jumlah paten yang telah mendapat nomor pendaftaran, 
<br>d = jumlah paten yang telah disetujui (granted). 
<br>n = jumlah dosen DTPS, NK = (3*a + 6*b + 10*c + 12*d)/n Jika NK ≥ 3, maka skor = 4 

<br>Jika NK = 0, maka skor = 0 Lainnya dihitung dengan rumus.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                83
                            </td>
                            <td class="text-start">Keterkaitan peta jalan penelitian lembaga dengan hasil penelitian DTPS/ mahasiswa yang telah dilaksanakan
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Keterkaitan peta jalan penelitian lembaga dengan hasil penelitian DTPS/ mahasiswa yang telah dilaksanakan.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                84
                            </td>
                            <td class="text-start">Hasil pengabdian kepada masyarakat yang relevan dengan bidang infokom.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/801">LKPS 8.1</a></td>{{-- LOKASI --}}
                            <td>Persentase (P) jumlah PkM yang relevan dengan infokom dibandingkan dengan seluruh PkM.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                85
                            </td>
                            <td class="text-start">Jumlah prestasi mahasiswa dalam mendapatkan penghargaan hibah kegiatan Program Kreativitas Mahasiswa (PKM) dari tingkat lokal, nasional, internasional. Catatan: selama tiga tahun terakhir
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/923">LKPS 9.23</a></td>{{-- LOKASI --}}
                            <td>Jumlah prestasi dalam mendapatkan penghargaan hibah kegiatan Program Kreativitas Mahasiswa (PKM) dari tingkat lokal, nasional, internasional. Catatan: selama tiga tahun terakhir. 
<br>a = banyaknya hibah kegiatan PkM yang berasal dari institusi / lembaga internasional. 
<br>b = banyaknya hibah kegiatan PkM yang berasal dari institusi / lembaga nasional 
<br>c = banyaknya hibah kegiatan
PKM yang berasal dari 
institusi / lembaga lokal (di 
luar PT).
<br>d = banyaknya hibah kegiatan 
PkM yang berasal dari PT 
sendiri
<br>n = Jumlah DTPS dengan 
bidang sesuai Program Studi

<br>NK(%) = (4a + 3b + 2c + 1d) / 
3n

<br>Jika NK >= 75% maka Skor =4
<br>Jika NK = 0 maka Skor = 0. 
Lainnya dihitung dengan 
rumus.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                86
                            </td>
                            <td class="text-start">Prestasi mahasiswa dalam mendapatkan penghargaan hibah pendanaan kegiatan pengabdian kepada masyarakat dari tingkat lokal, dan nasional. 
Catatan: selama tiga tahun terakhir. a,b,c,d dalam jutaan rupiah, dalam 3 tahun terakhir
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/923">LKPS 9.23</a></td>{{-- LOKASI --}}
                            <td>Jumlah dana yang diperoleh dari kegiatan pengabdian kepada masyarakat dengan kriteria sebagai berikut: a = jumlah dana hibah kegiatan PkM dengan pendanaan dari institusi / lembaga internasional. b = jumlah dana hibah kegiatan PkM dengan pendanaan dari institusi / lembaga nasional c = jumlah dana hibah kegiatan PkM dengan pendanaan dari institusi /  lembaga lokal.
d = jumlah dana hibah kegiatan PkM dengan pendanaan dari PT sendiri
n = Jumlah DTPS
NK = (4a + 3b + 2c + 1d) / 3n
Jika NK >= 6 maka skor = 4
Jika NK = 0 maka skor =0. 
Lainnya dihitung dengan 
rumus.
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                87
                            </td>
                            <td class="text-start">Jumlah mitra dari institusi lain dalam kegiatan PkM dan tingkat kepuasan serta kebermanfaata n kegiatannya bagi mitra.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/801">LKPS 8.1</a></td>{{-- LOKASI --}}
                            <td>Penilaian kemitraan kegiatan PkM dilihat dari unsur: 
<br>a) banyaknya mitra dari institusi lain, 
<br>b) kebermanfaatan kerjasama bagi mitra 
<br>c) tingkat kepuasan mitra Skor untuk masing-masing unsur 

<br>Skor akhir = rerata dari skor a,b,c,d. 
<br>Skor a) 4 = sangat banyak, 3 = banyak Skor 
<br>b) 4 = sangat bermanfaat, 3 = bermanfaat , 2 = cukup, 1 = kurang 
<br>Skor c) 4 = sangat puas, 3 = puas. 
<br>skor 2 = cukup, 1 = kuran
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
                            <td>8</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                88
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
                                42
                            </td>{{-- SKOR --}}
                            <td>8</td>{{-- BOBOT --}}
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
