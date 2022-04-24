@extends('layouts.apps')
@section('title', 'Reviewer')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Reviewer</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Reviewer</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Table Reviewer</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tbl_list" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <!-- /.card-body -->
        <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
            <a class="btn btn-primary" href="/manage/add-reviewer"><i class="fas fa-user-plus"></i> Tambah Data</a>
        </div>
    </div>

    @foreach ($reviewer as $data)
        <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Delete confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete {{ $data->name }} ??
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <a href="/manage/reviewer/delete/{{ $data->id }}" class="btn btn-danger">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
                paging: true,
                searching: false,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('/manage/reviewer') }}',
                columns: [{
                        "data": "id",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        orderable: false,

                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
