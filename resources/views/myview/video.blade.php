@section('title', 'Video')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/publikasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Video</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row">
        <div class="col-md">
            <form class="py-3" action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Video" aria-label="Cari Video" name="keywords" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn btn-ijo-cel px-5" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="mt-4 shadow" style="border-radius: 15px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video" style="border-radius: 15px 15px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/5RMg8QTZJLQ"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <a href="{{ route('video-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="px-3">Judul Video</h5>
                    <p class="px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus perspiciatis a labore, hic quos?</p>
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <div class="mt-4 shadow" style="border-radius: 15px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video" style="border-radius: 15px 15px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/83-eTFwsGsk"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <a href="{{ route('video-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="px-3">Judul Video</h5>
                    <p class="px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus perspiciatis a labore, hic quos?</p>
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <div class="mt-4 shadow" style="border-radius: 15px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video" style="border-radius: 15px 15px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/ruGhZqSc_q8"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <a href="{{ route('video-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="px-3">Judul Video</h5>
                    <p class="px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus perspiciatis a labore, hic quos?</p>
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <div class="mt-4 shadow" style="border-radius: 15px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video" style="border-radius: 15px 15px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/sFzI5xENTSc"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <a href="{{ route('video-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="px-3">Judul Video</h5>
                    <p class="px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus perspiciatis a labore, hic quos?</p>
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <div class="mt-4 shadow" style="border-radius: 15px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video" style="border-radius: 15px 15px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/_HjkV7_7ap8"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <a href="{{ route('video-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="px-3">Judul Video</h5>
                    <p class="px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus perspiciatis a labore, hic quos?</p>
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <div class="mt-4 shadow" style="border-radius: 15px;
                    width:100% ;
                    border:1px solid rgb(216, 216, 216)">
                <iframe class="video" style="border-radius: 15px 15px 0 0;
                    width:100%;"
                    src="https://www.youtube.com/embed/Ou8NwGwme_A"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <a href="{{ route('video-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="px-3">Judul Video</h5>
                    <p class="px-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae repellendus perspiciatis a labore, hic quos?</p>
                </a>
            </div>

        </div>
    </div>
    <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="">2</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="" rel="next" aria-label="Next »">›</a>
                </li>
                    </ul>
    </nav>
</div>

@endsection
