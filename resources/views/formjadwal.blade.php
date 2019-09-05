<div class="modal fade" id="modal-form" tabindex="1" role="dialog" data-keyboard="true" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="form-jadwal" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                    <div class="modal-body">
                        <input type="hidden" id="id_jadwal" name="id_jadwal">

                        <div class="form-group row">
                            <label for="film_id" class="col-sm-4 col-form-label text-md-right">{{ __('Film') }}</label>

                            <div class="col-md-6">
                                 <select name="film_id" id="film_id" class="form-control input-sm">
                                    @foreach($jns as $va)
                                    <option value="{{ $va->id}}">{{$va->judul_film}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hari" class="col-md-4 col-form-label text-md-right">{{ __('Hari Tayang') }}</label>

                            <div class="col-md-6">
                                <input id="hari" type="text" class="form-control" name="hari" autocomplete="off" required>
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jam" class="col-md-4 col-form-label text-md-right">{{ __('Jam Tayang') }}</label>

                            <div class="col-md-6">
                               <input id="jam" type="text" class="form-control" name="jam" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Tiket') }}</label>

                            <div class="col-md-6">
                               <input id="harga" type="text" class="form-control" name="harga" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="teater_id" class="col-md-4 col-form-label text-md-right">{{ __('Audi') }}</label>

                            <div class="col-md-6">
                                 <select name="teater_id" id="teater_id" class="form-control input-sm">
                                    @foreach($tea as $yaa)
                                    <option value="{{ $yaa->id}}">{{$yaa->nama_teater}}</option>
                                    @endforeach
                                </select>
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