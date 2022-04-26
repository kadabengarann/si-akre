<div class="modal fade" id="comment" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="/penilaian/101" id="comment_form">

                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-12 col-form-label">Masukkan Komentar
                            </label>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                        <input id="input_comment" type="url" name="commentPenilaian"
                                            class="fieldInsertInput form-control comment" required
                                            placeholder="Beri Komentar" @error('commentPenilaian') is-invalid @enderror
                                            value="">

                                    </div>
                                    <div class="invalid-feedback">
                                        @error('commentPenilaian')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="comment_submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
