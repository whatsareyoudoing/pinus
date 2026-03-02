<div class="alert alert-info">
  <p>Hai <strong>{{ Session()->get('nama') }}</strong>, Selamat datang di Halaman Dashboard Administrator</p>
  
</div>
<hr>
<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Artikel &amp; Berita</span>
        <span class="info-box-number">
          <?php 
          $berita = DB::table('berita')->where('jenis_berita','Berita')->get(); 
          echo $berita->count();
          ?>
          <small>Sudah dibuat</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
 

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-download"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">File &amp; Dokumen</span>
        <span class="info-box-number">
        <?php 
          $download = DB::table('berita')->get(); 
          echo $download->count();
          ?>
          <small>File</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar-week"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Agenda</span>
        <span class="info-box-number">
        	<?php 
          $galeri = DB::table('agenda')->get(); 
          echo $galeri->count();
          ?>
          <small>Agenda</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-tag"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Mitra</span>
        <span class="info-box-number">
        	<?php 
          $galeri = DB::table('mitra')->get(); 
          echo $galeri->count();
          ?>
          <small>Mitra</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-video"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Video</span>
        <span class="info-box-number">
        	<?php 
          $galeri = DB::table('video')->get(); 
          echo $galeri->count();
          ?>
          <small>Video</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-shop"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Produk</span>
        <span class="info-box-number">
        	<?php 
          $galeri = DB::table('produk')->get(); 
          echo $galeri->count();
          ?>
          <small>Produk</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-light elevation-1"><i class="fa-solid fa-book"></i></span>
  
        <div class="info-box-content">
          <span class="info-box-text">Modul</span>
          <span class="info-box-number">
            <?php 
            $galeri = DB::table('modul')->get(); 
            echo $galeri->count();
            ?>
            <small>Modul</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

</div>
<!-- /.row -->

