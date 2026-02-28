@section('title', 'Video')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Video</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-3" style="border-radius: 30px 30px 0 0;
                    width:100%;
                    border:1px solid">
                <iframe style="border-radius: 30px 30px 0 0;
                    width:100%; height:400px;"
                    src="https://www.youtube.com/embed/UMlzYKbS558"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <div class="p-3" style="">
                    <h5>Judul Video</h5>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
