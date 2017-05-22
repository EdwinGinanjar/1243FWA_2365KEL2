<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title', 'Rumah Sakit Kita') | Dokter</title>
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
				<a href="{{url('/')}}" class="navbar-brand">Rumah Sakit</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pasien
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('lihat_pasien')}}">Data Pasien</a>
							</li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dokter
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="{{url('awal_rawat')}}">Rawat</a>
							</li>
						</ul>
					</li>

					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@foreach($dokter as $dr) {{$dr->nama}} @endforeach
						<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('edit_dokter/'.$dr->id)}}">Edit Profil</a>
							</li>
							
							<li class="divider"></li>
							<li>
							<a href="{{url('logout')}}">Logout</a>
							</li>
						</ul>
						
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
			create by <a href="http://instagram.com/fannyaqmarina"><span><i class="fa fa-instagram" style="color: salmon"></i>@fannyaqmarina</span></a>
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