@extends('awal')
@section('container')
<div class="panel panel-warning">
<table class="table">
@foreach($su as $umum)
	<div>  <h2>{{ $umum->judul }}</h2></div>
<div style="text-align:justify;width:100%; background-color: gainsboro; border:0px solid #000099; padding:6px;">
<img width="150" height="200" src="{{asset('uploads/'.$umum->gambar)}}" alt="" style="float:left; margin:0 8px 4px 0;"><h3>{{ $umum->title }}</h3>   </div>

<br>
	
	@endforeach
@stop