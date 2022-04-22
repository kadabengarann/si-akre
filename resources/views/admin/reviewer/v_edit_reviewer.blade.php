@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Edit Profile</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/manage/reviewer">Reviewer</a></li>
            <li class="breadcrumb-item active">Edit Detail Reviewer</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="card p-4">
        <form method="POST" enctype="multipart/form-data" action="/manage/reviewer/update/{{ $reviewer->id }}">
            @csrf
            <div class="row">
                <div class="col-md-5 border-right form-group">
                    <div class="p-3 pb-2">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8"><label class="labels">ID</label><input type="text"
                                    id="username-input" class="form-control @error('username') is-invalid @enderror"
                                    placeholder="ID Number" value="{{ $reviewer->user->username }}" name="username"
                                    readonly>
                                <div class="invalid-feedback">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex align-items-center">
                                <a id="toggle-disable-form" class="btn btn-secondary btn-sm"> Edit
                                    ID</a>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Nama</label><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                    value="{{ $reviewer->nama }}" name="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-12"><label class="labels">Program Studi</label>
                                <select class="form-control @error('id_prodi') is-invalid @enderror" id="subject"
                                    name="id_prodi">
                                    <option value="{{ $reviewer->prodi_id }}" selected disabled hidden>
                                        {{ $reviewer->prodi->nama }}</option>
                                    @foreach ($prodi as $m)
                                        <option value="{{ $m->id }}">{{ $m->nama }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('id_prodi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div> --}}
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text"
                                    class="form-control @error('birthplace') is-invalid @enderror"
                                    value="{{ $reviewer->tmp_lahir }}" placeholder="" name="birthplace">
                                <div class="invalid-feedback">
                                    @error('birthplace')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input
                                    type="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{ $reviewer->tgl_lahir }}" name="date">
                                <div class="invalid-feedback">
                                    @error('date')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Alamat"
                                    name="address">{{ $reviewer->alamat }}</textarea>
                                <div class="invalid-feedback">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <img src="{{ url('img/rev/' . $reviewer->img_url) }}" alt="" srcset="" width="200px">
                        <div class="form-group">
                            <b>Edit Foto Profile</b><br />
                            <input type="file" class="form-control" name="foto_reviewer">
                            <div class="text-danger">
                                @error('foto_reviewer')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
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
@push('scripts')
    <script>
        $('#toggle-disable-form').on('click', function(event, state) {
            var status = $('#username-input').prop('readonly');
            $('#username-input').prop('readonly', !status);
        });
    </script>
@endpush
