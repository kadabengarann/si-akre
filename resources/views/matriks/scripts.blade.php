@push('scripts')
    <script>
        $(document).ready(function() {
            let bukti_field = document.querySelectorAll("td.bukti_penilaian");
            bukti_field.forEach(element => {
                if (element.querySelector(".row .hidden")) {
                    console.log(element);
                    @if (Auth::user()->level == 5)
                        element.querySelector(".row").innerHTML += '<p class="font-weight-normal m-0">Tidak ada bukti penilaian</p>';
                    @endif
                }

            });


        });
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.penilaian_check_field').click(function(event) {
            event.preventDefault();
            let _grade;
            let _skor;
            let _rev_id = {{ $reffer_id }};
            let _prodi_id = {{ $prodi->id }};
            let radio = this
            let row = $(this).parent()
            let bobot = parseFloat($(this).siblings(".bobot").data('bobot'))
            let id_temp = parseInt($(this).siblings(".matriks_id").data('id'));
            let _row_id = id_temp
            const _id = parseInt(`${id_temp}${_prodi_id}${_rev_id}`);
            console.log(_id);
            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(_prodi_id);
            console.log(row);
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
                        rev_id: _rev_id,
                        _token: _token
                    },
                    url: "/matriks/update",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data.success);
                        showSuccess(data.success)
                        updateContent(radio, _skor)
                         setTimeout(updateRowColor(row), 500);
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
            // @if (Auth::user()->level != 5)
            //     updateRowColor(row)
            // @endif

        };

        function updateRowColor(params) {
            let skor_parent = $(params).children(".nilai")
            let lihat_bukti_btn = $(params).find('#lihat_bukti')
            // let bukti = parseFloat($(params).siblings(".bobot").data('bobot'))
            // let bukti = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor
            if (isEmpty(skor_parent))
              skor = "";
            else
                skor = skor_parent.text();
            let bukti = lihat_bukti_btn.attr('href')
            console.log(skor);
            console.log(bukti + 'bisa');
            console.log(skor == "" ||  (bukti == ""||bukti == undefined))
            if (skor == "" || (bukti == ""||bukti == undefined)) {
                params.addClass("incomplete")
            } else {
                params.removeClass("incomplete");
            }
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

            let _rev_id = {{ $reffer_id }};
            let _prodi_id = {{ $prodi->id }};
            let _row_id = id_temp
            const _id = parseInt(`${id_temp}${_prodi_id}${_rev_id}`);
            console.log(_id);
            let _bukti = $(input_bukti).val()

            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(row);
         if (_bukti.length ==0||isValidHttpUrl(_bukti)) {

            $.ajax({
                data: {
                    id: _id,
                    bukti: _bukti,
                    row_id: _row_id,
                    prodi_id: _prodi_id,
                    rev_id: _rev_id,
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
                    @if (Auth::user()->level != 5)
                        updateRowColor(row)
                    @endif
                },
                error: function(data) {
                    showError("Gagal mengupdate data")
                    console.log('Error:', data);
                }
            });
            } else {
                showError("Invalid url bukti")
            }  
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
        function isEmpty( el ){
            return !$.trim(el.html())
        }
        
        function isValidHttpUrl(string) {
            let url;
            try {
                url = new URL(string);
            } catch (_) {
                return false;  
            }

            return url.protocol === "http:" || url.protocol === "https:";
        }
        function updateBukti(params, _data) {
            // let bukti = parseFloat($(params).siblings(".bobot").data('bobot'))
            let lihat_bukti_btn = $(params).find('#lihat_bukti')
            lihat_bukti_btn.attr("href", _data)
            if (_data == null) {
                lihat_bukti_btn.hide()
            } else {
                lihat_bukti_btn.show()
            }
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
