@extends('awal')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Spesialis</strong>
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
	<a href  ="{{url('spls/lihat/'.$spesialis->id)}}" class="btn btn-winfo btn-xs" data-toogle="tooltrip" data-placement="top" title="lihat">Lihat</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop