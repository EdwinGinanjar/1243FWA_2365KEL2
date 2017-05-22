@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('jadwal') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data jadwal</strong>
</div>
<table class="table">
	<tr>
		<td>title</td>
		<td>:</td>
		<td>{{ $jadwal->title }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $jadwal-> created_at}}</td>	
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $jadwal-> update_at}}</td>	
	</tr>
</table>
</div>
@stop