@extends('layouts.apps')
@section('title', 'Dashboard')
@include('led.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
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
                            <input name="prod_id" type="hidden" value="{{ $prodi->id }}">
                            <input name="form_id" type="hidden" value="{{ $idTable }}">
                            <input name="table_id" type="hidden" value="{{ $n['id'] }}">
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
                            <div id="area-input{{ $loop->iteration }}">
                                <textarea name="value_text" class="editor input_value_text" id="input_value{{ $loop->iteration }}">
                                    @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
{!! $multi_value[$loop->iteration - 1]['value'] !!}
@endif
                                </textarea>
                            </div>

                        </form>
                    @endforeach
                @else
                    <form action="/led/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="prod_id" type="hidden" value="{{ $prodi->id }}">
                        <input name="table_id" type="hidden" value="{{ $idTable }}">
                        <input name="form_id" type="hidden" value="{{ $idTable }}">

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
                        <div id="area-input">
                            <textarea name="value_text" id="input_value" class="editor input_value_text">
                        @if ($value)
{{ $value->value }}
@endif
                    </textarea>
                        </div>
                    </form>
                @endif
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection


@push('scripts')
    <script src="https://cdn.tiny.cloud/1/r25shxkzc5z7npgm5l5kmy3666vdso65340x7osixreouqfh/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.input_value_text',
            plugins: 'powerpaste print preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons nonbreaking hr',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | nonbreaking outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl hr',
            toolbar_sticky: true,
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            lists_indent_on_tab: true,
            nonbreaking_force_tab: true,
            paste_data_images: true,
            image_title: true,
            automatic_uploads: true,
            height : "480",
            powerpaste_allow_local_images: true,
            powerpaste_word_import: 'prompt',
            powerpaste_html_import: 'prompt',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function() {

                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
        $('#area-input').hide();

        function edit() {
            $('#area-input').show();
            $('#edit_btn').hide();
            $('#preview_value').hide();
            $('#save_btn').show();
            $('#cancel_btn').show();
        };


        function cancel() {
            $('#area-input').hide();
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
                
                $('#area-input{{ $loop->iteration }}').hide();
                function edit{{ $loop->iteration }}() {
                    $('#area-input{{ $loop->iteration }}').show();
                    $('#edit_btn{{ $loop->iteration }}').hide();
                    $('#preview_value{{ $loop->iteration }}').hide();
                    $('#save_btn{{ $loop->iteration }}').show();
                    $('#cancel_btn{{ $loop->iteration }}').show();
                };

                function cancel{{ $loop->iteration }}() {
                    $('#edit_btn{{ $loop->iteration }}').show();
                    $('#area-input{{ $loop->iteration }}').hide();
                    $('#save_btn{{ $loop->iteration }}').hide();
                    $('#cancel_btn{{ $loop->iteration }}').hide();
                    $('#preview_value{{ $loop->iteration }}').show();
                    $('#input_value{{ $loop->iteration }}').hide();

                };
            @endforeach
        </script>
    @endif

@endpush
