@push('scripts')
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $(".input_skor_trigg").click(function() {
            var text = $(this).data('skor');
            console.log($('#skor_penilaian').find('.modal-body input'));
            console.log(parseInt(text));
            $('#skor_penilaian').find('.modal-body input').attr('value', parseInt(text))
        });
        $(".input_alasan_trigg").click(function() {
            var text = $(this).data('penilaian');
            console.log($('#text_penilaian').find('.modal-body textarea'));
            $('#text_penilaian').find('.modal-body textarea').text($.trim(text))
        });

        $('.penilaian_check_field').click(function(event) {
            event.preventDefault();
            let _grade;
            let _skor;
            let _prodi_id = {{ $prodi->id }};
            let radio = this
            let bobot = parseFloat($(this).siblings(".bobot").data('bobot'))
            let id_temp = parseInt($(this).siblings(".matriks_id").data('id'));
            let _row_id = id_temp
            const _id = parseInt(`${id_temp}${_prodi_id}`);
            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(_prodi_id);
            if (event.target.type !== 'radio') {
                $(':radio', this).trigger('click');

                _grade = $(':radio', this).val()
                _skor = _grade * bobot / 4
                $.ajax({
                    data: {
                        id: _id,
                        row_id: _row_id,
                        grade: _grade,
                        skor: _skor,
                        prodi_id: _prodi_id,
                        _token: _token
                    },
                    url: "/matriks/update",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data.success);
                        showSuccess(data.success)
                        updateContent(radio, _skor)

                    },
                    error: function(data) {
                        showError("Gagal mengupdate data")
                        console.log('Error:', data);
                    }
                });
            }
        });

        function notField(params, _skor) {
            let bobot = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor_parent = $(params).siblings(".nilai")
            _grade = $(':radio', params).val()
            switch (_grade) {
                case '4':
                    console.log(skor_parent);
                    skor_parent.css("background-color", "#0c9");
                    skor_parent.css("color", "#fff");
                    break;
                case '3':
                    skor_parent.css("background-color", "orange");
                    skor_parent.css("color", "#fff");
                    break;
                case '2':
                    skor_parent.css("background-color", "yellow");
                    skor_parent.css("color", "#fff");
                    break;
                case '1':
                    skor_parent.css("background-color", "rgb(255, 68, 68)");
                    skor_parent.css("color", "#fff");
                    break;

                default:
                    break;
            }
            skor_parent.text(_skor)
        };

        function updateContent(params, _skor) {
            let bobot = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor_parent = $(params).siblings(".nilai")
            _grade = $(':radio', params).val()
            switch (_grade) {
                case '4':
                    console.log(skor_parent);
                    skor_parent.css("background-color", "#0c9");
                    skor_parent.css("color", "#fff");
                    break;
                case '3':
                    skor_parent.css("background-color", "orange");
                    skor_parent.css("color", "#fff");
                    break;
                case '2':
                    skor_parent.css("background-color", "yellow");
                    skor_parent.css("color", "#fff");
                    break;
                case '1':
                    skor_parent.css("background-color", "rgb(255, 68, 68)");
                    skor_parent.css("color", "#fff");
                    break;

                default:
                    break;
            }
            skor_parent.text(_skor)


        };
        $('.penilaian_check_field').hover(function(event) {
            $(this).find('.tooltiptext').addClass("active")
        }, function(event) {
            $(this).find('.tooltiptext').removeClass("active")
        })
        $('#bukti_submit').click(function(event) {
            event.preventDefault();


            let id_temp = parseInt($('#bukti_penilaian').find('#input_row_id').val());
            let row = $(`.matriks_id[data-id="${id_temp}"]`).parent()

            let _prodi_id = {{ $prodi->id }};
            let _row_id = id_temp
            const _id = parseInt(`${id_temp}${_prodi_id}`);
            let _bukti = $(input_bukti).val()

            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(row);

            $.ajax({
                data: {
                    id: _id,
                    bukti: _bukti,
                    _token: _token
                },
                url: "/matriks/update-bukti",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    console.log(data.success);
                    showSuccess(data.success)
                    $('#bukti_penilaian').modal('hide')
                    updateBukti(row, data.data)

                },
                error: function(data) {
                    showError("Gagal mengupdate data")
                    console.log('Error:', data);
                }
            });
        });
        $('#bukti_penilaian').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('row') // Extract info from data-* attributes
            var url_data = button.data('url') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#input_row_id').val(recipient)
            modal.find('#input_bukti').val(url_data)
            // modal.find('.modal-body input').val(recipient)
        })

        function updateBukti(params, _data) {
            // let bukti = parseFloat($(params).siblings(".bobot").data('bobot'))

            let lihat_bukti_btn = $(params).find('#lihat_bukti')
            lihat_bukti_btn.attr("href", _data)
            let bukti_btn = $(params).find('.input_bukti_trigg')
            bukti_btn.data('url', _data)


        };

        function showSuccess(message) {
            Toast.fire({
                icon: 'success',
                title: message
            })
        }

        function showError(message) {
            Toast.fire({
                icon: 'error',
                title: message
            })
        }
    </script>
@endpush
