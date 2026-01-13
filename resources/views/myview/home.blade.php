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
            <h4 class="text-success">Selamat Datang di Pinus</h4>
            <h1 style="font-size:4rem;font-weight:bolder;">{{ $site->nama_singkat }}</h1>
            <div class="text-justify clamp-3 mb-3">
                {!! $site->tentang !!}
            </div>
            <a href="{{ route('tentang') }}" class="btn btn-success mb-3">
                Selengkapnya
            </a>
        </div>
        <div class="col-md-6">
            <img class="img-fluid rounded-lg" src="https://eftindonesia.org/images/home/feature.png" alt="">
        </div>
    </div>
</div>
<div class="container-fluid p-5" style="background-color: #00190a;">
    <h5 class="text-center text-success">Berita Kami</h5>
    <h1 class="text-center text-white">Berita Terkini</h1>
    <div class="row d-flex justify-content-center">
        @foreach ($berita as $b)
            <div class="col-12 col-md-3 p-4">
                <div class="card border-0 shadow-sm h-100 card-img-top">
                    <img src="{{ asset('assets/upload/image/' . $b->gambar) }}" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $b->judul_berita }}</p>
                    </div>
                </div>
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
<div class="container my-5">
    <h5 class="text-center text-success">Mitra Kami</h5>
    <h1 class="text-center">Mitra</h1>
    <div class="row">
        @foreach ( $mitra as $m )
        <div class="col-12 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ asset('assets/upload/image/' . $m->gambar) }}" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">{{ $m->nama_mitra }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
