@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Lembar Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lembar Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
<section class="content">
  <div class="card card-primary card-outline">
    <div class="card-body">    
      <div class="row">
        <div class="col-12 col-lg-6">
          <p><b>Kriteria : </b>4. Keuangan, Sarana, dan Prasarana</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Tabel : </b>4. Penggunaan Dana</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info" href="/lkps/view/327"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/511">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div>

  </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 4. Penggunaan Dana</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tbl_list" class="table table-bordered table-center-text">
          <thead>
              <tr>
                      <th rowspan="2">No.</th>
                      <th rowspan="2" colspan="2">Jenis Penggunaan</th>
                      <th colspan="4">Unit Pengelola Program Studi
                        (Rp.)
                        </th>
                      <th colspan="4">Program Studi
                        (Rp.)
                        </th>
              </tr>
              <tr>
                      <th >TS-2</th>
                      <th >TS-1</th>
                      <th >TS</th>
                      <th >Rata-rata</th>
                      <th >TS-2</th>
                      <th >TS-1</th>
                      <th >TS</th>
                      <th >Rata-rata</th>
              </tr>
              </thead>
              <tbody>
                  <tr >
                    <td>1</td>
                    <td class="text-left" colspan="2">Biaya Operasional Pendidikan</td>
                    <td colspan="8"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-left">a.</td>
                    <td class="text-left">Biaya Dosen (Gaji, Honor)                    </td>
                    <td colspan="8"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-left">b.</td>
                    <td class="text-left">Biaya Tenaga Kependidikan (Gaji, 
                      Honor)</td>
                    <td colspan="8"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-left">c.</td>
                    <td class="text-left">Biaya Operasional Pembelajaran<br>
                      (Bahan dan Peralatan Habis Pakai)
                      </td>
                    <td colspan="8"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-left">d.</td>
                    <td class="text-left">Biaya Operasional Tidak Langsung<br> 
                      (Listrik, Gas, Air, Pemeliharaan<br> 
                      Gedung, Pemeliharaan Sarana,<br> 
                      Uang Lembur, Telekomunikasi,<br> 
                      Konsumsi, Transport Lokal, Pajak,<br> 
                      Asuransi, dll.)
                      </td>
                    <td colspan="8"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="text-left" colspan="2">Biaya operasional kemahasiswaan<br>
                      (penalaran, minat, bakat, dan <br>
                      kesejahteraan).
                      </td>
                    <td colspan="8"></td>
                  </tr>
              </tbody>
              <tr>
                <td  colspan="3">
                  <b>Jumlah</b>
                </td>
              </tr>
              <tbody>
                  <tr >
                    <td>3</td>
                    <td class="text-left" colspan="2">Biaya Penelitian</td>
                    <td colspan="8"></td>
                  </tr>
                  <tr >
                    <td>4</td>
                    <td class="text-left" colspan="2">Biaya PkM</td>
                    <td colspan="8"></td>
                  </tr>
              </tbody>
              <tr>
                <td  colspan="3">
                  <b>Jumlah</b>
                </td>
              </tr>
              <tbody>
                  <tr >
                    <td>5</td>
                    <td class="text-left" colspan="2">Biaya Investasi SDM</td>
                    <td colspan="8"></td>
                  </tr>
                  <tr >
                    <td>6</td>
                    <td class="text-left" colspan="2">Biaya Investasi Sarana</td>
                    <td colspan="8"></td>
                  </tr>
                  <tr >
                    <td>7</td>
                    <td class="text-left" colspan="2">Biaya Investasi Prasarana</td>
                    <td colspan="8"></td>
                  </tr>
              </tbody>
              <tr>
                <td  colspan="3">
                  <b>Jumlah</b>
                </td>
              </tr>
              <tfoot>
                <tr>
                  <th colspan="3">TOTAL</th>
                </tr>
              </tfoot>
        </table>
    </div>    
    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
      <a class="btn btn-primary"  href="/lkps/input/411"><i class="fas fa-plus-circle"></i>  Input data</a>
    </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
