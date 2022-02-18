@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>PENDIDIKAN</p>
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">PENDIDIKAN</h3>
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
                            <td rowspan="5">
                                41
                            </td>
                            <td class="text-start">A. Perumusan kurikulum Program Studi
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Kelengkapan perumusan kurikulum berdasarkan KKNI/OBE/SKKNI, dan dilengkapi dengan Deskripsi
                                matakuliah, Silabus, RPS, CP.
                                <br>
                                <br>Skor 4 jika, kurikulum memuat 5 parameter:
                                <br>a) mengacu pada naskah akademik KKNI/OBE/SKKNI.
                                <br>b) sejalan dengan visi misi tujuan PS,
                                <br>c) memuat keterampilan TI yang relevan,
                                <br>d) ditunjang dengan matakuliah sesuai dengan keterampilan, sikap dan pengetahuan yang
                                disebutkan.
                                <br>e) ditunjang dengan matakuliah yang terkini
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
                            <td rowspan="5">5</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Substansi Mata kuliah Bidang Infokom yang mengacu pada capaian
                                pembelajaran (CPL)
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Muatan MK sesuai bidang ilmu, dan menggunakan bahan ajar (metode, referensi) terkini.
                                <br>
                                <br>S = kesesuaian matakuliah dengan bidang ilmu infokom
                                <br>4 : bila mata kuliah (MK) sangat sesuai
                                <br>3 : bila MK sesuai bidang ilmu
                                <br>2 : bila MK cukup sesuai
                                <br>1 : bila MK kurang sesuai dengan bidang Infokom.
                                <br>
                                <br>Isikan K = kenikian bahan ajar
                                <br>4 : terkini
                                <br>3 : cukup terkini
                                <br>2 : tidak terkini
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
                            <td class="text-start">C. Ketersediaan dan kelengkapan dokumen Rencana Pembelajaran Semester
                                (RPS)
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/603">LK PS 6.3</a>
                            </td>{{-- LOKASI --}}
                            <td>RPS memuat 9 aspek berikut:
                                <br>a. nama Program Studi, nama dan kode mata kuliah, semester, sks, nama Dosen pengampu;
                                <br>b. capaian Pembelajaran lulusan yang dibebankan pada mata kuliah;
                                <br>c. kemampuan akhir yang direncanakan pada tiap tahap Pembelajaran untuk memenuhi capaian
                                Pembelajaran lulusan;
                                <br>d. bahan kajian yang terkait dengan kemampuan yang akan dicapai;
                                <br>e. metode Pembelajaran;
                                <br>f. waktu yang disediakan untuk mencapai kemampuan pada tiap tahap Pembelajaran;
                                <br>g. pengalaman belajar mahasiswa yang diwujudkan dalam deskripsi tugas yang harus
                                dikerjakan oleh mahasiswa selama satu semester;
                                <br>h. kriteria, indikator, dan bobot penilaian; dan
                                <br>i. daftar referensi yang digunakan.
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
                            <td class="text-start">D. Penyusunan materi kuliah.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Materi kuliah disusun dengan memperhatikan aspek berikut:
                                <br>a) capaian pembelajaran lulusan (CPL),
                                <br>b) disusun oleh kelompok dosen
                                <br>c) memperhatikan keunikan dan keunggulan program studi.
                                <br>d) masukan dari pemangku kepentingan eksternal
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
                            <td class="text-start">E. Peninjauan Kurikulum.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Pelaksanaan peninjauan kurikulum sudah memasukkan 5 aspek berikut :
                                <br>a) keterlibatan pihak external dan internal,
                                <br>b) kesesuaian dengan visi keilmuan program studi,
                                <br>c) memperhitungkan CP,
                                <br>d) kesesuaian dengan kemajuan Iptek Bidang Infokom,
                                <br>e) kesesuaian dengan kebutuhan DU/DI.
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
                            <td rowspan="2">
                                42
                            </td>
                            <td class="text-start">A. Pelaksanaan pengambilan mata kuliah dalam bentuk kegiatan merdeka
                                belajar kampus merdeka
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/603">LK PS 6.3</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Nisbah (%) SKS mata kuliah dalam bentuk kegiatan merdeka belajar
                                kampus merdeka dan jumlah
                                SKS seluruh Mata Kuliah.
                                <br>Skor 4 jika nisbah >=30% dan
                                <br>skor = 2 jika nisbah = 15%,
                                <br>tidak ada skor 1 dan 0.
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field"></td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td rowspan="2">3</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Jumlah mahasiswa yang mengikuti kegiatan merdeka belajar kampus
                                merdeka
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/606">LK PS 6.6</a>
                            </td>{{-- LOKASI --}}
                            <td>Nisbah (%) jumlah mahasiswa yang mengikuti kegiatan merdeka belajar kampus merdeka terhadap
                                jumlah mahasiswa Program Studi.
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
                                43
                            </td>
                            <td class="text-start">Kegiatan Praktikum
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/607">LK PS 6.7</a>
                            </td>{{-- LOKASI --}}
                            <td>Substansi mata kuliah praktikum dan pelaksanaan praktikum, beserta kualitas modul
                                praktikumnya sejalan dengan mata kuliahnya.
                                <br>Skor = 4 jika substansi praktikum memenuhi 6 komponen, masing-masing diberi skor (0-4):
                                <br>a) setiap praktikum mempunyai buku modul dan isinya memadai
                                <br>b) pelaksanaan praktikum di laboratorium yang sesuai dengan kualitas dan jumlahnya
                                <br>c) kualitas modul praktikum baik
                                <br>d) jam pelaksanaan praktikum di laboratorium sesuai ketentuan
                                <br>e) praktikum didukung perangkat keras dan perangkat lunak yang memadai
                                <br>f) praktikum dilaksanakan di laboratorium milik sendiri
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
                            <td rowspan="2">
                                44
                            </td>
                            <td class="text-start">A. Sistem Pembelajaran menggunakan E-learning
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Pembelajaran menggunakan Sistem e-learning yang memiliki fasilitas:
                                <br>a) upload download materi
                                <br>b) digital content
                                <br>c) forum diskusi
                                <br>d) evaluasi pembelajaran
                                <br>e) RPS
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
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Pelaksanaan Mata kuliah blended learning
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/609">LK PS 6.9</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Matakuliah yang penyelenggaraannya kombinasi secara daring dan
                                luring(blended).
                                <br>A = jumlah MK yang diselenggarakan secara daring dan luring (Blended)
                                <br>B = Total matakuliah
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">nisbah = A/B*100%
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td rowspan="2">
                                45
                            </td>
                            <td class="text-start">A. Evaluasi Pembelajaran
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/612">LK PS 6.12</a>
                            </td>{{-- LOKASI --}}
                            <td>Keterlibatan anggota tim pengampu (team teaching) dalam proses penilaian matakuliah.
                                Skor 4 jika penilaian Matakuliah melibatkan 100% tim pengampu.
                                P= Persentase tim pengampu yang terlibat sebagai tim penilai untuk matakuliah tim teaching.
                                Jika tidak ada team teaching, maka skor=4
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
                            <td rowspan="2">2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Transparansi evaluasi pembelajaran.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Transparansi hasil evaluasi pembelajaran, disosialisasikan, dan dilaksanakan dengan
                                keterbukaan penilaian pembelajaran (nilai diumumkan melalui istem Informasi). Ada kebijakan
                                yang memuat transparansi hasil evaluasi pembelajaran dan disosialisasikan.
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
                                46
                            </td>
                            <td class="text-start">Pembimbingan Akademik.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Pelaksanaan Pembimbingan Akademik (PA) melalui pertemuan langsung dan/ atau lewat SI
                                Akademik, dengan mempertimbangkan intensitas/tingkat penggunaan SI Akademik di Program Studi
                                tersebut.
                                <br>Skor 4 jika pembimbingan memenuhi 5 kriteria :
                                <br>a) dilakukan seluruhnya oleh dosen PA
                                <br>b)tersedia buku panduan PA,
                                <br>c) Pelaksanaan sesuai panduan PA,
                                <br>d) PA terekam secara kontinu
                                <br>e) PA menggunakan Sistem Informasi Akademik.
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
                            <td>3</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td rowspan="2">
                                47
                            </td>
                            <td class="text-start">A. Panduan Skripsi/ Tugas Akhir.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Ketersediaan panduan skripsi/tugas akhir, sosialisasi, dan pelaksanaan yang memanfaatkan
                                Sistem Informasi.
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
                            <td rowspan="2">2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Penilaian Skripsi/ Tugas Akhir.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/616">LKPS 6.16</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Ujian Skripsi/ Tugas Akhir mahasiswa melibatkan dosen yang
                                berkompetensi pada bidang kegiatan yang dilakukan. Baik untuk TA reguler maupun konversi
                                dari MBKM.
                                <br>
                                <br>A. Keterlibatkan dosen yang berkompetensi sesuai bidang kegiatan (TA) mahasiswa sebagai
                                dosen penguji.
                                <br>NP= dosen penguji yang berkompetensi (non pembimbing)
                                <br>Skor = 4 jika NP > 2, else NP+1
                                <br>
                                <br>B. Ujian TA memenuhi aspek:
                                <br>a) ada bukti melibatkan dosen penguji yang berkompentensi (bukan pembimbing)
                                <br>b) kompetensi dosen penguji sesuai dengan bidang kegiatan (TA) yang dilakukan mahasiswa.
                                <br>c) ada sejumlah dosen penguji (bukan pembimbing)
                                <br>d) Relevansi topik TA dengan program studinya
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">(Skor A + skor B)/2
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                48
                            </td>
                            <td class="text-start">Pelaksanaan monitoring dan evaluasi pembelajaran.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor,
                                mengkaji, dan memperbaiki
                                setiap semester tentang:
                                <br>(a) kehadiran mahasiswa, skor antara 1-4
                                <br>(b) kehadiran dosen, skor antara 1-4.
                                <br>(c) materi kuliah, skor antara 1-4.
                                <br>
                                <br>Penghitungan skor untuk setiap butir sebagai berikut:
                                <br>1: Tidak ada monitoring
                                <br>2: Ada monitoring tetapi tidak ada evaluasi
                                <br>3: Ada monitoring, evaluasi tetapi tidak ada tindak lanjut
                                <br>4: Ada monitoring, evaluasi dan ada tindak lanjut.
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">( (skor a) +(skor b) + (skor c)) / 3
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                49
                            </td>
                            <td class="text-start">Pelaksanaan perbaikan sistem pembelajaran.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/618">LKPS 6.18
                            </a></td>{{-- LOKASI --}}
                            <td>Pelaksanaan perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir berkaitan dengan aspek:
                                <br>(a) Materi pembelajaran,
                                <br>(b) Metode pembelajaran,
                                <br>(c) Penggunaan teknologi pembelajaran,
                                <br>(d) Cara-cara evaluasi.
                                <br>(e) Perolehan umpan balik dari
                                <br>
                                <br>Dosen dan mahasiswa (f) Perolehan umpan balik dari alumni dan pengguna lulusan                                
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
                            <td rowspan="2">
                                50
                            </td>
                            <td class="text-start">A. Integrasi hasil penelitian untuk proses pembelajaran
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/610">LKPS 6.10</a>
                            </td>{{-- LOKASI --}}
                            <td class="no_click_field">Nisbah (%) jumlah hasil penelitian yg digunakan dalam pembelajaran terhadap jumlah seluruh penelitian
                                <br>Skor 4 jika nisbah >= 10%. 
                                <br>Skor 2 jika nisbah = 0%                                
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td rowspan="2">2</td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Integrasi hasil Pengabdian kepada Masyarakat (PkM)
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Nisbah (%) jumlah hasil PkM yg digunakan dalam pembelajaran terhadap jumlah seluruh PkM 
                                <br>Skor 4 jika nisbah >= 5%. 
                                <br>Skor 2 jika nisbah = 0%
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field">
                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                        </tr>
                        <tr>
                            <td>
                                51
                            </td>
                            <td class="text-start">Kebijakan tentang suasana akademik.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Kebijakan tertulis tentang suasana akademik mencakup informasi:
                                <br>a) otonomi keilmuan,
                                <br>b) kebebasan akademik,
                                <br>c) kebebasan mimbar akademik,
                                <br>d) kemitraan dosen-mahasiswa 
                                <br>e) dilaksanakan secara konsisten.
                                <br>
                                <br>Skor 4 jika Kebijakan tertulis tentang suasana akademik mencakup:
                                <br>a) otonomi keilmuan,
                                <br>b) kebebasan akademik,
                                <br>c) kebebasan mimbar akademik,
                                <br>d) kemitraan dosen-mahasiswa, dan
                                <br>e) dilaksanakan secara konsisten. 
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
                                52
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif apabila semua tahapan PPEPP dijalankan dengan baik.
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
