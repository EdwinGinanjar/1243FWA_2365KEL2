@extends('awal')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal Dokter</strong>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Dokter</th>
			<th>Spesialis</th>
			<th>Jadwal</th>
			
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaDokter as $dokter)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $dokter->nama or 'nama kosong'}}</td>
				<td>{{ $dokter->spesialis->title }}</td>
				<td>{{ $dokter->jadwal->title or 'kosong'}}
				<td>
					<div class="btn-group" role="group">
	
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop