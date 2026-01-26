@section('title', 'Agenda Pilar Nusantara')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('agenda') }}">Program dan Kegiatan</a></li>
    <li class="breadcrumb-item active">{{ $read->judul_agenda }}</li>
@endsection
@include('myview.components.hero')
    <div class="container-fluid px-0 px-md-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="">
                                <img src="{{ asset('assets/upload/image/' . $read->gambar) }}" class="img-content rounded-top" alt="...">
                                <div class="border">
                                    <div class="d-flex border-bottom mx-2 p-3">
                                        <div class="mx-2">
                                            <i class="fas fa-user" style="color:green;"></i>
                                            {{ $read->nama }}
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-calendar" style="color:green;"></i>
                                            {{ \Carbon\Carbon::parse($read->tanggal)->translatedFormat('l, d F Y') }}
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-folder" style="color:green;"></i>
                                            {{ $read->nama_kategori_agenda }}
                                        </div>
                                    </div>
                                    <h3 class="p-3">{{ $read->judul_agenda }}</h3>
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
                            <form class="py-3" action="{{ route('cari-agenda') }}" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Agenda" aria-label="Cari Agenda" name="keywords" aria-describedby="button-addon2">
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
                                <li class="list-group-item">
                                    <a href="{{ asset('agenda/kategori/'.$read->nama_kategori_agenda) }}" style="color:green;">
                                        {{ $read->nama_kategori_agenda }}
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
