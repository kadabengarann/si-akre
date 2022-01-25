@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>Total User</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Dosen</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>

                    <p>Mahasiswa</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
    </div>
    <div class="row">
        <section class="col-lg-7">
            <div class="card card-primary  card-outline">
                <div class="card-header">
                    <h3 class="text-start card-title" style="float: none; font-weight:500">
                        <i class="nav-icon fas fa-history"></i>
                        Audit Log
                    </h3>
                </div>
                <div class="card-body">
                    <table id="tbl_list" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Timestamp</th>
                                <th>Event</th>
                                <th>User</th>
                                <th>Auditable type</th>
                                <th>Host</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Timestamp</th>
                                <th>Event</th>
                                <th>User</th>
                                <th>Auditable type</th>
                                <th>Host</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <div class="card-footer clearfix">
                    <a href="/audit-log" class="btn btn-primary float-right"><i class="fas fa-eye"></i> Show more</a>
                </div>
            </div>
        </section>
        <section class="col-lg-5 connectedSortable">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="text-center card-title" style="float: none; font-weight:500">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        Data Instrumen Akreditasi
                        Program
                        Studi
                        (IAPS) Fakultas
                    </h3>
                </div>
                <div class="card-body pb-0">
                    <div class="row justify-content-center">
                        <section class="col-lg-9 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <h3 class="profile-username text-center">Program Studi</h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            @foreach ($prodi as $p)
                                <div class="card collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-university mr-1"></i>
                                            {{ $p->nama }}
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row m-1">
                                            <a href="/lkps?id={{ $p->id }}" class="btn btn-success col-md-4">LKPS</a>
                                        </div>
                                        <div class="row m-1">
                                            <a href="#" class="btn btn-primary col-md-4">LED</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        // console.log($('#tbl_list'));
        $(document).ready(function() {
            $('#tbl_list').DataTable({
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                paging: false,
                searching: false,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('/') }}',
                "order": [
                    [0, "desc"]
                ],

                columns: [{
                        data: 'created_at',
                        name: 'created_at'
                    },

                    {
                        data: 'log_event',
                        name: 'log_event'
                    },

                    {
                        data: 'user',
                        name: 'user'
                    }, {
                        data: 'auditable_type',
                        name: 'auditable_type'
                    },
                    {
                        data: 'ip_address',
                        name: 'ip_address'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });
        });
    </script>

@endpush
