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
                <h3 class="text-center card-title" style="float: none; font-weight:500">
                    @if ($tableValue['sub_kriteria'])
                        {{ $tableValue['sub_kriteria'] }}
                    @else
                        {{ $tableValue['sub_bab'] }}
                    @endif
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="callout callout-warning">
                    <p>
                        {!! $tableValue['keterangan'] !!}
                    </p>
                </div>

                @if (isset($tableValue['multi_input']))
                    @foreach ($tableValue['multi_input_value'] as $n)
                        <h4 class="text-start card-title mt-5 mb-2" style="float: none; font-weight:500">
                            {{ $n['title'] }}
                        </h4>
                        <div class="callout callout-secondary">
                            <p>
                                {!! $n['keterangan'] !!}
                            </p>
                        </div>
                        <form action="/led/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="id" type="hidden" value="{{ $n['id'] . $prodi->id }}">
                            <br>
                            <button id="edit_btn{{ $loop->iteration }}" class="btn btn-primary"
                                onclick="edit{{ $loop->iteration }}()" type="button">
                                @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
                                    Edit
                                @else
                                    Insert
                                @endif
                            </button>
                            <button id="cancel_btn{{ $loop->iteration }}" style="display: none; margin-bottom: 1rem;"
                                class=" btn btn-warning" onclick="cancel{{ $loop->iteration }}()"
                                type="button">Cancel</button>
                            <button type="submit" style="display: none; margin-bottom: 1rem;"
                                id="save_btn{{ $loop->iteration }}" class="btn btn-success" type="button">Save</button>

                            <div id="preview_value{{ $loop->iteration }}" class="paper-preview">
                                @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
                                    {!! $multi_value[$loop->iteration - 1]['value'] !!}
                                @else
                                    No value
                                @endif
                            </div>
                            <textarea name="value_text" class="editor" id="input_value{{ $loop->iteration }}">
                                @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
{!! $multi_value[$loop->iteration - 1]['value'] !!}
@endif
                    </textarea>
                        </form>
                    @endforeach
                @else
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
                        <button type="submit" style="display: none; margin-bottom: 1rem;" id="save_btn"
                            class="btn btn-success" type="button">Save</button>

                        <div id="preview_value" class="paper-preview">
                            @if (!($value == null || $value->value == ''))
                                {!! $value->value !!}
                            @else
                                No value
                            @endif
                        </div>
                        <textarea name="value_text" id="input_value" class="editor">
                        @if ($value)
{{ $value->value }}
@endif
                    </textarea>
                    </form>
                @endif
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection


@push('scripts')
    <script>
        $('#input_value').hide();

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
    @if (isset($tableValue['multi_input']))
        <script>
            @foreach ($tableValue['multi_input_value'] as $n)
                console.log({{ $loop->iteration }});
                function edit{{ $loop->iteration }}() {
                $('#input_value{{ $loop->iteration }}').summernote({
                placeholder: 'Enter Text',
                tabsize: 2,
                focus: true,
                height: 600
                });
                $('#edit_btn{{ $loop->iteration }}').hide();
                $('#preview_value{{ $loop->iteration }}').hide();
                $('#save_btn{{ $loop->iteration }}').show();
                $('#cancel_btn{{ $loop->iteration }}').show();
                };
            
                function cancel{{ $loop->iteration }}() {
                $('#input_value{{ $loop->iteration }}').summernote('destroy');
                $('#edit_btn{{ $loop->iteration }}').show();
                $('#save_btn{{ $loop->iteration }}').hide();
                $('#cancel_btn{{ $loop->iteration }}').hide();
                $('#preview_value{{ $loop->iteration }}').show();
                $('#input_value{{ $loop->iteration }}').hide();
            
                };
            @endforeach
        </script>
    @endif

@endpush
