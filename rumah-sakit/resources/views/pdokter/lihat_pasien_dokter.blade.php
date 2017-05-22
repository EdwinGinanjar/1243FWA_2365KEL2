@extends('dokter-master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('pasien_dokter') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data Pemeriksaan</strong>
</div>
<table class="table">

	<tr>
		<td>Nama Dokter</td>
		<td>:</td>
		<td>{{ $pasien_dokter->dokter->nama }}</td>
	</tr>
	<tr>
		<td>Nama Pasien</td>
		<td>:</td>
		<td>{{ $pasien_dokter->pasien->nama }}</td>
	</tr>
	<tr>
		<td>Layanan</td>
		<td>:</td>
		<td>{{ $pasien_dokter->layanan->title }}</td>
	</tr>
	<tr>
		<td>Tanggal Periksa</td>
		<td>:</td>
		<td>{{ $pasien_dokter->tanggal }}</td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>:</td>
		<td>{{ $pasien_dokter->keterangan }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $pasien_dokter-> created_at}}</td>	
	</tr>

	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $pasien_dokter->update_at}}</td>	
	</tr>

</table>
</div>
@stop