@push('scripts')
    <script>
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
            var score;
            var bobot = parseFloat($(this).siblings(".bobot").data('bobot'))
            var nilai = $(this).siblings(".nilai")
            if (event.target.type !== 'radio') {
                $(':radio', this).trigger('click');
                score = $(':radio', this).val()
                switch (score) {
                    case '4':
                        console.log(nilai);
                        nilai.css("background-color", "green");
                        break;
                    case '3':
                        nilai.css("background-color", "orange");
                        break;
                    case '2':
                        nilai.css("background-color", "yellow");
                        break;
                    case '1':
                        nilai.css("background-color", "red");
                        break;

                    default:
                        break;
                }

                score *= bobot
                nilai.text(score)
            }

        });
        $('.penilaian_check_field').click(function(event) {
            var score;
            var nilai = $(this).parent(".warna")
            if (event.target.type !== 'radio') {
                $(':radio', this).trigger('click');
                score = $(':radio', this).val()
                switch (score) {
                    case '4':
                        console.log(nilai);
                        nilai.css("background-color", "green");
                        break;
                    case '3':
                        nilai.css("background-color", "orange");
                        break;
                    case '2':
                        nilai.css("background-color", "yellow");
                        break;
                    case '1':
                        nilai.css("background-color", "red");
                        break;

                    default:
                        break;
                }
            }

        });
        $('.penilaian_check_field').hover(function(event) {
            $(this).find('.tooltiptext').addClass("active")
        }, function(event) {
            $(this).find('.tooltiptext').removeClass("active")
        })
    </script>
@endpush
