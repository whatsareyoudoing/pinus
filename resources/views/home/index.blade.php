<!--Slider Start-->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade">
        <?php foreach($slider as $s=>$slider) { ?>

        <div class="carousel-item <?php if ($s == '0') {
            echo 'active';
        } ?> ">
            <img src="{{ asset('assets/upload/image/' . $slider->gambar) }}" alt="">
            <div class="container">
                <?php if($slider->status_text=="Ya") { ?>
                <h2 style="color:white">{{ $slider->judul_galeri }}</h2>
                <p style="color:white">{{ strip_tags($slider->isi) }}</p>
                <?php } ?>
            </div>
        </div>



        <?php } ?>




        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        {{-- <ol class="carousel-indicators"></ol> --}}

    </div>

</section>
<!--Slider End-->

<!-- About Section -->
<section id="about" class="about section">

   <div class="container">

       <div class="row position-relative">

           <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                   src="{{ asset('assets/upload/image/' . $site_config->gambar) }}"></div>

           <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
               <h2 class="inner-title">TENTANG KAMI</h2>
               <div class="our-story">
                   
                   <h3>{{ $site_config->nama_singkat }}</h3>
                   <?php echo $site_config->tentang; ?>
                   
               </div>
           </div>

       </div>

   </div>

</section><!-- /About Section -->

