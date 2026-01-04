@section('title', 'Berita Pinus')
@extends('myview.index')
@section('content')
@include('myview.components.hero')
    <div class="container-fluid px-0 px-md-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="container-fluid">
                    @foreach ( $berita as $b )
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="">
                                <img src="https://eftindonesia.org/images/home/feature.png" class="img-content rounded-top" alt="...">
                                <div class="border">
                                    <div class="d-flex border-bottom mx-2 p-3">
                                        <div class="mx-2">
                                            <i class="fas fa-user"></i>
                                            {{ $b->nama }}
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-calendar"></i>
                                            {{ \Carbon\Carbon::parse($b->tanggal_publish)->translatedFormat('l, d F Y') }}
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-folder"></i>
                                            {{ $b->nama_kategori }}
                                        </div>
                                    </div>
                                    <h3 class="p-3">{{ $b->judul_berita }}</h3>
                                    <div class="text-justify clamp-3 pb-5 px-3">
                                        {!! $b->isi !!}
                                    </div>
                                    <div class="d-flex justify-content-end pb-5 pr-3">
                                        <a href="{{ asset('berita/read/'.$b->slug_berita) }}" class="btn btn-success">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $berita->links() }}
            </div>
            <div class="col-12 col-md-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form class="py-3" action="{{ route('cari-berita') }}" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Berita" aria-label="Cari Berita" name="keywords" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" id="button-addon2">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group pb-5">
                                <li class="list-group-item bg-success text-white font-weight-bold">
                                    <h5>
                                        Kategori
                                    </h5>
                                </li>
                                @foreach ( $kategori as $k )
                                <li class="list-group-item">
                                    <a href="{{ asset('berita/kategori/'.$k->nama_kategori) }}" style="color:green;">
                                        {{ $k->nama_kategori }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="list-group-item bg-success text-white font-weight-bold">
                                    <h5>
                                        Recent Post
                                    </h5>
                                </li>
                                @foreach ( $recent_berita as $r )
                                <li class="list-group-item">
                                    <a href="" style="color:green;">
                                        {{ $r->judul_berita }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
