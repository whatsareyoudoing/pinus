@section('title', 'Video detail')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/publikasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('video') }}">Video</a></li>
    <li class="breadcrumb-item active">Video Detail</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="mt-4" style="border-radius: 14px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video_detail" style="border-radius: 14px 14px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/5RMg8QTZJLQ"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <div class="p-4" style="">
                    <h2>Judul Video</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda praesentium doloremque cupiditate natus numquam. Sapiente hic laboriosam repudiandae facilis voluptates ipsa doloremque nesciunt sunt laudantium maxime quasi distinctio, reprehenderit alias quam autem inventore aperiam natus omnis temporibus perferendis ipsum? Corrupti iusto sequi deleniti quisquam non vitae soluta aut repellendus sed!</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda praesentium doloremque cupiditate natus numquam. Sapiente hic laboriosam repudiandae facilis voluptates ipsa doloremque nesciunt sunt laudantium maxime quasi distinctio, reprehenderit alias quam autem inventore aperiam natus omnis temporibus perferendis ipsum? Corrupti iusto sequi deleniti quisquam non vitae soluta aut repellendus sed!</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda praesentium doloremque cupiditate natus numquam. Sapiente hic laboriosam repudiandae facilis voluptates ipsa doloremque nesciunt sunt laudantium maxime quasi distinctio, reprehenderit alias quam autem inventore aperiam natus omnis temporibus perferendis ipsum? Corrupti iusto sequi deleniti quisquam non vitae soluta aut repellendus sed!</p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
