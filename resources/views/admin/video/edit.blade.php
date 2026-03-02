@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/video/proses_edit') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_video" value="<?php echo $video->id_video ?>">
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Judul Video</label>
	<div class="col-sm-9">
		<input type="text" name="judul_video" class="form-control" placeholder="Judul Video" value="<?php echo $video->judul_video ?>" required>
	</div>
</div>


<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Link Video </label>
	<div class="col-sm-9">
		<textarea name="path_link_video" class="form-control" placeholder="Link Video"><?php echo $video->path_link_video ?></textarea>
						
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Deskripsi</label>
	<div class="col-sm-9">
		<textarea name="deskripsi_video" class="form-control" placeholder="Deskripsi"><?php echo $video->deskripsi_video ?></textarea>
	</div>
</div>


<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group pull-right btn-group">
			<input type="submit" name="submit" class="btn btn-primary " value="Simpan Data">
			<input type="reset" name="reset" class="btn btn-success " value="Reset">
			<a href="{{ asset('admin/video') }}" class="btn btn-danger">Kembali</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</form>

