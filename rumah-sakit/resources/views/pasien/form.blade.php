<div class="form-group">
<label class="col-sm-2 control-label" id="nama">Nama</label>
<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="ttl">Tanggal Lahir</label>
<div class="col-sm-10">
	{!! Form::date('ttl',null,['class'=>'form-control','placeholder'=>"Tanggal Lahir"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="jenkel">Jenis Kelamin</label>
<div class="col-sm-10">
	{!! Form::select('jenkel',array('Pria'=>'Pria','Wanita'=>'Wanita','Lainnya'=>'Lainnya'),null,['class'=>'form-control','placeholder'=>""])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="tlp">No Tlp</label>
<div class="col-sm-10">
	{!! Form::text('tlp',null,['class'=>'form-control','placeholder'=>"No Tlp"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="alamat">Alamat</label>
<div class="col-sm-10">
	{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"alamat"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="pekerjaan">Pekerjaan</label>
<div class="col-sm-10">
	{!! Form::text('pekerjaan',null,['class'=>'form-control','placeholder'=>"pekerjaan"])!!}
</div>
</div>