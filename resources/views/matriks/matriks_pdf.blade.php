<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI - Akre | @yield('title')</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ ltrim(public_path('css/app.css'), '/') }}">
    <link rel="stylesheet" href="{{ ltrim(public_path('css/style.css'), '/') }}">
    <link href="{{ ltrim(public_path('css/matriks.css'), '/') }}" rel="stylesheet">
    <style>
        @page {
            margin: 10px;
        }

        body {
            margin: 0px;
        }

    </style>
</head>

<body>
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <!-- /.row -->

                <div class="row justify-content-center">
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">IDENTITAS</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p><b>Program Studi : </b>{{ $prodi->nama }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="text-center card-title" style="float: none; font-weight:500">Penilaian
                                    Kinerja
                                    Program Studi</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="tbl_list" class="table table-bordered table-center-text">
                                    <thead>
                                        <tr>
                                            <th class="mt-1 mb-1" colspan="2">BAB/KRITERIA</th>
                                            <th class="mt-1 mb-1">Skor Maksimal
                                            </th>
                                            <th class="mt-1 mb-1">Nilai Hasil
                                                R-3
                                            </th>
                                            <th class="mt-1 mb-1">Nilai Hasil
                                                R-2
                                            </th>
                                            <th class="mt-1 mb-1">Nilai Hasil
                                                R-1
                                            </th>
                                            <th class="mt-1 mb-1">Bobot dari 400
                                            </th>
                                            <th class="mt-1 mb-1">Jml butir
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="mt-1 mb-1 text-start" colspan="2">
                                                INSTRUMEN SUPLEMEN KONVERSI PERINGKAT AKREDITASI
                                            </th>
                                            <th colspan="6">

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                A
                                            </td>
                                            <td class="text-start">
                                                KONDISI EKSTERNAL
                                            </td>
                                            <td>
                                                6(1,5%)
                                            </td>
                                            <td>

                                            </td>

                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(11, $dataMatriks) ?: '-' }}
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                B
                                            </td>
                                            <td class="text-start">
                                                PROFIL UNIT PENGELOLA PROGRAM STUDI
                                            </td>
                                            <td>
                                                6(1,5%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(21, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                C
                                            </td>
                                            <td class="text-start">
                                                1. VISI, MISI, TUJUAN DAN STRATEGI
                                            </td>
                                            <td>
                                                4(1,0%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(31, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                            </td>
                                            <td class="text-start">
                                                2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA
                                            </td>
                                            <td>
                                                20 (5,0%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(32, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                11
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                3. MAHASISWA
                                            </td>
                                            <td>
                                                14 (3,5%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(33, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                4. SUMBER DAYA MANUSIA
                                            </td>
                                            <td>
                                                30 (7,5%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(34, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                11
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                5. KEUANGAN, SARANA DAN PRASARANA
                                            </td>
                                            <td>
                                                22 (5,5%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(35, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                7
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                6. PENDIDIKAN
                                            </td>
                                            <td>
                                                30 (7,5%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(36, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                15
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                7. PENELITIAN
                                            </td>
                                            <td>
                                                16 (4,0 %)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(37, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                11
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                8. PENGABDIAN KEPADA MASYARAKAT
                                            </td>
                                            <td>
                                                12 (3,0%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(38, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                11
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td class="text-start">
                                                9. LUARAN DAN CAPAIAN TRIDHARMA
                                            </td>
                                            <td>
                                                208 (52%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(39, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                17
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                D </td>
                                            <td class="text-start">
                                                SUPLEMEN PROGRAM STUDI
                                            </td>
                                            <td>
                                                20(5,0%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(41, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                E
                                            </td>
                                            <td class="text-start">
                                                ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN
                                            </td>
                                            <td>
                                                12(3,0%)
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                {{ getMatriksSum(51, $dataMatriks) ?: '-' }}

                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Nilai Hasil
                                            </td>
                                            <td>
                                                400 (100%)
                                            </td>
                                            <td colspan="3"></td>
                                            <td>{{ $matriksSumAll }}</td>
                                            <td>
                                                112
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Nilai Akreditasi</td>
                                            <td colspan="6">
                                                <b>
                                                    @php
                                                        if ($matriksSumAll >= 361) {
                                                            echo 'Unggul';
                                                        } elseif ($matriksSumAll >= 301 && $matriksSumAll < 361) {
                                                            echo 'Baik Sekali';
                                                        } elseif ($matriksSumAll >= 200 && $matriksSumAll < 301) {
                                                            echo 'Baik';
                                                        } else {
                                                            echo 'Tidak memenuhi syarat peringkat';
                                                        }
                                                    @endphp
                                                </b>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </section>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
</body>

</html>
