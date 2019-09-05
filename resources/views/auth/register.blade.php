<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('assets/bootstrap/favicon.png') }}">
        <title>E-Tiket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- LINEARICONS -->
        <link rel="stylesheet" href="assets/login/fonts/linearicons/style.css">
        
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="assets/login/css/style.css">
        <link rel="icon" href="{{ asset('assets/bootstrap/yac.png') }}">
    </head>

    <body>

        <div class="wrapper">
            <div class="inner">
                <!-- <img src="assets/login/images/image-1.png" alt="" class="image-1"> -->
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <h3>New Account?</h3>
                        <div class="form-holder">
                            <span class="lnr lnr-user"></span>
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  placeholder="Name" autocomplete="off" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-holder">
                            <span class="lnr lnr-user"></span>
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email"autocomplete="off"  required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-holder">
                            <span class="lnr lnr-user"></span>
                            <label for="alamat" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="alamat" type="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat"autocomplete="off"  required>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-holder">
                            <span class="lnr lnr-user"></span>
                            <label for="no_tlp" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="no_tlp" type="no_tlp" class="form-control{{ $errors->has('no_tlp') ? ' is-invalid' : '' }}" name="no_tlp" value="{{ old('no_tlp') }}" placeholder="No Telepon"autocomplete="off"  required>

                                @if ($errors->has('no_tlp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_tlp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-holder">
                            <span class="lnr lnr-user"></span>
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" autocomplete="off" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-holder">
                            <span class="lnr lnr-user"></span>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmasi Password" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <!-- <img src="assets/login/images/image-2.png" alt="" class="image-2"> -->
            </div>
        </div>
        <script src="assets/login/js/jquery-3.3.1.min.js"></script>
        <script src="assets/login/js/main.js"></script>
    </body>
</html>
