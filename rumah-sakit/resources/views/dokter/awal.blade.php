@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Dokter</strong>
	<a href="{{url('dokter/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal dan Data Dokter</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama dokter</th>
			<th>Spesialis</th>
			<th>Jadwal</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuadokter as $dokter)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $dokter->nama or 'nama kosong'}}</td>
				<td>{{ $dokter->spesialis->title or 'umum'}}</td>
				<td>{{ $dokter->jadwal->title or 'freelancer'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('dokter/edit/'.$dokter->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('dokter/lihat/'.$dokter->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('dokter/hapus/'.$dokter->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop