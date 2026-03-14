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


<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <form action="" method="get">
                <div class="input-group bg-white border rounded-pill shadow-sm p-1">
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pl-4">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                    </div>

                    <input type="text" 
                        class="form-control border-0 shadow-none py-4" 
                        placeholder="Cari video..." 
                        name="keywords">

                    <div class="input-group-append">
                        <button class="btn btn-ijo-cel rounded-pill px-4 m-1 shadow-sm" type="submit">
                            Cari
                        </button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <h3 class="font-weight-bold mb-3">Video Terbaru</h3>
            <div class="card border-0 shadow overflow-hidden" style="border-radius: 15px;">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5RMg8QTZJLQ" allowfullscreen></iframe>
                </div>
                <div class="card-body p-4">
                    <a href="{{ route('video-detail') }}" class="text-decoration-none text-dark">
                        <h3>Judul Video Utama</h3>
                        <p class="text-muted">Deskripsi video utama yang memberikan informasi lebih mendalam mengenai konten di atas.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-3">
        <div class="col-12">
            <h4 class="font-weight-bold">Video Lainnya</h4>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/83-eTFwsGsk" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <a href="{{ route('video-detail') }}" class="text-decoration-none text-dark">
                        <h5 class="font-weight-bold">Judul Video</h5>
                        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/83-eTFwsGsk" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <a href="{{ route('video-detail') }}" class="text-decoration-none text-dark">
                        <h5 class="font-weight-bold">Judul Video</h5>
                        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/83-eTFwsGsk" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <a href="{{ route('video-detail') }}" class="text-decoration-none text-dark">
                        <h5 class="font-weight-bold">Judul Video</h5>
                        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination shadow-sm">
                    <li class="page-item disabled"><span class="page-link">‹</span></li>
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">›</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection
