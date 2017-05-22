<div class="form-group">

<div class="col-sm-10">
	{!! Form::hidden('dokter_id',Auth::user()->dokter->id,['class'=>'form-control','id'=>'dokter_id','placeholder'=>"Dokter",'readonly'])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="dokter_id">Dokter</label>
<div class="col-sm-10">
	{!! Form::Text('nama',Auth::user()->dokter->nama,['class'=>'form-control','id'=>'dokter_id','placeholder'=>"Dokter",'readonly'])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="pasien_id">Pasien</label>
<div class="col-sm-10">
	{!! Form::select('pasien_id',$pasien->listspasien(),null,['class'=>'form-control','id'=>'pasien_id','placeholder'=>"Pasien"])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="layanan_id">Layanan</label>
<div class="col-sm-10">
	{!! Form::select('layanan_id',$layanan->listslayanan(),null,['class'=>'form-control','id'=>'layanan_id','placeholder'=>"Layanan"])!!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="tanggal">Tanggal Periksa</label>
<div class="col-sm-10">
	{!! Form::date('tanggal',null,['class'=>'form-control','placeholder'=>"Tanggal Lahir"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="keterangan">Keterangan</label>
<div class="col-sm-10">
	{!! Form::text('keterangan',null,['class'=>'form-control','placeholder'=>"Keterangan"])!!}
</div>
</div>