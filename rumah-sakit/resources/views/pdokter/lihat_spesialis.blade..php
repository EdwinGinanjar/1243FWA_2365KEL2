@extends('dokter-master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('pasien') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data Pasien</strong>
</div>
<table class="table">
@foreach($data as $spesialis)
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>{{ $dokter->nama }}</td>
	</tr>
	<tr>
		<td>Spesialis</td>
		<td>:</td>
		<td>{{ $spesialis->title }}</td>
	</tr>
	
@endforeach
</table>
</div>
@stop