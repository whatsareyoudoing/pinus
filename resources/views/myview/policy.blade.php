@section('title', 'Policy Brief')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Policy Brief</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <iframe class="rounded"
                width="560"
                height="315"
                src="https://www.youtube.com/embed/UMlzYKbS558"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/UMlzYKbS558"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/UMlzYKbS558"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

@endsection
