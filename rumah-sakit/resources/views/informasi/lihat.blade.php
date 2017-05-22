@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('informasi') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data informasi</strong>
</div>
<table class="table">

	<tr>
		<td>Juduk</td>
		<td>:</td>
		<td>{{ $informasi->judul }}</td>
	</tr>
	<tr>
		<td>Isi</td>
		<td>:</td>
		<td>{{ $informasi->title }}</td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td>:</td>
		<td>{{ $informasi->gambar }}</td>
	</tr>
	
	<tr>
		<td>Jenis Informasi</td>
		<td>:</td>
		<td>{{ $informasi->jenis_info->title }}</td>
	</tr>

	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $informasi-> created_at}}</td>	
	</tr>

	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $informasi->update_at}}</td>	
	</tr>

</table>
</div>
@stop