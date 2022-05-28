@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>5.3. Pendayagunaan Sarana Utama Laboratorium</p>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Pendayagunaan Sarana Utama
                    Laboratorium</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sarana/ Prasarana</th>
                            <th>Daya Tampung</th>
                            <th>Luas Ruang (m2)</th>
                            <th>Jumlah Mahasiswa yang Dilayani Lab</th>
                            <th>Jam Layanan</th>
                            <th>Perangkat yang Dimiliki</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right">Jumlah *</th>
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
</section> @endsection
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

                    // Update footer by showing the total with the reference of the column index 
                    $(api.column(1).footer()).html('Jumlah *');
                    $(api.column(2).footer()).html(sum_1);
                    $(api.column(3).footer()).html(sum_2);
                    $(api.column(4).footer()).html(sum_3);
                    $(api.column(5).footer()).html(sum_4);
                    $(api.column(6).footer()).html(sum_5);


                },
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                paging: true,
                searching: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('/lkps/view/503?id=' . $prodi->id) }}',
                columns: [{
                        "data": "id",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;

                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'sar_pra',
                        name: 'sar_pra'
                    },

                    {
                        data: 'dy_tamp',
                        name: 'dy_tamp',
                        searchable: false
                    },
                    {
                        data: 'luasr',
                        name: 'luasr',
                        searchable: false
                    },
                    {
                        data: 'jmd',
                        name: 'jmd',
                        searchable: false
                    },
                    {
                        data: 'jam_lay',
                        name: 'jam_lay',
                        searchable: false
                    },
                    {
                        data: 'prngkt',
                        name: 'prngkt',
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
                    [0, 'asc']
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
