@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{url('jdwl') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Jadwal</strong>
	<!-- <a href="{{url('jadwal/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal</a>
	<div class="clearfix"></div> -->
</div>
	<table class="table">
	<tr>
		<td>title</td>
		<td>:</td>
		<td>{{ $dokter->nama }}</td>
	</tr>
	
</table>
					</div>
				</td>
			</tr>
			
</div>
@stop