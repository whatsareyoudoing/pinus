@section('title', 'Berita ')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/berita-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('berita') }}">Berita</a></li>
    <li class="breadcrumb-item active">{{ $read->judul_berita }}</li>
@endsection
@include('myview.components.hero')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="container-fluid mt-3">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="">
                                <img src="{{ asset('assets/upload/image/' . $read->gambar) }}" class="img-content rounded-top" alt="...">
                                <div class="border">
                                    <div class="d-flex border-bottom mx-2 p-3">
                                        <div class="mx-2">
                                            <i class="fas fa-user text-ijo-cel"></i>
                                            {{ $read->nama }}
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-calendar text-ijo-cel"></i>
                                            {{ \Carbon\Carbon::parse($read->tanggal)->translatedFormat('l, d F Y') }}
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-folder text-ijo-cel"></i>
                                            {{ $read->nama_kategori }}
                                        </div>
                                    </div>
                                    <h3 class="p-3">{{ $read->judul_berita }}</h3>
                                    <div class="text-justify pb-5 px-3">
                                        {!! $read->isi !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form class="py-3" action="{{ route('cari-berita') }}" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Berita" aria-label="Cari Berita" name="keywords" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-ijo-cel" type="button" id="button-addon2">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group pb-5">
                                <li class="list-group-item bg-ijo-cel text-white font-weight-bold">
                                    <h5>
                                        Kategori
                                    </h5>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ asset('berita/kategori/'.$read->nama_kategori) }}" class="text-ijo-cel">
                                        {{ $read->nama_kategori }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
