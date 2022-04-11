@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Penilaian Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Penilaian Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
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
                                <th class="mt-1 mb-1">"Nilai Hasil
                                    R-2"

                                </th>
                                <th class="mt-1 mb-1">"Nilai Hasil
                                    R-1"
                                </th>
                                <th class="mt-1 mb-1">Skor R-1
                                </th>
                                <th class="mt-1 mb-1">Skor R-1
                                </th>
                                <th class="mt-1 mb-1">Bobot dari 400
                                </th>
                                <th class="mt-1 mb-1">Jml butir
                                </th>
                                <th>
                                    Action
                                </th>


                            </tr>
                            <tr>
                                <th class="mt-1 mb-1 text-start" colspan="2">
                                    INSTRUMEN SUPLEMEN KONVERSI PERINGKAT AKREDITASI
                                </th>
                                <th colspan="8">

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

                                </td>
                                <td>
                                    @php
                                        if ($dataMatriks){
                                            
                                        }
                                    @endphp                                    
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/101{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
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

                                </td>
                                <td>

                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/101{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
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
                                    6(1,5%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/301{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td class="text-start">
                                    2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA
                                </td>
                                <td>
                                    24 (6%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/302{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="text-start">
                                    3. MAHASISWA
                                </td>
                                <td>
                                    18 (4,5%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/303{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="text-start">
                                    4. SUMBER DAYA MANUSIA
                                </td>
                                <td>
                                    31 (7,8%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/304{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
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

                                </td>
                                <td>

                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/305{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="text-start">
                                    6. PENDIDIKAN
                                </td>
                                <td>
                                    32 (8%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/306{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="text-start">
                                    7. PENELITIAN
                                </td>
                                <td>
                                    13 (3,3 %)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/307{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="text-start">
                                    8. PENGABDIAN KEPADA MASYARAKAT
                                </td>
                                <td>
                                    17 (4,3%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/308{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td class="text-start">
                                    9. LUARAN DAN CAPAIAN TRIDHARMA
                                </td>
                                <td>
                                    188 (47%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    26
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/309{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    D </td>
                                <td class="text-start">
                                    SUPLEMEN PROGRAM STUDI
                                </td>
                                <td>
                                    25(6,3%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/401{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
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
                                    12(3%)
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    4
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/501{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                </td>
                                <td>
                                    400 (100%)
                                </td>
                                <td colspan="5"></td>
                                <td>
                                    99
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection
