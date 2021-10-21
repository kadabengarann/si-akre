@extends('layouts.apps')
@section('title', 'Program Studi')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Program Studi</li>
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
            <h3 class="card-title">Table Program Studi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tbl_list" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode Prodi</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $m)
                        <tr>
                            <td>
                                {{ $m->getProdiID() }}
                            </td>
                            <td>
                                {{ $m->nama }}
                            </td>

                            <td>
                                <a class="btn btn-info" href='/prodi/detail/{{ $m->id }}'><i
                                        class="far fa-edit"></i> Detail</a>
                                <a class="btn btn-secondary" href='/prodi/edit/{{ $m->id }}'><i
                                        class="far fa-edit"></i> Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $m->id }}">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kode Prodi</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <!-- /.card-body -->
        <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
            <a class="btn btn-primary" href="/prodi/add"><i class="fas fa-user-plus"></i> Tambah Data</a>
        </div>
    </div>

    @foreach ($prodi as $data)
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
                        <a href="/prodi/delete/{{ $data->id }}" class="btn btn-danger">Yes</a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@endsection
@push('scripts')
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#tbl_list').DataTable({
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                paging: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('prodi') }}',
                columns: [{
                        data: 'kode_prodi',
                        name: 'kode_prodi'
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
    </script> --}}

@endpush
