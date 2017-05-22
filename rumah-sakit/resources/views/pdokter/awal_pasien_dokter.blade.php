@extends('dokter-master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Perawatan</strong>
	<a href="{{url('pasien_dokter/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Data Perawatan</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama Dokter</th>
			<th>Nama Pasien</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuapasien_dokter as $pasien_dokter)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $pasien_dokter->dokter->nama or '-'}}</td>
				<td>{{ $pasien_dokter->pasien->nama or '-'}}</td>
				<td>{{ $pasien_dokter->tanggal or 'none'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('pasien_dokter/edit/'.$pasien_dokter->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('pasien_dokter/lihat/'.$pasien_dokter->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('pasien_dokter/hapus/'.$pasien_dokter->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop