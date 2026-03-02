@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/modul/proses_edit') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_modul" value="<?php echo $modul->id_modul ?>">
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Judul Modul</label>
	<div class="col-sm-9">
		<input type="text" name="judul_modul" class="form-control" placeholder="Judul Modul" value="<?php echo $modul->judul_modul ?>" required>
	</div>
</div>



<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Deskripsi 1</label>
	<div class="col-sm-9">
		<textarea name="deskripsi1_modul" class="form-control" placeholder="Deskripsi 1"><?php echo $modul->deskripsi1_modul ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Deskripsi 2</label>
	<div class="col-sm-9">
		<textarea name="deskripsi2_modul" class="form-control" placeholder="Deskripsi 2"><?php echo $modul->deskripsi2_modul ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group pull-right btn-group">
			<input type="submit" name="submit" class="btn btn-primary " value="Simpan Data">
			<input type="reset" name="reset" class="btn btn-success " value="Reset">
			<a href="{{ asset('admin/modul') }}" class="btn btn-danger">Kembali</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</form>

