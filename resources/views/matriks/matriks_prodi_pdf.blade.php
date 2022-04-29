<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI - Akre | Matriks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ public_path('css/style.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ public_path('css/matriks.css') }}" rel="stylesheet" rel="stylesheet" type="text/css" media="all">
    <style>
        @page {
            margin: 50px;
        }

    </style>
</head>

<body>
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
                            @if (Auth::user()->level == 5)
                                {{-- @foreach ($reviewer as $column) --}}
                                <b>Nama Reviewer : </b>{{ $reviewer->nama }}
                                {{-- @endforeach --}}
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="text-center card-title" style="float: none; font-weight:500">Penilaian Kinerja
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
                                {{-- @foreach ($dataMatriksReviewer as $column => $value) --}}
                                @foreach ($reviewer as $column => $value)
                                    <th class="mt-1 mb-1">Nilai Hasil
                                        R-{{ $column + 1 }} <br>
                                        ({{ $value->nama }})
                                        {{-- R-1<br>({{ $reviewer->nama }}) --}}
                                    </th>
                                @endforeach
                                <th class="mt-1 mb-1">Bobot dari 400
                                </th>
                                <th class="mt-1 mb-1">Jml butir
                                </th>
                            </tr>
                            <tr>
                                <th class="mt-1 mb-1 text-start" colspan="2">
                                    INSTRUMEN SUPLEMEN KONVERSI PERINGKAT AKREDITASI
                                </th>
                                <th colspan="{{ 3 + count($reviewer) }}">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $row_id = 11;
                            @endphp
                            <tr
                                class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    A
                                </td>
                                <td class="text-start">
                                    KONDISI EKSTERNAL
                                </td>
                                <td>
                                    6(1,5%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}
                                </td>
                                <td>
                                    1
                                </td>

                            </tr>
                            @php
                                $row_id = 21;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField > 0 ? 'incomplete' : '' }}">
                                <td>
                                    B
                                </td>
                                <td class="text-start">
                                    PROFIL UNIT PENGELOLA PROGRAM STUDI
                                </td>
                                <td>
                                    6(1,5%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    1
                                </td>


                            </tr>
                            @php
                                $row_id = 31;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    C
                                </td>
                                <td class="text-start">
                                    1. VISI, MISI, TUJUAN DAN STRATEGI
                                </td>
                                <td>
                                    4(1,0%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    9
                                </td>


                            </tr>
                            @php
                                $row_id = 32;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>

                                </td>
                                <td class="text-start">
                                    2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA
                                </td>
                                <td>
                                    20 (5,0%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>


                            </tr>
                            @php
                                $row_id = 33;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    3. MAHASISWA
                                </td>
                                <td>
                                    14 (3,5%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    9
                                </td>


                            </tr>
                            @php
                                $row_id = 34;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    4. SUMBER DAYA MANUSIA
                                </td>
                                <td>
                                    30 (7,5%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>


                            </tr>
                            @php
                                $row_id = 35;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    5. KEUANGAN, SARANA DAN PRASARANA
                                </td>
                                <td>
                                    22 (5,5%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    7
                                </td>


                            </tr>
                            @php
                                $row_id = 36;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    6. PENDIDIKAN
                                </td>
                                <td>
                                    30 (7,5%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    15
                                </td>


                            </tr>
                            @php
                                $row_id = 37;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    7. PENELITIAN
                                </td>
                                <td>
                                    16 (4,0 %)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>


                            </tr>
                            @php
                                $row_id = 38;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    8. PENGABDIAN KEPADA MASYARAKAT
                                </td>
                                <td>
                                    12 (3,0%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>


                            </tr>
                            @php
                                $row_id = 39;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    9. LUARAN DAN CAPAIAN TRIDHARMA
                                </td>
                                <td>
                                    208 (52%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    17
                                </td>


                            </tr>
                            @php
                                $row_id = 41;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    D </td>
                                <td class="text-start">
                                    SUPLEMEN PROGRAM STUDI
                                </td>
                                <td>
                                    20(5,0%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    5
                                </td>


                            </tr>
                            @php
                                $row_id = 51;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    E
                                </td>
                                <td class="text-start">
                                    ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN
                                </td>
                                <td>
                                    12(3,0%)
                                </td>
                                @foreach ($dataMatriksReviewer as $column => $value)
                                    <td class="text-center">
                                        {{ getArrayItem($row_id, $value)->skor ?: '-' }}
                                    </td>
                                @endforeach
                                <td>
                                    {{ getArrayItem($row_id, $dataMatriksProdi)->skor ?: '-' }}

                                </td>
                                <td>
                                    4
                                </td>


                            </tr>
                            <tr>
                                <td colspan="2">
                                    Nilai Hasil
                                </td>
                                <td style="text-align: center!important" >
                                    400 (100%)
                                </td>
                                @foreach ($matriksSumAllRevs as $column => $value)
                                    <td class="text-center">
                                        {{ $value }} ({{ number_format(($value / 400) * 100, 2, '.', '') }}%)
                                    </td>
                                @endforeach
                                <td>{{ $matriksSumAll }} ({{ number_format(($value / 400) * 100, 2, '.', '') }}%)
                                </td>
                                <td>
                                    112
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Nilai Akreditasi</td>
                                <td colspan="6" style="text-align: center!important" >
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
</body>

</html>
