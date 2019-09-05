<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/bootstrap/yac.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    E-Tiket
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/admin/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/admin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <center>
          <h3> E-Tiket </h3>
        </center>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/home">
              <i class="nc-icon nc-bell-55"></i>
              <p> Now Playing </p>
            </a>
          </li>
          <li>
            <a href="/film">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p> Daftar Film </p>
            </a>
          </li>
          <li>
            <a href="/jadwal">
              <i class="nc-icon nc-button-play"></i>
              <p> Jadwal Tayang</p>
            </a>
          </li>
          <li>
            <a href="/teater">
              <i class="nc-icon nc-basket"></i>
              <p> Studio</p>
            </a>
          </li>
          <li>
            <a href="/seat">
              <i class="nc-icon nc-layout-11"></i>
              <p> Seat</p>
            </a>
          </li>
          <li>
            <a href="/transaksi">
              <i class="nc-icon nc-cart-simple"></i>
              <p> Pemesanan Tiket</p>
            </a>
          </li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                    {{ Auth::user()->name }} 
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <br><br><br>
            <a class="navbar-brand" href="#pablo">E-Tiket Bioskop</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          
        </div>
      </nav><br>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
      <div class="content">
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
            <section class="content-header">
                    @yield('content')
            </section>
    <!-- /.content -->
        </div>
      </div>

      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="/home" target="_blank">E-Tiket Bioskop</a>
                </li>
                <li>
                  <a href="https://aseptrianti.blogspot.com/" target="_blank">Blog</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by tiket bioskop
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/admin/js/core/jquery.min.js"></script>
  <script src="assets/admin/js/core/popper.min.js"></script>
  <script src="assets/admin/js/core/bootstrap.min.js"></script>
  <script src="assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/admin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/admin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/admin/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/admin/demo/demo.js"></script>
</body>

</html>