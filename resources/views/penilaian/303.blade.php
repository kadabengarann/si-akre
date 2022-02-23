@extends('layouts.apps')
@section('title', 'Dashboard')
@include('penilaian.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.3. MAHASISWA
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">MAHASISWA
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
                                13
                            </td>
                            <td class="text-start">Kebijakan yang ditetapkan perguruan tinggi terkait kemahasiswaan
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Deskripsi dokumen formal kebijakan yang mencakup aspek:
                                <br> a) Metoda rekrutmen dan sistem seleksi
                                <br>b) Layanan kemahasiswaan yang dapat diberikan dalam bentuk: kegiatan pengembangan
                                kemampuan
                                penalaran, minat dan bakat, kegiatan bimbingan karir dan kewirausahaan, serta kegiatan
                                peningkatan kesejahteraan (bimbingan dan konseling, beasiswa,
                                dan kesehatan)
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                14
                            </td>
                            <td class="text-start">Kualitas Input Mahasiswa
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/301">LKPS 3.1</a></td>{{-- LOKASI --}}
                            <td> Efektivitas implementasi sistem rekrutmen dan seleksi calon mahasiswa. untuk menghasilkan
                                calon mahasiswa yang bermutu yang diukur dari keketatan seleksi.
                                Nisbah jumlah mahasiswa yang lulus seleksi dalam 5 tahun terakhir dengan calon mahasiswa
                                yang ikut
                                seleksi.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis
                                debitis labore laudantium praesentium officia quasi sint magni earum?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                15
                            </td>
                            <td class="text-start">Upaya Peningkatan Animo.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/301">LKPS 3.1</a></td>{{-- LOKASI --}}
                            <td>Efektivitas implementasi sistem rekrutmen dan seleksi calon mahasiswa. untuk menghasilkan
                                calon mahasiswa yang bermutu yang diukur dari
                                nisbah (%) mahasiswa baru reguler yang melakukan registrasi terhadap calon mahasiswa baru
                                reguler yang lulus seleksi.
                                Jika nisbah >= 75% skor =
                                4. Jika nisbah <=25% skor 0.</td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quos accusamus illum ab vel
                                omnis, id cumque sunt adipisci? Ut?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">
                                42
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                16
                            </td>
                            <td class="text-start">Jenis Layanan dan kualitas layanan kepada mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/304">LKPS 3.4</a></td>{{-- LOKASI --}}
                            <td>Ketersediaan layanan kepada mahasiswa antara lain:
                                <br> a) Bimbingan dan konseling,
                                <br>b) Minat dan bakat (ekstra kurikuler),
                                <br>c) Pembinaan soft skill,
                                <br>d) Layanan beasiswa,
                                <br>e) Layanan kesehatan,
                                <br>f) Layanan karir
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis unde velit
                                voluptatibus quas quam. Repellat a sequi sapiente dicta placeat.
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">42
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td class="text-start">Unit Kegiatan Mahasiswa.
                            <td><a href="/lkps/view/305">LKPS 3.5</a></td>{{-- LOKASI --}}
                            <td class="no_click_field">"Unit kegiatan mahasiswa (UKM) dan kebermanfaatannya bagi mahasiswa
                                di bidang INFOKOM yang
                                dikelola oleh dosen yg sesuai bidang ilmu.
                                <br> A. Jumlah UKM bidang INFOKOM yang dikelola oleh dosen sesuai bidang ilmu"
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field ">
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td class="no_click_field" rowspan="2">Nilai = (A+2B)/3 </td> {{-- PERHITUNGAN --}}
                            <td rowspan="2" class="no_click_field ">
                            </td>{{-- SKOR --}}
                            <td rowspan="2"></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td class="text-start"></td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td class="no_click_field">B. Pelaksanaan, dan Kebermanfaatan UKM bidang INFOKOM bagi mahasiswa
                            </td>{{-- INDIKATOR --}}
                            <td class="no_click_field">

                            </td>{{-- ALASAN PENILAIAN --}}
                        </tr>
                        <tr>
                            <td>
                                18
                            </td>
                            <td class="text-start">Keaktifan mahasiswa dalam unit kegiatan
                            </td>{{-- ELEMEN --}}
                            <td><a href="/lkps/view/305">LK PS 3.5.a 3.5.b
                                </a></td>{{-- LOKASI --}}
                            <td>Keaktifan mahasiswa dalam mengikuti kegiatan kemahasiswaan, dihitung dari nisbah (%)
                                rata-rata jumlah mahasiswa yg aktif di setiap unit kegiatan terhadap jumlah total mahasiswa
                                program studi. Jika nisbah >= 10 %, maka skor 4
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">42
                            </td>{{-- SKOR --}}
                            <td></td>{{-- BOBOT --}}
                        </tr>
                        <tr>
                            <td>
                                19
                            </td>
                            <td class="text-start">Siklus Penjaminan Mutu (PPEPP)
                                berjalan dengan
                                efektif
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Siklus Penjaminan Mutu (PPEPP) berjalan dengan efektif apabila semua tahapan PPEPP
                                dijalankan dengan baik.
                            </td>{{-- INDIKATOR --}}
                            <td class="input_alasan_trigg alasan_pen" data-toggle="modal" data-target="#text_penilaian"
                                data-penilaian="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque nemo perferendis debitis labore laudantium praesentium officia quasi sint magni earum?">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione eaque doloremque sunt
                                quidem odit provident quae distinctio, ea est dignissimos?
                            </td>{{-- ALASAN PENILAIAN --}}
                            <td></td> {{-- PERHITUNGAN --}}
                            <td class="input_skor_trigg alasan_pen" data-toggle="modal" data-target="#skor_penilaian"
                                data-skor="42">42
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
                <form class="form-horizontal" action="/penilaian/303">

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
                <form class="form-horizontal" action="/penilaian/303">

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
