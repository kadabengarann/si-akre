@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@include('lkps.lkps_header')

@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>3. Mahasiswa</p>
                        <p><b>TS : </b>{{ $tsYear }} <a href='#' id="ts_change" class='badge badge-info'>Change</a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Jumlah Calon Mahasiswa Baru</p>
                        <p><b>Tabel : </b>Tabel. 3.1. Jumlah Calon Mahasiswa Baru</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Seleksi Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">Tahun Akademik</th>
                            <th rowspan="2">Daya Tampung</th>
                            <th colspan="2">Jumlah Calon Mahasiswa</th>
                            <th colspan="2">Jumlah Mahasiswa Baru</th>
                            <th colspan="2">Jumlah Mahasiswa Aktif</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>Pendaftar</th>
                            <th>Lulus Seleksi</th>
                            <th>Reguler</th>
                            <th>Transfer</th>
                            <th>Reguler</th>
                            <th>Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 4;
                            $countYear = $tsYear - 4;
                            
                            $sum_jcm_pendftr = 0;
                            $sum_jcm_lulus = 0;
                            $sum_jmb_reg = 0;
                            $sum_jmb_transfer = 0;
                            $sum_jma_reg = 0;
                            $sum_jma_transfer = 0;
                        @endphp
                        @foreach ($tableData as $row)
                            @php
                                if ($count < 0) {
                                    break;
                                }
                            @endphp
                            @for ($x = $count; $x >= 0; $x--)
                                @if ($row->id == 'ts_' . ($tsYear - $count) . '_' . $prodi->id)
                                    <tr>
                                        <td>
                                            @if ($countYear == $tsYear)
                                                TS ({{ $countYear }}
                                            @else
                                                TS-{{ $count }} ({{ $countYear }})
                                            @endif
                                        </td>
                                        <td>
                                            {{ $row->dy_tmpng }}
                                        </td>
                                        <td>
                                            {{ $row->jcm_pendftr }}

                                        </td>
                                        <td>
                                            {{ $row->jcm_lulus }}
                                        </td>
                                        <td>
                                            {{ $row->jmb_reg }}
                                        </td>
                                        <td>
                                            {{ $row->jmb_transfer }}
                                        </td>
                                        <td>
                                            {{ $row->jma_reg }}
                                        </td>
                                        <td>
                                            {{ $row->jma_transfer }}
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">
                                                <i class="fas fa-minus-circle"></i>
                                            </a>
                                            <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#ts-{{ $count }}"
                                                class="btn btn-info">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @php
                                        $sum_jcm_pendftr += $row->jcm_pendftr;
                                        $sum_jcm_lulus += $row->jcm_lulus;
                                        $sum_jmb_reg += $row->jmb_reg;
                                        $sum_jmb_transfer += $row->jmb_transfer;
                                        $sum_jma_reg += $row->jma_reg;
                                        $sum_jma_transfer += $row->jma_transfer;
                                        // echo $sum_jma_transfer;
                                        $count--;
                                        $countYear++;
                                    @endphp
                                @endif
                            @endfor
                        @endforeach
                        @for ($x = $count; $x >= 0; $x--)
                            <tr>
                                <td>
                                    @if ($x == 0)
                                        TS ({{ $tsYear - $x }})
                                    @else
                                        TS- {{ $x }} ({{ $tsYear - $x }})
                                    @endif
                                </td>
                                <td colspan="8">
                                    No Data
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Jumlah</th>
                            <th>NA = {{ $sum_jcm_pendftr }}</th>
                            <th>NA = {{ $sum_jcm_lulus }}</th>
                            <th>NA = {{ $sum_jmb_reg }}</th>
                            <th>NA = {{ $sum_jmb_transfer }}</th>
                            <th>NA = {{ $sum_jma_reg }}</th>
                            <th>NA = {{ $sum_jma_transfer }}</th>
                        </tr>

                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary"
                    href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                        class="fas fa-plus-circle"></i> Input
                    data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
@include('lkps.lkps_scripts')
