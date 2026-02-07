@section('title', 'Program dan Kegiatan Pilar Nusantara')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Program & Kegiatan</li>
@endsection
@include('myview.components.hero')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="container-fluid">
                    <div class="row">
                        @if(count($agenda)== 0)
                            <h5>Tidak Ada Data</h5>
                        @endif
                        @foreach ( $agenda as $a )
                            <div class="col-12 col-md-5 col-lg-3">
                                <a href="{{ url('agenda/read/'.$a->slug_agenda) }}" class="text-decoration-none text-dark">
                                    <div class="card my-2" style="width: 15rem; border-radius: 15px; overflow: hidden; transition: transform 0.3s;">
                                        <img src="{{ asset('assets/upload/image/' . $a->gambar) }}" class="card-img-top img-card" alt="..." style="height: 180px; object-fit: cover;">

                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">
                                                {{ Str::limit($a->judul_agenda, 20, '...') }}
                                            </h5>

                                            <div class="d-flex border-bottom mb-2 pb-2" style="font-size: 0.75rem;">
                                                <div class="pe-2 border-end">
                                                    <i class="fas fa-user text-success"></i> {{ Str::limit($a->nama, 10, '..') }}
                                                </div>
                                                <div class="px-2 border-end">
                                                    <i class="fas fa-calendar text-success"></i>
                                                    {{ \Carbon\Carbon::parse($a->tanggal)->format('d/m/Y') }}
                                                </div>
                                                <div class="ps-2">
                                                    <i class="fas fa-folder text-success"></i>
                                                    {{ $a->jenis_agenda }}
                                                </div>
                                            </div>

                                            <div class="card-text text-muted" style="font-size: 0.9rem;">
                                                {!! Str::limit(strip_tags($a->isi), 30, '...') !!}
                                            </div>

                                            <div class="mt-3 text-success fw-bold d-flex justify-content-between" style="font-size: 0.85rem;">
                                                Selengkapnya <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-3">
                    {{ $agenda->links() }}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form class="py-3" action="{{ route('cari-agenda') }}" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Agenda" aria-label="Cari Agenda" name="keywords" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>
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
                                    <a href="{{ asset('agenda/kategori/'.$k->slug_kategori_agenda) }}" style="color:green;">
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
                                <li class="list-group-item bg-success text-white font-weight-bold">
                                    <h5>
                                        Agenda Terbaru
                                    </h5>
                                </li>
                                @foreach ( $recent_agenda as $r )
                                <li class="list-group-item">
                                    <a href="{{ url('agenda/read/'.$r->slug_agenda) }}" style="color:green;">
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
