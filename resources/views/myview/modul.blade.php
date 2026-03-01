@section('title', 'Modul')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/dokumentasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Modul</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row">
        <div class="col-md">
            <form class="py-3" action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Modul" aria-label="Cari Modul" name="keywords" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn btn-ijo-cel px-5" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column" style="">
                <img style="width:100%; max-height: 15rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg">
                <a href="{{ route('modul-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Modul</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column" style="">
                <img style="width:100%; max-height: 15rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg">
                <a href="{{ route('modul-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Modul</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column" style="">
                <img style="width:100%; max-height: 15rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg">
                <a href="{{ route('modul-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Modul</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column" style="">
                <img style="width:100%; max-height: 15rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg">
                <a href="{{ route('modul-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Modul</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column" style="">
                <img style="width:100%; max-height: 15rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg">
                <a href="{{ route('modul-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Modul</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column" style="">
                <img style="width:100%; max-height: 15rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg">
                <a href="{{ route('modul-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Modul</h5>
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
