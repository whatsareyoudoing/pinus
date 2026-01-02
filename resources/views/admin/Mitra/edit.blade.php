
<p class="text-right">
    <a href="{{ asset('admin/mitra') }}" class="btn btn-success btn-sm">
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

<form action="{{ asset('admin/mitra/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <input type="hidden" name="id_mitra" value="{{ $agenda->id_mitra }}">
    <div class="row form-group">
        <label class="col-md-3 text-right">Nama Mitra</label>
        <div class="col-md-6">
            <input type="text" name="nama_mitra" class="form-control" placeholder="Nama Mitra"
                required="required" value="<?php echo $agenda->nama_mitra; ?>">
        </div>
    </div>



   

    
    <div class="row form-group">
        <label class="col-md-3 text-right">Upload gambar</label>
        <div class="col-md-6">
            <input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
        </div>
    </div>



    <div class="row form-group">
        <label class="col-md-3 text-right">Isi agenda</label>
        <div class="col-md-9">
            <textarea name="isi" class="form-control" id="kontenku" placeholder="Isi agenda" placeholder="Isi agenda"><?php echo $agenda->isi; ?></textarea>
        </div>
    </div>




    <div class="row form-group">
        <label class="col-md-3 text-right">Status </label>

        <div class="col-md-2">
            <select name="status_mitra" class="form-control select2">
                <option value="Publish">Publikasikan</option>
                <option value="Draft" <?php if ($agenda->status_mitra == 'Draft') {
                    echo 'selected';
                } ?>>Simpan sebagai draft</option>
            </select>
        </div>
      </div>



        <div class="row form-group">
            <label class="col-md-3 text-right"></label>
            <div class="col-md-9">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success ">
                        <i class="fa fa-save"></i> Simpan Data
                    </button>
                    <input type="reset" name="reset" class="btn btn-info " value="Reset">
                </div>

            </div>

        </div>
