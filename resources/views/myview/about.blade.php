@section('title', 'Tentang Pinus')
@extends('myview.index')
@section('content')
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-success">Tentang</h4>
            <h1 style="font-size:4rem;font-weight:bolder;">{{ $site->nama_singkat }}</h1>
            <div class="text-justify mb-3">
                {!! $site->tentang !!}
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-success">Visi dan Misi</h4>
            <h1 style="font-size:4rem;font-weight:bolder;">{{ $site->nama_singkat }}</h1>
            <div class="text-justify mb-3">
                {!! $site->tentang !!}
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-success">Struktur Organisasi</h4>
            <h1 style="font-size:4rem;font-weight:bolder;">{{ $site->nama_singkat }}</h1>
            <div class="text-justify mb-3">
                {!! $site->tentang !!}
            </div>
        </div>
    </div>
</div>



@endsection
