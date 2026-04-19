@section('title', 'Pelatihan SAR')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/dokumentasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Pelatihan SAR</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row d-flex justify-content-end">
        <div class="col-md-5">
            <form class="py-3" action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control py-4" placeholder="Cari Pelatihan SAR" aria-label="Cari Pelatihan SAR" name="keywords" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn btn-ijo-cel px-5" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column border shadow" style="border-radius: 10px;">
                <img style="width:100%; max-height: 15rem; border-radius: 10px 10px 0 0;" src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
                <a href="{{ route('pelatihan-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Pelatihan SAR</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column border shadow" style="border-radius: 10px;">
                <img style="width:100%; max-height: 15rem; border-radius: 10px 10px 0 0;" src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
                <a href="{{ route('pelatihan-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Pelatihan SAR</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column border shadow" style="border-radius: 10px;">
                <img style="width:100%; max-height: 15rem; border-radius: 10px 10px 0 0;" src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
                <a href="{{ route('pelatihan-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Pelatihan SAR</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column border shadow" style="border-radius: 10px;">
                <img style="width:100%; max-height: 15rem; border-radius: 10px 10px 0 0;" src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
                <a href="{{ route('pelatihan-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Pelatihan SAR</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column border shadow" style="border-radius: 10px;">
                <img style="width:100%; max-height: 15rem; border-radius: 10px 10px 0 0;" src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
                <a href="{{ route('pelatihan-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Pelatihan SAR</h5>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mt-4 d-flex justify-content-center flex-column border shadow" style="border-radius: 10px;">
                <img style="width:100%; max-height: 15rem; border-radius: 10px 10px 0 0;" src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
                <a href="{{ route('pelatihan-detail') }}" class="p-3 text-decoration-none text-dark" style="">
                    <h5 class="text-center">Judul Pelatihan SAR</h5>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
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
</div>

@endsection
