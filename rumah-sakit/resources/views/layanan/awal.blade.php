@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data layanan</strong>
	<a href="{{url('layanan/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>layanan</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>layanan</th>
			<th>Aksi</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $layanan)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $layanan->title or 'title kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('layanan/edit/'.$layanan->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="ubah">Edit</a>
	<a href  ="{{url('layanan/lihat/'.$layanan->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('layanan/hapus/'.$layanan->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop