@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{url('pasien') }}"><i class="fa text-default fa-chevron-left"></i></a>Perbarui Data pasien</strong>
</div>
{!! Form:: model($pasien,['url'=>'pasien/edit/'.$pasien->id,'class'=>'form-horizontal'])!!}
@include('pasien.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-info">Perbarui</button>
	<button type="reset" class="btn btn-danger">Ulangi</button>
</div>
{!! Form::close() !!}
</div>
@stop
