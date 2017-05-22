@extends('awal')
@section('container')

@foreach($sf as $fasilitas)



<div>  <h2>{{ $fasilitas->judul }}</h2></div>
<div style="text-align:justify;width:100%;background-color: gainsboro; border:1px solid #000099; padding:6px;">
<img width="150" height="200" src="{{asset('uploads/'.$fasilitas->gambar)}}" alt="" style="float:left; margin:0 8px 4px 0;"><h3>{{ $fasilitas->title }} </h3>  </div>

<br>
	
	@endforeach

@stop