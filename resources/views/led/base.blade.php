@extends('layouts.apps')
@section('title', 'Dashboard')
@include('led.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <p><b>BAB : </b> {{ $tableValue['bab_title'] }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-5">
                        <p><b>Sub-Bagian : </b>{{ $tableValue['sub_bab'] }}
                        </p>
                        @if ($tableValue['sub_kriteria'])
                            <p><b>Sub-kriteria : </b>{{ $tableValue['sub_kriteria'] }}</p>
                        @endif
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('led.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500"> {{ $tableValue['sub_bab'] }}
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="callout callout-warning">
                    <p>
                        {{ $tableValue['keterangan'] }}
                    </p>
                </div>
                <form action="/led/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="id" type="hidden" value="{{ $idTable . $prodi->id }}">
                    <br>
                    <button id="edit_btn" class="btn btn-primary" onclick="edit()" type="button">
                        @if (!($value == null || $value->value == ''))
                            Edit
                        @else
                            Insert
                        @endif
                    </button>
                    <button id="cancel_btn" style="display: none; margin-bottom: 1rem;" class=" btn btn-warning"
                        onclick="cancel()" type="button">Cancel</button>
                    <button type="submit" style="display: none; margin-bottom: 1rem;" id="save_btn" class="btn btn-success"
                        type="button">Save</button>

                    <div id="preview_value" class="paper-preview">
                        @if (!($value == null || $value->value == ''))
                            {!! $value->value !!}
                        @else
                            No value
                        @endif
                    </div>
                    <textarea name="value_text" class="paper-preview" id="input_value">
                        @if ($value)
{{ $value->value }}
@endif
                    </textarea>
                </form>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection


@push('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
    <script>
        function edit() {
            $('#input_value').summernote({
                placeholder: 'Enter Text',
                tabsize: 2,
                focus: true,
                height: 600

            });
            $('#edit_btn').hide();
            $('#preview_value').hide();
            $('#save_btn').show();
            $('#cancel_btn').show();
        };


        function cancel() {
            $('#input_value').summernote('destroy');
            $('#edit_btn').show();
            $('#save_btn').hide();
            $('#cancel_btn').hide();
            $('#preview_value').show();
            $('#input_value').hide();

        };
    </script>
@endpush
