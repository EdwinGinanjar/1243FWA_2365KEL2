@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data informasi</strong>
	<a href="{{url('informasi/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal dan Data informasi</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuainformasi as $informasi)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $informasi->judul or 'judul kosong'}}</td>
				<td>{{ $informasi->title or 'none'}}</td>
				<td><img width="50px" height="50px" src="{{asset('uploads/'.$informasi->gambar)}}"></td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('informasi/edit/'.$informasi->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('informasi/lihat/'.$informasi->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('informasi/hapus/'.$informasi->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop