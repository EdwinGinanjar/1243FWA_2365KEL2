@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('jenis_info') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Jenis Informasi</strong>
</div>
<table class="table">
	<tr>
		<td>title</td>
		<td>:</td>
		<td>{{ $jenis_info->title }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $jenis_info-> created_at}}</td>	
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $jenis_info-> update_at}}</td>	
	</tr>
</table>
</div>
@stop