@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jenis Informasi</strong>
	<a href="{{url('jenis_info/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jenis Informasi</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Jenis Informasi</th>
			<th>Aksi</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $jenis_info)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $jenis_info->title or 'title kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('jenis_info/edit/'.$jenis_info->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="ubah">Edit</a>
	<a href  ="{{url('jenis_info/lihat/'.$jenis_info->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('jenis_info/hapus/'.$jenis_info->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop