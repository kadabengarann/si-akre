@extends('layouts.apps')
@section('title', 'Program Studi {{ $prodi->nama }}')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Edit Detail Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/prodi">Program Studi</a></li>
            <li class="breadcrumb-item active">Edit Detail {{ $prodi->nama }}</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif<!-- /.container-fluid -->
    <div class="card p-4">

        <form method="POST" enctype="multipart/form-data" action="/prodi/update/{{ $prodi->id }}">
            @csrf
            <div class="row">
                <div class="col-md-5 border-right form-group">
                    <div class="p-3 pb-2">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data Program Studi</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">ID</label><input type="text"
                                    class="form-control @error('id') is-invalid @enderror" placeholder="ID Number"
                                    value="{{ $prodi->getProdiID() }}" name="id" maxlength="10" readonly>
                                <div class="invalid-feedback">
                                    @error('id')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Jenis Program</label><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                    value="Program Sarjana" name="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Nama Program Studi</label><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                    value="{{ $prodi->nama }}" name="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">

                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="save_record" type="submit"
                                value="save_record"><i class="far fa-edit"></i> Ubah</button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
