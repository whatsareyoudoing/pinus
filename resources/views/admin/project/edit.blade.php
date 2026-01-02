<p class="text-right">
	<a href="{{ asset('admin/project') }}" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ asset('admin/project/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_download" value="{{ $download->id_download }}">
<div class="row form-group">
	<label class="col-md-3 text-right">Nama file</label>
	<div class="col-md-9">
		<input type="text" name="judul_download" class="form-control" placeholder="Judul project" value="<?php echo $download->judul_download ?>">
	</div>
</div>




	<div class="row form-group">
		<label class="col-md-3 text-right">Upload File</label>
		<div class="col-md-9">
			<input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
		</div>
	</div>

	<div class="row form-group">
		<label class="col-md-3 text-right">Isi/Keterangan</label>
		<div class="col-md-9">
			<textarea name="isi" class="form-control" id="kontenku" placeholder="Isi project"><?php echo $download->isi ?></textarea>
		</div>
	</div>

	
	<div class="row form-group">
		<label class="col-md-3 text-right"></label>
		<div class="col-md-9">
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
				<input type="reset" name="reset" class="btn btn-info " value="Reset">
			</div>
		</div>
	</div>
</form>