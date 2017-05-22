@extends('master')
@section('container')

<div class="panel panel-primary">
<div class="panel-heading">
	<strong><a href="{{url('pasien_dokter') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a>Tambah Data pasien_dokter</strong>
</div>
{!! Form:: open(['url'=>'pasien_dokter/simpan','class'=>'form-horizontal'])!!}
@include('pasien_dokter.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
	<button type="reset" class ="btn btn-danger"><i class="fa fa-undo">Ulangi</i></button>
</div>
{!! Form::close() !!}
</div>
@stop