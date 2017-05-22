@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('dokter') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data Dokter</strong>
</div>
<table class="table">

	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>{{ $dokter->nama }}</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td>{{ $dokter->ttl }}</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>{{ $dokter->jenkel }}</td>
	</tr>
	<tr>
		<td>No Tlp</td>
		<td>:</td>
		<td>{{ $dokter->tlp }}</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>{{ $dokter->alamat }}</td>
	</tr>
	<tr>
	<tr>
		<td>Spesialis</td>
		<td>:</td>
		<td>{{ $dokter->spesialis->title }}</td>
	</tr>
	
	<tr>
		<td>Nama Matakuliah</td>
		<td>:</td>
		<td>{{ $dokter->jadwal->title }}</td>
	</tr>

	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $dokter-> created_at}}</td>	
	</tr>

	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $dokter->update_at}}</td>	
	</tr>

</table>
</div>
@stop