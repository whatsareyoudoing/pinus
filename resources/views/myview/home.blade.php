@extends('myview.index')
@section('content')

{{-- Halaman Article --}}

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner h-100">
    @foreach ( $slider as $s=>$slider )
        <div class="carousel-dark">
            <div class="content-carousel">
                <h1 class="text-white notranslate">Pinus</h1>
                <h2 class="text-white notranslate">Pilar Nusantara</h2>
                <p class="text-white" style="padding-left: 4px;">
                    Membangun Kemitraan bersama Pemerintah, Bisnis dan Masyarakat untuk
                </p>
                <p class="text-white" style="margin-top:-18px;padding-left: 4px;">
                    Penerapan Tata Kelola yang baik bagi Kesejahteraan Masyarakat
                </p>
            </div>
        </div>
        <div class="carousel-item {{ $s == 0 ? 'active' : '' }}">
        <img src="{{ asset('assets/upload/image/' . $slider->gambar) }}" class="d-block w-100 carousel-1" alt="...">
        </div>
    @endforeach
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-ijo-cel">Selamat Datang di
                <span class="notranslate">
                Pilar Nusantara
                </span>
            </h4>
            <h1 style="font-size:4rem;font-weight:bolder;" class="notranslate">PINUS</h1>
            <div class="text-justify mb-3">
                PINUS dimulai dari inisiasi beberapa pendiri yang memulai gerakan sejak tahun 2006, dengan kegiatan utama melakukan pemberdayaan umat. Beberapa orang perintis PINUS melakukan berbagai kegiatan-kegiatan kemasyarakatan seperti pembinaan masyarakat di Garut, 5 Ulu Palembang dan Mariso Makasar dalam bentuk pemberian donasi, pembinaan balita sehat, pembuatan perpustakaan terapung di 5 Ulu, pelatihan kesenian Marawis anak-anak, dan pembinaan ekonomi yang dilakukan secara swadaya hingga saat ini.  Iden pendirian PINUS sebagai sebuah lembaga merupakan sebuah strategi untuk mencapai tujuan yang dicita-citakan yaitu terciptanya kesejahteraan masyarakat.
            </div>
            <a href="{{ route('visimisi') }}" class="btn btn-ijo-cel mb-3">
                Selengkapnya
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row no-gutters">
        <div class="col-lg-6 w-100 col-md-12">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 kotak ijo-cel d-flex flex-column justify-content-center align-items-center" >
                        <i class="text-white fas fa-handshake mb-4" style="font-size: 6rem"></i>
                        <h3 class="text-white">10+ Mitra</h3>
                    </div>
                    <div class="col-lg-6 col-md-12 kotak d-flex flex-column justify-content-center align-items-center" style="background-color: #daffed">
                        <i class="fas fa-file-invoice text-ijo-cel mb-4" style="font-size: 6rem"></i>
                        <h3 class="text-ijo-cel">Lorem, ipsum.</h3>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 d-flex kotak flex-column justify-content-center align-items-center bg-light">
                        <i class="fas fa-globe-asia text-ijo-cel mb-4" style="font-size: 6rem"></i>
                        <h3 class="text-ijo-cel">Lorem, ipsum.</h3>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center kotak" style="background-color: #145f54">
                        <i class="fab fa-envira text-white mb-4" style="font-size: 6rem"></i>
                        <h3 class="text-white">Lorem, ipsum.</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 px-0">
                <img src="{{ asset('assets/pinus/img/Untitled.png') }}" 
                    class="img-fluid w-100 d-block mx-auto" 
                    alt="Deskripsi Gambar">
            </div>
    </div>
</div>


<div class="container-fluid py-5 px-lg-5" style="background-color: #073124;">
    <div class=" pt-3">
        <h5 class="text-center" style="color: #6eca6e">Blog Kami</h5>
        <h1 class="text-center" style="color: #ffffff">Berita Terkini</h1>
    </div>
    <div class="container px-lg-5">

        <div class="row d-flex justify-content-center">
            @foreach ($berita as $b)
                <div class="col-12 col-md-4">
                    <a href="{{ url('berita/read/'.$b->slug_berita) }}" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow h-100 " style="border-radius: 30px;">
                        <img src="{{ asset('assets/upload/image/' . $b->gambar) }}" class="card-img-top " style="border-radius: 20px 20px 0 0;" alt="...">
                        <div class="card-body  w-100" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                            <p class="card-text" style="font-size: 20px; font-weight: bold;">{{ $b->judul_berita }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('berita') }}" class="btn btn-ijo-cel px-5 py-3">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(https://yiari.or.id/wp-content/uploads/2025/01/Hutan-Musim-5.webp)">
    <div class="row">
        <div class="col-12">
            <h3 class="font-weight-bold mb-3 mt-5 text-white text-center">Video Terbaru</h3>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-6">
                        
                        <div class="border-0 shadow overflow-hidden" style="border-radius: 15px;">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5RMg8QTZJLQ" allowfullscreen></iframe>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-4">
                            <a href="{{ route('video-detail') }}" class="text-decoration-none text-white">
                                <h3>Judul Video Utama</h3>
                                <p class="text-white">Deskripsi video utama yang memberikan informasi lebih mendalam mengenai konten di atas.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                                            url('https://yiari.or.id/wp-content/uploads/2025/01/Hutan-Musim-5.webp'); 
                                            background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container py-5">

        <div class="row align-items-center bg-white-transparent rounded-lg overflow-hidden shadow-lg" style="backdrop-filter: blur(5px);">
            
            <div class="col-lg-7 p-0">
                <div class="embed-responsive embed-responsive-16by9 shadow" style="border-radius: 15px;">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5RMg8QTZJLQ" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-5 p-4 p-md-5">
                <div class="text-white">
                    <h2 class="font-weight-bold mb-3">Judul Video Utama</h2>
                    <p class="text-light opacity-75 mb-4" style="line-height: 1.8;">
                        Deskripsi video utama yang memberikan informasi lebih mendalam mengenai konten di atas. Jelajahi keindahan alam dan pelajari lebih lanjut tentang konservasi.
                    </p>
                    <a href="{{ route('video') }}" class="btn btn-ijo-cel btn-lg rounded-pill px-4 shadow-sm transition-hover">
                        <i class="fas fa-play-circle mr-2"></i> Selengkapnya
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Mitra --}}
<h5 class="text-center mt-5" style="color: #6eca6e">Partner Kami</h5>
<h1 class="text-center">Mitra</h1>
<div class="carousel-mitra">
    <div class="grup-mitra">
        @foreach ($mitra as $m )
        <div class="card-mitra">
            <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-mitra" alt="...">
        </div>
        @endforeach
    </div>
    <div class="grup-mitra">
        @foreach ($mitra as $m )
        <div class="card-mitra">
            <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-mitra" alt="...">
        </div>
        @endforeach
    </div>
    <div class="grup-mitra">
        @foreach ($mitra as $m )
        <div class="card-mitra">
            <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-mitra" alt="...">
        </div>
        @endforeach
    </div>
</div>

@endsection
