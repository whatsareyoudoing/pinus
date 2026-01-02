
<div class="row">

  <div class="col-md-6">
    <form action="{{ asset('admin/berita/cari') }}" method="get" accept-charset="utf-8">
      {{ csrf_field() }}
    <div class="input-group">                  
      <input type="text" name="keywords" class="form-control" placeholder="Ketik kata kunci..." value="<?php if(isset($_GET['keywords'])) { echo strip_tags($_GET['keywords']); } ?>" required>
      <span class="input-group-btn btn-flat">
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
        
          <a href="{{ asset('admin/berita/tambah') }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah Baru</a>
       
      </span>
    </div>
    </form>
  </div>
  <div class="col-md-6 text-left">
   {{ $berita->links() }}
  </div>
</div>

<div class="clearfix"><hr></div>

<form action="{{ asset('admin/berita/proses') }}" method="post" accept-charset="utf-8">
<input type="hidden" name="pengalihan" value="<?php echo url()->full(); ?>">
<?php $site   = DB::table('konfigurasi')->first(); ?>
{{ csrf_field() }}
<div class="row">
  <div class="col-md-12">

    <div class="input-group">
      <button class="btn btn-default btn-sm" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
        </button> 
        <select name="id_kategori" class="form-control form-control-sm" 
              onchange="if(this.value) window.location.href = this.value;">
          <option value="{{ url('admin/berita') }}">-- SEMUA --</option>
          
          @foreach($kategori as $item)
              <option value="{{ url('admin/berita/kategori/' . $item->id_kategori) }}"
                  {{ request()->is('admin/berita/kategori/' . $item->id_kategori) ? 'selected' : '' }}>
                  {{ $item->nama_kategori }}
              </option>
          @endforeach
      </select>

      
      
    </div>
  </div>
    </div>
<div class="table-responsive mailbox-messages">
<table class="display table table-bordered" cellspacing="0" width="100%">
<thead>
    <tr class="bg-dark">
      <th width="5%">
            <div class="mailbox-controls">
                <!-- Check all button -->
               <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
            </div>
      </th>
      <th width="5%">GAMBAR</th>
      <th width="50%">JUDUL</th>
      <th width="15%">KATEGORI</th>
      <th width="10%">STATUS</th>
      <th width="10%">AUTHOR</th>
      <th width="15%">ACTION</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($berita as $berita) { ?>

<tr>
    <td class="text-center">
      <div class="icheck-primary">
        <input type="checkbox" name="id_berita[]" value="{{ $berita->id_berita }}" id="check<?php echo $i ?>">
        <label for="check<?php echo $i ?>"></label>
      </div>
    </td>
    <td class="text-center">
    <?php $site   = DB::table('konfigurasi')->first(); if($berita->gambar!="") { ?>
      <img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php }else{ ?>
      <img src="{{ asset('assets/upload/image/thumbs/'.$site->icon) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php } ?>
    </td>
    
    <td>
    <a href="{{ asset('admin/berita/edit/'.$berita->id_berita) }}">
    <?php echo $berita->judul_berita ?> <sup><i class="fa fa-pencil"></i></sup>
    </a>
      <small>
        <br>Posted: <?php echo date('d M Y H:i: s',strtotime($berita->tanggal_post)) ?>
        
    
    </a>
      </small>
    </td>
    
 
    <td>
   
    <?php echo $berita->nama_kategori ?>
    
    </td>

    <td><a href="{{ asset('admin/berita/status_berita/'.$berita->status_berita) }}">
      <small class="badge <?php if($berita->status_berita=="Publish") { echo 'badge-success'; }else{ echo 'badge-warning'; } ?> btn-block">
        <i class="fa <?php if($berita->status_berita=="Publish") { echo 'fa-check-circle'; }else{ echo 'fa-times'; } ?>"></i> <?php echo $berita->status_berita ?></small>
    </a></td>
    <td>
    
   
      <a href="{{ asset('admin/berita/author/'.$berita->id_user) }}">
      <?php echo $berita->nama ?><sup><i class="fa fa-link"></i></sup>
      </a>
 
    </td>
    <td>
      <div class="btn-group">
       

        <a href="{{ asset('admin/berita/edit/'.$berita->id_berita) }}" 
        class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

        <a href="{{ asset('admin/berita/delete/'.$berita->id_berita.'/'.$berita->jenis_berita) }}" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i></a>
      </div>
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</form>