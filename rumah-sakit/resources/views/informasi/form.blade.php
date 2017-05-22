<div class="form-group">
<label class="col-sm-2 control-label" id="judul">Judul</label>
<div class="col-sm-10">
	{!! Form::text('judul',null,['class'=>'form-control','placeholder'=>"Judul"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="ttl">Isi</label>
<div class="col-sm-10">
	{!! Form::text('title',null,['class'=>'form-control','placeholder'=>"Isi"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="jenkel">Gambar</label>
<div class="col-sm-10">
	{!! Form::file('gambar',null,['class'=>'form-control','placeholder'=>"Foto"])!!}
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" id="spesialis_id">Jenis Informasi</label>
<div class="col-sm-10">
	{!! Form::select('jenis_info_id',$jenis_info->listsjenisinfo(),null,['class'=>'form-control','id'=>'jenis_info_id','placeholder'=>"Jenis Informasi"])!!}
</div>
</div>
