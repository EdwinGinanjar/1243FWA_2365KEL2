<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title', 'Rumah Sakit Kita') | Admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
		body{
			padding-top: 70px;
			padding-bottom: 70px
		}
		.startter-template{
			padding: 40px 15px;
			text-align: center;
		}

		.form-horizontal{
			padding: 15px 10px;
		}

		footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" class="navbar-brand">RS.Kita</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pasien
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('pasien')}}">Tambah User Pasien</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dokter
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('dokter')}}">Tambah User Dokter</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{url('spesialis')}}">Data Spesialis</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{url('jadwal')}}">Jadwal dokter</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{url('pasien_dokter')}}">Data Rawat</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informasi
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('informasi')}}">Kelola Informasi</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengaturan
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('layanan')}}">Layanan</a>
							</li>
						</ul>
						<li>
						<a href="{{url('logout')}}">Logout</a>
						</li>
					</li>					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if(Session::has('informasi'))
			<div class="alert alert-info">
				<strong>Informasi :</strong>
				{{Session::get('informasi')}}
			</div>
			@endif

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			@yield('container')
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container" style="color: salmon">
			Copyright &copy; Kelompok2 2017</span></a>
		</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		$(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>
</html>