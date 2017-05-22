@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Spesialis</strong>
	<a href="{{url('spesialis/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Spesialis</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Spesialis</th>
			<th>Aksi</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $spesialis)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $spesialis->title or 'title kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('spesialis/edit/'.$spesialis->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltrip" data-placement="top" title="ubah">Edit</a>
	<a href  ="{{url('spesialis/lihat/'.$spesialis->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('spesialis/hapus/'.$spesialis->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltrip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop