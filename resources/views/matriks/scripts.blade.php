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
                _skor = _grade * bobot
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

        function updateContent(params, _skor) {
            let bobot = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor_parent = $(params).siblings(".nilai")
            _grade = $(':radio', params).val()
            switch (_grade) {
                case '4':
                    console.log(skor_parent);
                    skor_parent.css("background-color", "rgb(0, 255, 21)");
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
