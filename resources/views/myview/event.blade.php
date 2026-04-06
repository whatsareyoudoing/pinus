@section('title', 'Events')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/tentang-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Events</li>
@endsection
@include('myview.components.hero')
    <div class="container-fluid px-5  mb-5">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-md-9">
                <div class="container-fluid">
                    <div class="row">
                        @if(count($event)== 0)
                        <div class="col-md-12">
                            <h5 class="w-100">Tidak Ada Data</h5>
                        </div>
                        @endif
                        @foreach ( $event as $a )
                            <div class="col-md-4 py-2">
                                <a href="{{ url('event/read/'.$a->slug_agenda) }}" class="text-decoration-none text-dark">
                                    <div class="card" style="width: 100%; border-radius: 15px; overflow: hidden; transition: transform 0.3s;">
                                        <img src="{{ asset('assets/upload/image/' . $a->gambar) }}" class="card-img-top img-card" alt="..." style="height: 180px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">
                                                {{ Str::limit($a->judul_agenda, 20, '...') }}
                                            </h5>

                                            <div class="d-flex border-top flex-column mb-2 py-2" style="font-size: 0.75rem;">
                                                @if(\Carbon\Carbon::parse($a->tanggal)->isFuture() || \Carbon\Carbon::parse($a->tanggal)->isToday())
                                                    <div class="text-center alert alert-success">
                                                        Event Hari Ini Atau Akan Datang
                                                    </div>
                                                @else
                                                    <div class="text-center alert alert-danger">
                                                        Event Terdahulu
                                                    </div>
                                                @endif
                                                <div class="ps-2">
                                                    <i class="-4 fas fa-folder " style="color: #f9900a;"></i>
                                                    <span class="pl-2 text-secondary">

                                                        {{ $a->nama_kategori_agenda }}
                                                    </span>
                                                </div>
                                                <div class="pe-2 border-end">
                                                    <i class="-4 fas fa-user " style="color: #f9900a;"></i>
                                                    <span class="pl-2 text-secondary">

                                                        {{ Str::limit($a->nama, 10, '..') }}
                                                    </span>
                                                </div>
                                                <div class="border-end">
                                                    <i class="-4 fas fa-calendar " style="color: #f9900a;"></i>
                                                    <span class="pl-2 text-secondary">

                                                        {{ \Carbon\Carbon::parse($a->tanggal)->format('d/m/Y') }}
                                                    </span>
                                                </div>

                                            </div>

                                            {{-- <div class="card-text text-muted" style="font-size: 0.9rem;">
                                                {!! Str::limit(strip_tags($a->isi), 30, '...') !!}
                                            </div> --}}

                                            <div class="mt-1 text-ijo-cel fw-bold d-flex justify-content-between align-items-center" style="font-size: 0.85rem;">
                                                Selengkapnya <i class="pt-2 fas fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    {{ $event->links() }}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="container-fluid pr-5">
                    <div class="row">
                        <div class="col-12">
                            <form class="py-3" action="{{ route('cari-event') }}" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Events" aria-label="Cari Agenda" name="keywords" aria-describedby="button-addon2">
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
                                    <a href="{{ asset('event/kategori/'.$k->slug_kategori_agenda) }}" class="text-ijo-cel">
                                        {{ $k->nama_kategori_agenda }}
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
                                        Events Terbaru
                                    </h5>
                                </li>
                                @foreach ( $recent_event as $r )
                                <li class="list-group-item">
                                    <a href="{{ url('event/read/'.$r->slug_agenda) }}" class="text-ijo-cel">
                                        {{ $r->judul_agenda }}
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
