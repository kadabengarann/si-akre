@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.4. SUMBER DAYA MANUSIA
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">SUMBER DAYA MANUSIA
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
                            <td rowspan="2">
                                20
                            </td>
                            <td class="text-start">A. Syarat perlu dosen tetap yang ditugaskan di program studi.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/402">LK PS 4.2
                                </a></td>{{-- LOKASI --}}
                            <td class="no_click_field">Jumlah dosen tetap Perguruan Tinggi yang mengajar di program studi
                                yang sesuai dengan bidang
                                keilmuan program studi
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td class="text-start">B. Dosen tetap yang berpendidik an S3 yang bidang keahliannya bidang
                                INFOKOM atau S3 non INFOKOM tetapi memiliki track record penelitian kompetitif di tingkat
                                Nasional selama 5 tahun terakhir bidang infokom (sebagai Ketua Peneliti)
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/402">LK PS 4.2
                                </a></td>{{-- LOKASI --}}
                            <td class="no_click_field"> Jika PS3 ≥ 50 %, maka skor = 4.
                                PS3 = Persentase dosen tetap yang berpendidikan S3 bidang INFOKOM atau S3 non INFOKOM tetapi
                                memiliki pengalaman penelitian bidang infokom sebagai ketua peneliti. Nilai = (A+B)/2
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                21
                            </td>
                            <td class="text-start">Beban DTPS Sebagai Pembimbin g utama Skripsi/ Tugas Akhir
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/403">LKPS 4.3</a></td>{{-- LOKASI --}}
                            <td>Jumlah mahasiswa bimbingan dari DTPS pembimbing utama pada seluruh Program Studi Jika RMB <=
                                    6, skor=4 RMB=rata2 jumlah mahasiswa bimbingan dari DTPS pembimbing utama pada seluruh
                                    Program Studi </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quos accusamus illum ab vel
                                omnis, id cumque sunt adipisci? Ut?
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
                                22
                            </td>
                            <td class="text-start">Beban Dosen Tetap Program Studi (EWMP)
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/404">LK PS 4.4
                                </a></td>{{-- LOKASI --}}
                            <td>Rata-rata beban dosen tetap PS per semester, atau rata-rata EWMP (Ekuivalensi Waktu Mengajar
                                Penuh meliputi tugas tridarma dan tugas manajemen lain)
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis unde velit
                                voluptatibus quas quam. Repellat a sequi sapiente dicta placeat.
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
                            <td rowspan="2">
                                23
                            </td>
                            <td class="text-start">A. Kesesuaian Mata Kuliah dan Keahlian Dosen
                            <td><a href="/lkps/view/405">LKPS 4.5</a></td>{{-- LOKASI --}}
                            <td class="no_click_field">A. Dosen tetap (DTPS) yang memiliki jabatan Lektor, Lektor Kepala
                                dan Guru Besar yang bidang keahliannya sesuai dengan kompetensi PS, Jika P ≥ 60%, maka skor
                                =
                                4.
                                <br><br>P = Persentase Dosen tetap yang memiliki jabatan Lektor, Lektor Kepala dan Guru
                                Besar
                                yang bidang keahliannya sesuai dengan kompetensi
                                PS
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field ">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field"></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field ">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>

                            <td class="text-start">B.Kesesuaian keahlian (pend. terakhir penugasan, jabfung) dosen tetap
                                (DTPS)
                                dengan MK yang diajarkanny a. Nilai = (A+B)/2</td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">Jika seluruh mata kuliah diajarkan oleh dosen tetap (DTPS) sesuai
                                bidang maka skor = 4 atau MKTS = 0.
                                <br>MKTS = jumlah MK yg diampu oleh dosen tetap (DTPS) tidak sesuai bidang
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">

                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field" rowsp></td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field ">
                            </td>{{-- SKOR --}}
                        </tr>
                        <tr>
                            <td>
                                24
                            </td>
                            <td class="text-start">Profesionalisme Dosen
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/406">LKPS 4.6
                                </a></td>{{-- LOKASI --}}
                            <td>Keanggotaan dosen tetap (DTPS) dalam organisasi profesi bidang ilmu Infokom di tingkat
                                nasional dan/atau tingkat internasional. Persentase (Pa) dosen tetap (DTPS) menjadi anggota
                                organisasi profesi bidang INFOKOM tingkat nasional dan/atau internasional
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
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
                                25
                            </td>
                            <td class="text-start">Dosen tetap (DTPS)
                                memiliki minimal 1 sertifikasi profesi tingkat nasional/ Internasional
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/406">LKPS 4.6
                                </a></td>{{-- LOKASI --}}
                            <td>Persentase (Pb) dosen tetap (DTPS) memiliki minimal 1 sertifikasi profesi tingkat nasional/
                                Internasional
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
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
                                26
                            </td>
                            <td class="text-start">Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang
                                tridharma.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Ada bukti tentang pengukuran, evaluasi dan perbaikan kinerja dosen yang memenuhi 5 aspek
                                berikut
                                <br> a) ada kebijakan tentang monitoring dan evaluasi kinerja dosen di bidang tridharma.
                                <br>b) ada bukti pelaksanaan monitoring dan evaluasi kinerja bidang pendidikan.
                                <br>c) ada bukti pelaksanaan monitoring dan evaluasi kinerja bidang penelitian
                                <br>d) ada bukti pelaksanaan monitoring dan evaluasi kinerja bidang pelayanan/ pengabdian
                                kepada
                                masyarakat dan
                                <br>e) terdokumentasi dengan
                                baik.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
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
                                27
                            </td>
                            <td class="text-start">Peningkatan kemampuan dosen tetap (DTPS)
                                melalui program tugas belajar dalam bidang yang sesuai dengan bidang Infokom atau
                                serumpun.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/408">LKPS 4.8
                                </a></td>{{-- LOKASI --}}
                            <td>Jika DTPS berjenjang S3 >= 50%, maka skor= 4, selain itu jika P >= 20% maka skor=4
                                <br> P = persentase dosen tetap (DTPS) yang tugas belajar jenjang S3.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
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
                            <td rowspan="3">
                                28
                            </td>
                            <td class="text-start"> A. Tenaga administrasi
                                , jumlah dan kualifikasiny
                                a
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/409">LKPS 4.9
                                </a></td>{{-- LOKASI --}}
                            <td class="no_click_field">Tenaga administrasi, jumlah dan kualifikasinya. Catatan: skor
                                dihitung dengan rumus
                                berikut: SK =(4 X1 + 3 X2 + 2 X3 +
                                X4)/4/jumlah mahasiswa aktif <br> X1 = jumlah tenaga administrasi yang berpendidikan D4 atau
                                S1
                                ke atas.
                                <br> X2 = jumlah tenaga
                                administrasi yang berpendidikan D3. <br> X3 = jumlah tenaga administrasi yang
                                berpendidikan D1 atau D2 <br> X4 = jumlah tenaga administrasi yang berpendidikan SMA/SMK
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field" rowspan="3">(4+2+C)/3


                            </td> {{-- PERHITUNGAN --}}
                            <td class="no_click_field" rowspan="3">
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>

                            <td class="text-start">B. Tenaga teknisi, jumlah dan kualifikasiny
                                a
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/409">LKPS 4.9
                                </a></td>{{-- LOKASI --}}
                            <td class="no_click_field">"Kualifikasi pendidikan teknisi di laboratorium. SK = (4 T1 + 3 T2 +
                                2T3)/3/jumlah teknisi T1 = jumlah tenaga teknisi
                                yang berpendidikan D4 atau S1.
                                <br> T2 = jumlah tenaga teknisi yang berpendidikan D3.
                                <br> T3 = jumlah tenaga teknisi yang berpendidikan D1 atau D2."
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>

                            <td class="text-start">C. Pustakawan dan kualifikasinya.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/409">LKPS 4.9
                                </a></td>{{-- LOKASI --}}
                            <td class="no_click_field">Memiliki minimal 1 tenaga perpustakaan yang berijasah minimal Sarjana
                                ilmu perpustakaan untuk melayani PS. Nilai = (A+B+C)/3
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>

                        <tr>
                            <td>
                                29
                            </td>
                            <td class="text-start">Upaya yang telah dilakukan UPPS untuk meningkatk an kualifikasi dan
                                kompetensi tenaga kependidika n dalam 3 tahun terakhir
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/410">LKPS 4.10
                                </a></td>{{-- LOKASI --}}
                            <td>Persentase (P) jumlah tenaga kependidikan yang mengikuti program pengembangan dalam 3 tahun
                                terakhir
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
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
                                30
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu (PPEPP)
                                berjalan dengan efektif
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif apabila semua tahapan PPEPP
                                dijalankan dengan baik.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                <i class="edit_mark fas fa-pen"></i>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                <i class="edit_mark fas fa-pen"></i>
                                42
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
                <form class="form-horizontal" action="/penilaian/304">

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
                <form class="form-horizontal" action="/penilaian/304">

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
