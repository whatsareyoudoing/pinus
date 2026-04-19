@section('title', 'Video')
@extends('myview.index')

@section('content')
@section('hero_bg', asset('assets/pinus/img/publikasi-hero.jpg'))

@section('link')
<li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
<li class="breadcrumb-item active">Video</li>
@endsection

@include('myview.components.hero')

<div class="container py-5">

    <!-- SEARCH -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <form method="get">
                <div class="input-group bg-white border rounded-pill shadow-sm p-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pl-4">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control border-0 shadow-none py-4" placeholder="Cari video..." name="keywords">
                    <div class="input-group-append">
                        <button class="btn btn-ijo-cel rounded-pill px-4 m-1 shadow-sm">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- VIDEO UTAMA -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="font-weight-bold mb-3">Video Terbaru</h3>

            <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                <div class="position-relative" data-toggle="modal" data-target="#videoModal" data-video="5RMg8QTZJLQ" style="cursor:pointer;">
                    <img src="https://img.youtube.com/vi/5RMg8QTZJLQ/hqdefault.jpg" class="img-fluid w-100" style="height: 550px; object-fit:cover;">

                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center" style="top:0;">
                        <i class="fas fa-play text-white" style="font-size:50px;"></i>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="font-weight-bold">Judul Video</h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- VIDEO LAINNYA -->
    <div class="row mt-5 mb-3">
        <div class="col-12">
            <h4 class="font-weight-bold">Video Lainnya</h4>
            <hr>
        </div>
    </div>

    <div class="row">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 15px;">
                
                <div class="position-relative" data-toggle="modal" data-target="#videoModal" data-video="83-eTFwsGsk" style="cursor:pointer;">
                    <img src="https://img.youtube.com/vi/83-eTFwsGsk/hqdefault.jpg" class="img-fluid w-100">

                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center" style="top:0;">
                        <i class="fas fa-play text-white" style="font-size:40px;"></i>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="font-weight-bold">Judul Video</h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- PAGINATION -->
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <ul class="pagination shadow-sm">
                <li class="page-item disabled"><span class="page-link">‹</span></li>
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">›</a></li>
            </ul>
        </div>
    </div>

</div>

<!-- ✅ MODAL (CUKUP 1) -->
<div class="modal fade" id="videoModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="videoFrame" class="embed-responsive-item" src="" allow="autoplay" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
