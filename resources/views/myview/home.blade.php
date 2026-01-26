@extends('myview.index')
@section('content')

{{-- Halaman Article --}}

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach ( $slider as $s=>$slider )
        <div class="carousel-item {{ $s == 0 ? 'active' : '' }}">
        <img src="{{ asset('assets/upload/image/' . $slider->gambar) }}" class="d-block w-100" alt="...">
        </div>
    @endforeach
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-success">Selamat Datang di Pilar Nusantara</h4>
            <h1 style="font-size:4rem;font-weight:bolder;" class="notranslate">{{ $site->nama_singkat }}</h1>
            <div class="text-justify clamp-3 mb-3">
                {!! $site->tentang !!}
            </div>
            <a href="{{ route('tentang') }}" class="btn btn-success mb-3">
                Selengkapnya
            </a>
        </div>
        <div class="col-md-6">
            <img class="img-fluid rounded-lg" src="{{ asset('assets/upload/image/'.$site->gambar) }}" alt="">
        </div>
    </div>
</div>
<div class="container-fluid py-5 px-lg-5" style="background-color: #00190a;">
    <h5 class="text-center text-success">Blog Kami</h5>
    <h1 class="text-center text-white">Berita Terkini</h1>
    <div class="row d-flex justify-content-center">
        @foreach ($berita as $b)
            <div class="col-12 col-md-4 p-4">
                <a href="{{ url('berita/read/'.$b->slug_berita) }}" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 card-img-top">
                    <img src="{{ asset('assets/upload/image/' . $b->gambar) }}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $b->judul_berita }}</p>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('berita') }}" class="btn btn-success ">Selengkapnya</a>
        </div>
    </div>
</div>


{{-- Mitra --}}
<h5 class="text-center text-success mt-5">Partner Kami</h5>
<h1 class="text-center">Mitra</h1>
{{-- <div class="container my-5">
    <div class="row">
        @foreach ( $mitra as $m )
        <div class="col-12 col-md-3 p-5 p-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">{{ $m->nama_mitra }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}

<div class="d-lg-none d-md-block container my-5">
    {{-- Carousel Wrapper --}}
    <div id="mitraCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            {{-- 1. Gunakan array_chunk untuk memecah array $mitra menjadi grup isi 4 --}}
            @foreach ( array_chunk($mitra, 1) as $mitraChunk )

                {{-- 2. Tentukan slide aktif pertama --}}
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    {{-- 3. Bungkus dengan Row agar grid system berfungsi --}}
                    <div class="row">

                        {{-- Loop items di dalam grup (chunk) tersebut --}}
                        @foreach ( $mitraChunk as $m )
                            <div class="col-12 col-md-3 p-5 p-lg-3">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-top img-card" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">{{ $m->nama_mitra }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div> {{-- End Row --}}
                </div> {{-- End Carousel Item --}}

            @endforeach
        </div>

        {{-- Tombol Navigasi Kiri/Kanan --}}
        {{-- Saya tambahkan bg-dark pada icon agar terlihat jika background putih --}}
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

<div class="d-none d-lg-block container my-5">
    {{-- Carousel Wrapper --}}
    <div id="mitraCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            {{-- 1. Gunakan array_chunk untuk memecah array $mitra menjadi grup isi 4 --}}
            @foreach ( array_chunk($mitra, 4) as $mitraChunk )

                {{-- 2. Tentukan slide aktif pertama --}}
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    {{-- 3. Bungkus dengan Row agar grid system berfungsi --}}
                    <div class="row">

                        {{-- Loop items di dalam grup (chunk) tersebut --}}
                        @foreach ( $mitraChunk as $m )
                            <div class="col-12 col-md-3 p-5 p-lg-3">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-top img-card" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">{{ $m->nama_mitra }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div> {{-- End Row --}}
                </div> {{-- End Carousel Item --}}

            @endforeach
        </div>

        {{-- Tombol Navigasi Kiri/Kanan --}}
        {{-- Saya tambahkan bg-dark pada icon agar terlihat jika background putih --}}
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
