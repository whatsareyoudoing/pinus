<?php $site   = DB::table('konfigurasi')->first(); ?>
<div class="row">

  <div class="col-md-6">
    <form action="{{ asset('admin/mitra/cari') }}" method="get" accept-charset="utf-8">
      {{ csrf_field() }}
    <div class="input-group">                  
      <input type="text" name="keywords" class="form-control" placeholder="Ketik kata kunci..." value="<?php if(isset($_GET['keywords'])) { echo strip_tags($_GET['keywords']); } ?>" required>
      <span class="input-group-btn btn-flat">
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
     
          <a href="{{ asset('admin/mitra/tambah') }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah Baru</a>
       
      </span>
    </div>
    </form>
  </div>
 
</div>

<div class="clearfix"><hr></div>

<form action="{{ asset('admin/mitra/proses') }}" method="post" accept-charset="utf-8">
<input type="hidden" name="pengalihan" value="<?php echo url()->full(); ?>">
<?php $site   = DB::table('konfigurasi')->first(); ?>
{{ csrf_field() }}
<div class="row">
  <div class="col-md-12">

    <div class="input-group">
      <button class="btn btn-default btn-sm" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
        </button> 


     
    
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
      <th width="30%">NAMA MITRA</th>
    
      <th width="40%">DESKRIPSI</th>
      <th width="10%">STATUS</th>
      <th width="15%">ACTION</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($agenda as $agenda) { ?>

<tr>
    <td class="text-center">
      <div class="icheck-primary">
        <input type="checkbox" name="id_mitra[]" value="{{ $agenda->id_mitra }}" id="check<?php echo $i ?>">
        <label for="check<?php echo $i ?>"></label>
      </div>
    </td>
    <td class="text-center">
    <?php if($agenda->gambar!="") { ?>
      <img src="{{ asset('assets/upload/image/thumbs/'.$agenda->gambar) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php }else{ ?>
      <img src="{{ asset('assets/upload/image/thumbs/'.website('icon')) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php } ?>
    </td>
    <td>
    <a href="{{ asset('admin/agenda/edit/'.$agenda->id_mitra) }}">
    <?php echo $agenda->nama_mitra ?> <sup><i class="fa fa-pencil"></i></sup>
    </a>
     
    </td>
    <td>
      <small>
         <?php echo $agenda->isi ?>
      
      </small>
    </td>
   
   
    <td>
      <div class="btn-group">
       

        <a href="{{ asset('admin/mitra/edit/'.$agenda->id_mitra) }}" 
        class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

        <a href="{{ asset('admin/mitra/delete/'.$agenda->id_mitra) }}" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i></a>
      </div>
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</form>