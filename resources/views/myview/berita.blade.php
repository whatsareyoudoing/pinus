@section('title', 'Berita ')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Berita</li>
@endsection
@include('myview.components.hero')
    <div class="container-fluid px-0 px-md-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="container-fluid">
                    @if(count($berita)== 0)
                            <h5>Tidak Ada Data</h5>
                    @endif
                    @foreach ( $berita as $b )
                    <div class="row mb-5">
                        <div class="col-12">
                            <a href="{{ url('berita/read/'.$b->slug_berita) }}" class="text-decoration-none text-dark">
                                <div class="card-hover-effect">
                                    <img src="{{ asset('assets/upload/image/' . $b->gambar) }}" class="img-content rounded-top w-100" alt="..." style="height: 400px; object-fit: cover;">

                                    <div class="border">
                                        <div class="d-flex border-bottom mx-2 p-3" style="font-size: 0.9rem;">
                                            <div class="mx-2">
                                                <i class="fas fa-user text-ijo-cel"></i>
                                                {{ $b->nama }}
                                            </div>
                                            <div class="mx-2">
                                                <i class="fas fa-calendar text-ijo-cel"></i>
                                                {{-- Tanggal diubah jadi nomor saja --}}
                                                {{ \Carbon\Carbon::parse($b->tanggal)->format('d/m/Y') }}
                                            </div>
                                            <div class="mx-2">
                                                <i class="fas fa-folder text-ijo-cel"></i>
                                                {{ $b->nama_kategori }}
                                            </div>
                                        </div>

                                        {{-- Judul dibatasi 20 karakter --}}
                                        <h3 class="p-3">
                                            {{ Str::limit($b->judul_berita, 20, '...') }}
                                        </h3>

                                        <div class="d-flex justify-content-end pb-4 px-3">
                                            <span class="btn btn-ijo-cel">Selengkapnya</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
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
                                        <button class="btn btn-ijo-cel" type="submit" id="button-addon2">Cari</button>
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
                                <li class="list-group-item bg-ijo-cel text-white font-weight-bold">
                                    <h5>
                                        Berita Terbaru
                                    </h5>
                                </li>
                                @foreach ( $recent_berita as $r )
                                <li class="list-group-item">
                                    <a href="{{ url('berita/read/'.$r->slug_berita) }}" style="color:green;">
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
