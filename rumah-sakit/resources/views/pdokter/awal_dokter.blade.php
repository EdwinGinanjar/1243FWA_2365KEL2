@extends('dokter-master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Dokter</strong>
	<!-- <a href="{{url('dokter/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal dan Data Dokter</a> -->
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
			@foreach($dokter as $dr)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $dr->nama or 'nama kosong'}}</td>
				<td>{{ $dr->spesialis->title or 'umum'}}</td>
				<td>{{ $dr->jadwal->title or 'freelancer'}}</td>
				<td>
					<div class="btn-group" role="group">
	<!-- <a href="{{url('dr/edit/'.$dr->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a> -->
	<a href  ="{{url('dr/lihat/'.$dr->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<!-- <a href="{{url('dr/hapus/'.$dr->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
	 -->				</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop