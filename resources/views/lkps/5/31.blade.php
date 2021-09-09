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
          <p><b>Kriteria : </b>5. Pendidikan</p>
        </div>
        <div class="col-12 col-lg-6">
          <p><b>Sub-kriteria : </b>c. Kepuasan Mahasiswa</p>
          <p><b>Tabel : </b>5.c Kepuasan Mahasiswa</p>
        </div>
      </div>
  
    </div>
    <!-- /.card-body -->
    <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
      <a class="btn btn-info" href="/lkps/view/521"><i class="fas fa-arrow-circle-left"></i>  Prev</a>
      <a class="btn btn-success" href="/lkps/view/611">Next  <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">Tabel 5.c Kepuasan Mahasiswa</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tbl_list" class="table table-bordered table-center-text">
          <thead>
              <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Aspek yang Diukur</th>
                <th colspan="4">Tingkat Kepuasan Mahasiswa 
                  (%)
                  </th>
                <th rowspan="2">Rencana 
                  Tindak Lanjut 
                  Sangat oleh UPPS/PS
                  </th>
              </tr>
              <tr>
                <th>Sangat Baik</th>
                <th>Baik</th>
                <th>Cukup</th>
                <th>Kurang</th>
          </thead>
          <tbody>
              <tr>
                <td>1</td>
                <td class="text-left">
                  Keandalan<br>
                  (reliability):<br> 
                  kemampuan dosen,<br> 
                  tenaga kependidikan, <br>
                  dan pengelola dalam <br>
                  memberikan <br>
                  pelayanan
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
                <td class="text-left">
                  Daya tanggap <br>
                  (responsiveness): <br>
                  kemauan dari dosen, <br>
                  tenaga kependidikan,<br>
                  dan pengelola dalam <br>
                  membantu <br>
                  mahasiswa dan <br>
                  memberikan jasa <br>
                  dengan cepat.
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

              </tr>
              <tr>
                <td>3</td>
                <td class="text-left">
                  Kepastian <br>
                  (assurance): <br>
                  kemampuan dosen, <br>
                  tenaga kependidikan,<br>
                  dan pengelola untuk <br>
                  memberi keyakinan <br>
                  kepada mahasiswa <br>
                  bahwa pelayanan <br>
                  yang diberikan telah <br>
                  sesuai dengan <br>
                  ketentuan.
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

              </tr>
              <tr>
                <td>4</td>
                <td class="text-left">
                  Empati (empathy):<br> 
                  kesediaan/kepedulian <br>
                  dosen, tenaga <br>
                  kependidikan, dan <br>
                  pengelola untuk <br>
                  memberi perhatian <br>
                  kepada mahasiswa.
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

              </tr>
              <tr>
                <td>5</td>
                <td class="text-left">
                  Tangible: penilaian <br>
                  mahasiswa terhadap <br>
                  kecukupan, <br>
                  aksesibitas, kualitas <br>
                  sarana dan <br>
                  prasarana
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
          </tbody>
        </table>
    </div>
    
    <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
      <a class="btn btn-primary"  href="/lkps/input/521"><i class="fas fa-plus-circle"></i>  Input data</a>
    </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>    @endsection
