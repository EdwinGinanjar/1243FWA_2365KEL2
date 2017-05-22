@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">
	<strong><a href="{{url('pasien_dokter') }}"><i class="fa text-default fa-chevron-left"></i></a>Perbarui Data pasien_dokter</strong>
</div>
{!! Form:: model($pasien_dokter,['url'=>'pasien_dokter/edit/'.$pasien_dokter->id,'class'=>'form-horizontal'])!!}
@include('pasien_dokter.form')
<div style="width: 100%;text-align: right;">
	<button class="btn btn-info">Perbarui</button>
	<button type="reset" class="btn btn-danger">Ulangi</button>
</div>
{!! Form::close() !!}
</div>
@stop
