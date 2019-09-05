<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('assets/bootstrap/favicon.png') }}">
        <title>E-Tiket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LINEARICONS -->
        <link rel="icon" href="{{ asset('assets/bootstrap/yac.png') }}">
        <link rel="stylesheet" href="assets/login/fonts/linearicons/style.css">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="assets/login/css/style.css">
        <style type="text/css">
            a:link, a:visited{
                border: none;
                width: 100%;
                height: 49px;
                margin-top: 5px;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0;
                background: #87CEFA;
                color: #fff;
                text-transform: uppercase;
                font-family: "Muli-SemiBold";
                font-size: 15px;
                letter-spacing: 2px;
                transition: all 0.5s;
                position: relative;
                overflow: hidden; 
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="inner">
                <!-- <img src="assets/login/images/image-1.png" alt="" class="image-1"> -->
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                    <h3>Order tiket</h3>
                    <h3>Bioskop</h3>
                    <div class="form-holder">
                        <span class="lnr lnr-user"></span>
                        <input type="email" id="email" name="email" for="email" class="form-control" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-phone-handset"></span>
                        <input type="password" id="password" name="password" for="password"  class="form-control" placeholder="password" autocomplete="off">
                    </div><br>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    <button>
                        <span>Login</span>
                    </button><br>
                    <center>
                        <a href="register">
                            Register
                        </a>
                    </center>

                </form>
                <!-- <img src="assets/login/images/image-2.png" alt="" class="image-2"> -->
            </div>
        </div>
        <script src="assets/login/js/jquery-3.3.1.min.js"></script>
        <script src="assets/login/js/main.js"></script>
    </body>
</html>

