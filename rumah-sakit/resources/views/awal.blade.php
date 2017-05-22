<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rumah Sakit Kita</title>
    @yield('head')
    <link rel="stylesheet" href="{{asset('doctor/css/font-awesome.min.css')}}'">
    <link rel="stylesheet" href="doctor/css/bootstrap.min.css">
    <link rel="stylesheet" href="doctor/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('doctor/js/modernizr.js')}}"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .container{
            padding-top: 0px;
        }
    </style>
</head>
<body>

     <!-- Navigation -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 header-logo">
                    <br>
                    <a href="index.html"><img src="{{asset('doctor/img/logo.png')}}" alt="" class="img-responsive logo"></a>
                </div>

                <div class="col-md-15">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          
                          <ul class="nav navbar-nav navbar-right">
                            <li><a class="menu" href="{{url('home')}}" >Home</a></li>
                            
                             <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang Rs.Kita<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('tentang')}}">Profil</a></li>
                                   <!--  <li><a href="{{url('tentang/kedua')}}">Sejarah</a></li> -->
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('home_layanan')}}">Layanan</a></li>
                                    <li><a href="{{url('home_fasilitas')}}">Fasilitas</a></li>
                                    <li><a href="{{url('home_umum')}}">Umum</a></li>
                                </ul>
                            </li>
                             
                            <li><a class="menu" href="{{url('jdwl')}}">Dokter</a></li>
                            <li><a class="menu" href="{{url('about')}}">Tentang</a></li>
                            <li><a class="menu" href="{{url('logout')}}"> Login</a></li>
                          </ul>
                        </div><!-- /navbar-collapse -->
                      </div><!-- / .container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<!-- Header -->

        <div class="container">
            <div class="row">
<br>
<br>
<br>
<br>
<br>
<br>
                       @yield('container')
				<!-- /.container -->
</div>
</div>

    <!-- footer starts here -->
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 footer-para">
                    <p>Copyright &copy; Kelompok2 2017</p>
                </div>
                <div class="col-xs-6 text-right">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- script tags
    ============================================================= -->
    <script src="{{asset('doctor/js/jquery-2.1.1.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('doctor/js/gmaps.js')}}"></script>
    <script src="{{asset('doctor/js/smoothscroll.js')}}"></script>
    <script src="{{asset('doctor/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('doctor/js/custom.js')}}"></script>    </body>
</html>
