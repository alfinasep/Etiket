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
                            <label for="jadwal_id" class="col-sm-4 col-form-label text-md-right">{{ __('Judul Film') }}</label>

                            <div class="col-md-6">
                            <select name="jadwal_id" id="jadwal_id" class="form-control input-sm">
                                <option> Pilih </option>
                                @foreach($jad as $va)
                                <option value="{{ $va->id}}">{{$va->judul_film}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kursi_id" class="col-md-4 col-form-label text-md-right">{{ __('Kursi') }}</label>

                            <div class="col-md-6">
                               <!-- <input id="kursi_id" type="text" class="form-control" name="kursi_id" autocomplete="off" required>
                               <span class="help-block text-danger"></span> -->
                                <select name="kursi_id" id="kursi_id" class="form-control input-sm">
                                <option> Pilih </option>
                                @foreach($kur as $va)
                                <option value="{{ $va->id}}">{{$va->nama_seat}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah_tiket" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Tiket') }}</label>

                            <div class="col-md-6">
                               <input id="jumlah_tiket" type="text" class="form-control" name="jumlah_tiket" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah_harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                               <input id="jumlah_harga" type="text" class="form-control" name="jumlah_harga" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ticket_auth" class="col-md-4 col-form-label text-md-right">{{ __('Id Self') }}</label>

                            <div class="col-md-6">
                               <input id="ticket_auth" type="text" class="form-control" name="ticket_auth" autocomplete="off" required>
                               <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ticket_pass" class="col-md-4 col-form-label text-md-right">{{ __('Password Self') }}</label>

                            <div class="col-md-6">
                               <input id="ticket_pass" type="Password" class="form-control" name="ticket_pass" autocomplete="off" required>
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