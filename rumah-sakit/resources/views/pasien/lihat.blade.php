@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('pasien') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data Pasien</strong>
</div>
<table class="table">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>{{ $pasien->nama }}</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td>{{ $pasien->ttl }}</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>{{ $pasien->jenkel }}</td>
	</tr>
	<tr>
		<td>No Tlp</td>
		<td>:</td>
		<td>{{ $pasien->tlp }}</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>{{ $pasien->alamat }}</td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td>{{ $pasien->pekerjaan }}</td>
	</tr>
	
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $pasien-> created_at}}</td>	
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $pasien-> update_at}}</td>	
	</tr>
</table>
</div>
@stop