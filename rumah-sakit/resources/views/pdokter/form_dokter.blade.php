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

<!-- <div class="form-group">
<label class="col-sm-2 control-label" id="spesialis_id">Spesialis</label>
<div class="col-sm-10">
	{!! Form::hidden('spesialis_id',['class'=>'form-control','id'=>'spesialis_id','placeholder'=>"Spesialis",'readonly'])!!}
</div>
</div> -->
<div class="form-group">
<label class="col-sm-2 control-label" id="spesialis_id">Spesialis</label>
<div class="col-sm-10">
	{!! Form::select('spesialis_id',['class'=>'form-control','id'=>'spesialis_id','placeholder'=>"Spesialis",'readonly'])!!}
</div>
</div>
<!-- <div class="form-group">
<label class="col-sm-2 control-label" id="spesialis_id">Spesialis</label>
<div class="col-sm-10">
	{!! Form::select('title',$spesialis->title,['class'=>'form-control','id'=>'spesialis_id','readonly'])!!}
</div>
</div> -->


<div class="form-group">
<label class="col-sm-2 control-label" id="matakuliah_id">Jadwal</label>
<div class="col-sm-10">
	{!! Form::select('jadwal_id',$jadwal->lists('title','id'),null,['class'=>'form-control','id'=>'jadwal_id','placeholder'=>"Jadwal"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">username</label>
<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">password</label>
<div class="col-sm-10">
	{!! Form::password('password',null,['class'=>'form-control','placeholder'=>"password"])!!}
</div>
</div>