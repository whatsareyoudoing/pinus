@section('title', 'File Pinus')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/dokumentasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">File</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Dokumen --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="py-3 px-3" action="{{ route('cari-dokumen') }}" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Dokumen" aria-label="Cari Dokumen" name="keywords" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-ijo-cel px-4" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mb-5">
    @foreach ( $download as $d )
    <div class="row my-2 border p-3 mx-3" style="border-radius: 10px;">
        <div class="col-4">
            <span class="font-weight-bolder">
                {{ $d->judul_download }}
            </span>
            <p class="text-secondary">
                {{ \Carbon\Carbon::parse($d->tanggal)->format('d/m/Y') }}
            </p>
        </div>
        <div class="col-2">
        </div>
        <div class="col-6 ml-auto text-right">
            <a href="{{ asset('assets/upload/file/'.$d->file) }}" class="btn btn-ijo-cel btn-sm px-5 py-2" target="_blank">
                <i class="fa fa-download mr-2"></i>Unduh
            </a>
        </div>
    </div>
    @endforeach
</div>



@endsection
