
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel">Tambah data video</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{ asset('admin/video/tambah_proses') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				{{ csrf_field() }}
				<div class="form-group row">
					<label class="col-sm-3 control-label text-right">Judul Video</label>
					<div class="col-sm-9">
						<input type="text" name="judul_video" class="form-control" placeholder="Judul Video" value="{{ old('judul_video') }}" required>
					</div>
				</div>
				

				<div class="form-group row">
					<label class="col-sm-3 control-label text-right">Link Video </label>
					<div class="col-sm-9">
						<textarea name="path_link_video" class="form-control" placeholder="Link Video">{{ old('path_link_video') }}</textarea>
						
					</div>
				</div>

				
				

				<div class="form-group row">
					<label class="col-sm-3 control-label text-right">Deskripsi</label>
					<div class="col-sm-9">
						<textarea name="deskripsi_video" class="form-control" placeholder="Deskripsi">{{ old('deskripsi_video') }}</textarea>
					</div>
				</div>

				


				<div class="form-group row">
					<label class="col-sm-3 control-label text-right"></label>
					<div class="col-sm-9">
						<div class="form-group pull-right btn-group">
							<input type="submit" name="submit" class="btn btn-primary " value="Simpan Data">
							<input type="reset" name="reset" class="btn btn-success " value="Reset">
							<button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				</form>

			</div>
		</div>
	</div>
</div>
