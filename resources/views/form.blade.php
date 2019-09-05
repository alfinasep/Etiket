<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="form-film" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">

                        <div class="form-group row">
                            <label for="judul_film" class="col-sm-4 col-form-label text-md-right">{{ __('Judul Film') }}</label>

                            <div class="col-md-6">
                                <input id="judul_film" type="text" class="form-control" name="judul_film" autocomplete="off" required autofocus>
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi_film" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Film') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi_film" type="text" class="form-control" name="deskripsi_film" autocomplete="off" required>
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rating_film" class="col-md-4 col-form-label text-md-right">{{ __('Rating Film') }}</label>

                            <div class="col-md-6">
                               <input id="rating_film" type="text" class="form-control" name="rating_film" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="produsen_film" class="col-md-4 col-form-label text-md-right">{{ __('Director Film') }}</label>

                            <div class="col-md-6">
                               <input id="produsen_film" type="text" class="form-control" name="produsen_film" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="durasi_film" class="col-md-4 col-form-label text-md-right">{{ __('Durasi Film') }}</label>

                            <div class="col-md-6">
                               <input id="durasi_film" type="text" class="form-control" name="durasi_film" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        
                    </div>
                    
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-save">Submit</button>
                        </div>

            </form>
        </div>
    </div>
</div>