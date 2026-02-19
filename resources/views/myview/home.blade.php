@extends('myview.index')
@section('content')

{{-- Halaman Article --}}

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach ( $slider as $s=>$slider )
        <div class="carousel-dark">
            <div class="px-5 content-carousel">
                <h1 class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est et deleniti possimus ullam, dicta nobis.</h1>
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
            <h4 class="text-ijo-cel">Selamat Datang di Pilar Nusantara</h4>
            <h1 style="font-size:4rem;font-weight:bolder;" class="notranslate">{{ $site->nama_singkat }}</h1>
            <div class="text-justify clamp-3 mb-3">
                {!! $site->tentang !!}
            </div>
            <a href="{{ route('tentang') }}" class="btn btn-ijo-cel mb-3">
                Selengkapnya
            </a>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 kotak ijo-cel d-flex flex-column justify-content-center align-items-center" >
                        <i class="text-white fas fa-handshake mb-4" style="font-size: 6rem"></i>
                        <h3 class="text-white">10+ Mitra</h3>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center" style="background-color: #daffed">
                        <i class="fas fa-file-invoice text-ijo-cel mb-4" style="font-size: 6rem"></i>
                        <h3 class="text-ijo-cel">Lorem, ipsum.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center bg-light">
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
        <div class="col-lg-6 col-md-12">
            <img src="{{ asset('assets/pinus/img/Untitled.png') }}" class="img-fluid w-100" alt="" style="height:600px">
        </div>
    </div>
</div>

<div class="container-fluid py-5 px-lg-5" style="background-color: #43ad79;">
    <div class="container">
        <h5 class="text-center text-ijo-cel">Blog Kami</h5>
        <h1 class="text-center text-ijo-cel">Berita Terkini</h1>
        <div class="row d-flex justify-content-center">
            @foreach ($berita as $b)
                <div class="col-12 col-md-4 p-4">
                    <a href="{{ url('berita/read/'.$b->slug_berita) }}" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow-sm h-100 " style="border-radius: 20px;">
                        <img src="{{ asset('assets/upload/image/' . $b->gambar) }}" class="card-img-top " style="border-radius: 20px;" alt="...">
                        <div class="card-body position-absolute text-white w-100" style="background-color: #00000069; bottom:0; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                            <p class="card-text">{{ $b->judul_berita }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('berita') }}" class="btn btn-ijo-cel ">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>


{{-- Mitra --}}
<h5 class="text-center text-ijo-cel mt-5">Partner Kami</h5>
<h1 class="text-center">Mitra</h1>

{{-- TAMPILAN MOBILE & TABLET (1 Gambar) --}}
<div class="d-block d-lg-none container my-5">
    <div id="mitraCarouselmb" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ( array_chunk($mitra, 1) as $mitraChunk )
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row">
                        @foreach ( $mitraChunk as $m )
                            <div class="col-12 p-5">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-bottom img-card" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">{{ $m->nama_mitra }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Navigasi Mobile --}}
        <a class="carousel-control-prev" href="#mitraCarouselmb" role="button" data-slide="prev" style="width: 5%;">
            <span class="carousel-control-prev-icon rounded-circle p-3" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mitraCarouselmb" role="button" data-slide="next" style="width: 5%;">
            <span class="carousel-control-next-icon rounded-circle p-3" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

{{-- TAMPILAN DESKTOP (4 Gambar) --}}
<div class="d-none d-lg-block container my-5">
    <div id="mitraCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ( array_chunk($mitra, 4) as $mitraChunk )
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row">
                        @foreach ( $mitraChunk as $m )
                            <div class="col-md-3 p-lg-3">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-bottom img-card" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">{{ $m->nama_mitra }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Navigasi Desktop --}}
        <a class="carousel-control-prev" href="#mitraCarousel" role="button" data-slide="prev" style="width: 5%;">
            <span class="carousel-control-prev-icon rounded-circle p-3" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mitraCarousel" role="button" data-slide="next" style="width: 5%;">
            <span class="carousel-control-next-icon rounded-circle p-3" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


@endsection
