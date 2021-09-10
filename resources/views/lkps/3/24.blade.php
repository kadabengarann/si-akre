@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Laporan Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
<section class="content">
  <div class="card card-primary card-outline">
    <div class="card-body">    
      <div class="row">
        <div class="col-12 col-lg-6">
          <p><b>Kriteria : </b>3. Sumber Daya Manusia</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>b. Kinerja Dosen</p>
          <p><b>Tabel : </b>3.b.4) Publikasi Ilmiah DTPS</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info" href="/lkps/view/323"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/325">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div>

  </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 3.b.4) Publikasi Ilmiah DTPS</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tbl_list" class="table table-bordered table-center-text">
          <thead>
              <tr>
                      <th rowspan="2">No.</th>
                      <th rowspan="2">Media Publikasi</th>
                      <th colspan="3">Jumlah Judul</th>
                      <th rowspan="2">Jumlah</th>
              </tr>
              <tr>
                      <th>TS-2</th>
                      <th>TS-1</th>
                      <th>TS</th>
              </tr>
              </thead>
          <tbody>
              <tr>
                <td>
                  1
                </td>
                <td class="text-left">
                  Jurnal nasional tidak terakreditasi
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NA1 = </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td class="text-left">
                  Jurnal nasional terakreditasi
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NA2 = </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td class="text-left">
                  Jurnal internasional
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NA3 = </td>
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td class="text-left">
                  Jurnal internasional bereputasi 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NA4 = </td>
              </tr>
              <tr>
                <td>
                  5
                </td>
                <td class="text-left">
                  Seminar wilayah/lokal/perguruan tinggi
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NB1 = </td>
              </tr>
              <tr>
                <td>
                  6
                </td>
                <td class="text-left">
                  Seminar nasional
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NB2 = </td>
              </tr>
              <tr>
                <td>
                  7
                </td>
                <td class="text-left">
                  Seminar internasional 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NB3 = </td>
              </tr>
              <tr>
                <td>
                  8
                </td>
                <td class="text-left">
                  Tulisan di media massa wilayah
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NC1 = </td>
              </tr>
              <tr>
                <td>
                  9
                </td>
                <td class="text-left">
                  Tulisan di media massa nasional
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NC2 = </td>
              </tr>
              <tr>
                <td>
                  10
                </td>
                <td class="text-left">
                  Tulisan di media massa internasional
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>NC3 = </td>
              </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2">Jumlah</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>

        </table>
    </div>
    
    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
      <a class="btn btn-primary"  href="/lkps/input/324"><i class="fas fa-plus-circle"></i>  Input data</a>
    </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