<!-- Produk unggul -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Produk</h2>
        <p>Produk Unggul</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">



            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <?php 
                  $produk_unggul =  DB::select("
                       SELECT 
                           a.judul_galeri,
                         a.gambar
                        
                        FROM galeri a
                        INNER JOIN `kategori_galeri` b ON a.id_kategori_galeri=  b.id_kategori_galeri
                        WHERE b.slug_kategori_galeri  LIKE  '%produk-unggul%'
                     ");

                
                  foreach($produk_unggul as $produk_unggul) {
                  ?>
                           <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                              <img src="{{ asset('assets/upload/image/' . $produk_unggul->gambar) }}" class="img-fluid"
                                    alt="">
                              <div class="portfolio-info">
                                    <h4><?php echo $produk_unggul->judul_galeri; ?></h4>

                                    <a href="{{ asset('assets/upload/image/' . $produk_unggul->gambar) }}" title="App 1"
                                       data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                          class="bi bi-zoom-in"></i></a>
                                    <a href="" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                              </div>
                           </div>


                <?php } ?>

               

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section>



<!-- Produk unggul end-->

{{-- 
<!--Slider Start-->
<section id="home-slider" class="owl-carousel owl-theme wf100">
    <?php foreach($slider as $slider) { ?>
    <div class="item">
        <div class="slider-caption h3slider">
            <div class="container">
                <?php if($slider->status_text=="Ya") { ?>
                <strong>{{ strip_tags($slider->isi) }}</strong>
                <h1>{{ $slider->judul_galeri }}</h1>

                <?php } ?>
            </div>
        </div>
        <img src="{{ asset('assets/upload/image/' . $slider->gambar) }}" alt="">
    </div>
    <?php } ?>
</section>
<!--Slider End-->
<!--Service Area Start-->
<section class="donation-join wf100">
    <div class="container text-center">
        <div class="row d-flex flex-row flex-nowrap overflow-auto">

            <?php foreach($layanan as $layanan) { ?>
            <div class="col-md-4 col-sm-12">
                <br>
                <img src="{{ asset('assets/upload/image/thumbs/' . $layanan->gambar) }}"
                    alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid">
                <div class="volbox">
                    <h6>{{ $layanan->judul_berita }}</h6>
                    <p>{{ $layanan->keywords }}</p>
                    <a href="{{ asset('berita/layanan/' . $layanan->slug_berita) }}">Lihat detail</a>
                </div>
            </div>
            <!--box  end-->
            <?php } ?>

        </div>
    </div>
</section>
<!--Service Area End-->
<section class="wf100 about">
    <!--About Txt Video Start-->
    <div class="about-video-section wf100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-text">
                        <h5>TENTANG KAMI</h5>
                        <h2>{{ $site_config->nama_singkat }}</h2>
                        <?php echo $site_config->tentang; ?>

                        <a href="{{ asset('kontak') }}" class="btn btn-info btn-lg">Kontak Kami</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <a href="#"><img src="{{ asset('assets/upload/image/' . $site_config->gambar) }}"
                            alt="{{ $site_config->nama_singkat }}" class="img img-fluid img-thumbnail">
                </div>
            </div>
        </div>
    </div>
    <!--About Txt Video End-->
    <!--About Section Start-->
    <section class="home2-about wf100 p100 gallery"
        style="background: url({{ asset('assets/aws/images/news-artilcesbg.jpg') }}) no-repeat; background-size: cover;">
        <div class="container">
            <div class="row d-flex flex-row flex-nowrap overflow-auto">
                <?php foreach($videos as $video) { ?>
                <div class="col-md-5">
                    <div class="video-img"> <a href="https://youtu.be/{{ $video->video }}" data-rel="prettyPhoto"
                            title="{{ $video->judul }}"><i class="fas fa-play"></i></a> <img
                            src="{{ asset('assets/upload/image/' . $video->gambar) }}" alt=""> </div>
                </div>
                <div class="col-md-7">
                    <div class="h2-about-txt">
                        <h3>Webinar</h3>
                        <h2>{{ $video->judul }}</h2>
                        <p><?php echo strip_tags($video->keterangan); ?></p>
                        <a class="aboutus" href="#">Lihat Detail</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </section>
    <!--About Section End-->

    <!--Blog Start-->
    <section class="h2-news wf100 p80 blog">
        <div class="blog-grid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title-2">
                            <h5>Baca update kami</h5>
                            <h2>Berita & Updates</h2>
                        </div>
                    </div>
                    <div class="col-md-6"> <a href="{{ asset('berita') }}" class="view-more">Lihat berita lainnya</a>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="d-flex flex-row flex-nowrap overflow-auto"
                    style="background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
                    <?php foreach($berita as $berita) { ?>
                    <!--Blog Small Post Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumb"> <a href="{{ asset('berita/read/' . $berita->slug_berita) }}"><i
                                        class="fas fa-link"></i></a> <img
                                    src="{{ asset('assets/upload/image/thumbs/' . $berita->gambar) }}"
                                    alt="><?php echo $berita->judul_berita; ?>"> </div>
                            <div class="post-txt">
                                <h5><a
                                        href="{{ asset('berita/read/' . $berita->slug_berita) }}"><?php echo $berita->judul_berita; ?></a>
                                </h5>
                                <ul class="post-meta">
                                    <li> <a href="{{ asset('berita/read/' . $berita->slug_berita) }}"><i
                                                class="fas fa-calendar-alt"></i>
                                            {{ tanggal('tanggal_id', $berita->tanggal_publish) }}</a> </li>
                                    <li> <a href="{{ asset('berita/kategori/' . $berita->slug_berita) }}"><i
                                                class="fas fa-sitemap"></i> {{ $berita->nama_kategori }}</a> </li>
                                </ul>
                                <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end = '...'); ?></p>
                                <a href="{{ asset('berita/read/' . $berita->slug_berita) }}" class="read-post">Baca
                                    detail</a>
                            </div>
                        </div>
                    </div>
                    <!--Blog Small Post End-->
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>
    <!--Blog End-->

    <!--Testimonials Start-->
    <section class="testimonials-section bg-white wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-2 text-center">
                        <h2>Projects</h2>
                    </div>
                    <div id="testimonials" class="owl-carousel owl-theme">
                        <?php 
               $kategori_download = DB::table('kategori_download')
                    ->orderBy('kategori_download.urutan','ASC')
                    ->get();
               foreach($kategori_download as $kategori_download) {
               ?>
                        <!--testimonials box start-->
                        <div class="item">
                            <h4><?php echo $kategori_download->nama_kategori_download; ?></h4>
                            <hr>
                            <?php echo \Illuminate\Support\Str::limit(strip_tags($kategori_download->keterangan), 100, $end = '...'); ?>
                            <div class="tuser">
                                <a href="{{ asset('project/kategori/' . $kategori_download->slug_kategori_download) }}"
                                    class="btn btn-success"><i class="fa fa-laptop"></i> Lihat Detail</a>
                            </div>
                        </div>
                        <!--testimonials box End-->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials End--> --}}
