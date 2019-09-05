<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="form-seat" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                            <label for="nama_seat" class="col-sm-4 col-form-label text-md-right">{{ __('Nama Seat') }}</label>

                            <div class="col-md-6">
                                <input id="nama_seat" type="text" class="form-control" name="nama_seat" autocomplete="off" required autofocus>
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teater_id" class="col-md-4 col-form-label text-md-right">{{ __('Audi') }}</label>

                            <div class="col-md-6">
                                 <select name="teater_id" id="teater_id" class="form-control input-sm">
                                    @foreach($te as $va)
                                    <option value="{{ $va->id}}">{{$va->nama_teater}}</option>
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