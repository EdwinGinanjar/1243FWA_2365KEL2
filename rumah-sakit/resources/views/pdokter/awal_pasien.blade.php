@extends('dokter-master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Pasien</strong>
	<a href="{{url('pasien/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>pasien</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Ttl</th>
			<th>Jenis Kelamin</th>
			<th>No Tlp</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Aksi</th>
		</tr></thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuapasien as $pasien)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $pasien
		->nama or 'nama kosong'}}</td>
				<td>{{ $pasien
		->ttl or 'ttl kosong'}}</td>
				<td>
				<td>{{ $pasien
		->jenkel or 'jenkel kosong'}}</td>
				<td>
				<td>{{ $pasien
		->tlp or 'tlp kosong'}}</td>
				<td>
				<td>{{ $pasien
		->alamat or 'alamat kosong'}}</td>
				<td>
				<td>{{ $pasien
		->pekerjaan or 'pekerjaan kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('pasien/edit/'.$pasien->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('pasien/lihat/'.$pasien->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('pasien/hapus/'.$pasien->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop