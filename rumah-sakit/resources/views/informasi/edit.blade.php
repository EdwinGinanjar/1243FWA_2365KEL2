@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{url('informasi') }}"><i class="fa text-default fa-chevron-left"></i></a>Perbarui Data informasi</strong>
</div>
{!! Form:: model($informasi,['files'=>true,'url'=>'informasi/edit/'.$informasi->id,'class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
@include('informasi.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-info">Perbarui</button>
	<button type="reset" class="btn btn-danger">Ulangi</button>
</div>
{!! Form::close() !!}
</div>
@stop
