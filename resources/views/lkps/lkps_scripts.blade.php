@push('scripts')
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $(document).ready(function() {
            let tsYear = 0
            @if (!$tsYear)
                $("#ts_modal").modal({
                backdrop: 'static',
                keyboard: false
                });
            @else
                tsYear = {{ $tsYear }}
            @endif

            let dateDropdown = document.getElementById('year-dropdown');

            let currentYear = new Date().getFullYear();
            let earliestYear = 2012;

            while (currentYear >= earliestYear) {
                let dateOption = document.createElement('option');
                dateOption.text = currentYear;
                dateOption.value = currentYear;
                if (currentYear === tsYear) {
                    dateOption.selected = true;
                }
                dateDropdown.add(dateOption);
                currentYear -= 1;
            }
        });

        $("#ts_submit").click(function() {
            let _value = parseInt($(this).parent().siblings("#year-dropdown").val());
            let _token = $('meta[name="csrf-token"]').attr('content');
            let _prodi_id = {{ $prodi->id }};
            let _id = 'ts_{{ $prodi->id }}';

            console.log(_id);
            $.ajax({
                data: {
                    id: _id,
                    value: _value,
                    prodi_id: _prodi_id,
                    _token: _token
                },
                url: "/utils/update",
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    console.log(data.success);
                    showSuccess(data.success)
                    $("#ts_modal").modal('hide');
                    // delay("slow").fadeIn();
                    setTimeout(location.reload.bind(location), 500);
                    // delay("slow").location.reload();

                },
                error: function(data) {
                    showError("Gagal mengupdate data")
                    console.log('Error:', data);
                }
            });
        });
        $("#ts_change").click(function() {
            $("#ts_modal").modal('show');
        });

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
