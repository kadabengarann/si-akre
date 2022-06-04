@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>4. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
                        <p><b>Tabel : </b>4.1. Rata-rata beban DTPS per semester, pada TS
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Rata-rata beban DTPS per semester,
                    pada TS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama Dosen Tetap</th>
                            <th colspan="3">SKS Pengajaran<sup>1)</sup> Pada</th>
                            <th rowspan="2">SKS
                                Penelitian<sup>2)</sup></th>
                            <th rowspan="2">SKS
                                Pengabdian
                                pada Masy<sup>2)</sup></th>
                            <th colspan="2">SKS Manajemen<sup>3)</sup></th>
                            <th rowspan="2">Action</sup></th>
                        </tr>
                        <tr>
                            <th>PS Sendiri</th>
                            <th>PS Lain, PT Sendiri</th>
                            <th>PT Lain</th>
                            <th>PT Sendiri</th>
                            <th>PT Lain</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right">Jumlah *</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-right">Rata-rata **</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
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
    </section>
@endsection


@push('scripts')
    <script type="text/javascript">
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000
        });
        $(document).ready(function() {
            $('#tbl_lists').DataTable({
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api()
                    // converting to interger to find total
                    var intVal = function(i) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                    };
                    var sum_1 = api
                        .column(2)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    var sum_2 = api
                        .column(3)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sum_3 = api
                        .column(4)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sum_4 = api
                        .column(5)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sum_5 = api
                        .column(6)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    var sum_6 = api
                        .column(7)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    var sum_7 = api
                        .column(8)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer by showing the total with the reference of the column index 
                    $(api.column(1).footer()).html('Jumlah *');
                    $(api.column(2).footer()).html(sum_1);
                    $(api.column(3).footer()).html(sum_2);
                    $(api.column(4).footer()).html(sum_3);
                    $(api.column(5).footer()).html(sum_4);
                    $(api.column(6).footer()).html(sum_5);
                    $(api.column(7).footer()).html(sum_6);
                    $(api.column(8).footer()).html(sum_7);

                },
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                "language":  {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                },
                paging: true,
                searching: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('/lkps/view/401?id=' . $prodi->id) }}',
                columns: [{
                        "data": "id",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;

                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nm_dosen',
                        name: 'nm_dosen'
                    },

                    {
                        data: 'sks_pss',
                        name: 'sks_pss',
                        searchable: false
                    },
                    {
                        data: 'skd_psl_pts',
                        name: 'skd_psl_pts',
                        searchable: false
                    },
                    {
                        data: 'skd_ptl',
                        name: 'skd_ptl',
                        searchable: false
                    },
                    {
                        data: 'skd_penelitian',
                        name: 'skd_penelitian',
                        searchable: false
                    },
                    {
                        data: 'skd_pengmas',
                        name: 'skd_pengmas',
                        searchable: false
                    },
                    {
                        data: 'sksmen_pts',
                        name: 'sksmen_pts',
                        searchable: false
                    },
                    {
                        data: 'sksmen_ptl',
                        name: 'sksmen_ptl',
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [1, 'asc']
                ],


            });

            $('#tbl_lists tbody').on('click', ' tr .delete_confirm', function() {
                event.preventDefault();
                var form = $(this).closest("form");
                var name = $(this).data("name");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });

            @if (session('pesan'))
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('pesan') }}"
                })
            @endif
        });
    </script>
@endpush
