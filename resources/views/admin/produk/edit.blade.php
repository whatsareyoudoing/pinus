@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/produk/proses_edit') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_produk" value="<?php echo $produk->id_produk ?>">
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Judul Produk</label>
	<div class="col-sm-9">
		<input type="text" name="judul_produk" class="form-control" placeholder="Judul Produk" value="<?php echo $produk->judul_produk ?>" required>
	</div>
</div>

<div class="row form-group">
	<label class="col-md-3 text-right">Upload gambar Produk</label>
	<div class="col-md-6">
		<input type="file" name="path_gambar_produk" class="form-control" placeholder="Upload gambar produk">
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Link Produk </label>
	<div class="col-sm-9">
		<textarea name="path_link_produk" class="form-control" placeholder="Link Produk"><?php echo $produk->path_link_produk ?></textarea>
						
	</div>
</div>


<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Deskripsi</label>
	<div class="col-sm-9">
		<textarea name="deskripsi_produk" class="form-control" placeholder="Deskripsi"><?php echo $produk->deskripsi_produk ?></textarea>
	</div>
</div>


<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group pull-right btn-group">
			<input type="submit" name="submit" class="btn btn-primary " value="Simpan Data">
			<input type="reset" name="reset" class="btn btn-success " value="Reset">
			<a href="{{ asset('admin/produk') }}" class="btn btn-danger">Kembali</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</form>

