@section('title', 'Tim Pilar Nusantara')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Tim</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <p class="text-justify">
                Saat ini PINUS diketuai oleh Direktur Utama yang berada di Kantor Pusat PINUS di Bandung, dan untuk cabang Sumatera Selatan dan Sulawesi Selatan juga diangkat seorang Direktur.  PINUS juga memiliki tim ahli dari berbagai latar belakang seperti ekonomi, sosiologi, dan lingkungan, yang memiliki pengalaman dan kompetensi untuk mengarahkan program-program di PINUS.  Adapun Struktur Organisasi PINUS adalah sebagai berikut :
            </p>
        </div>
    </div>
</div>

<h1 class="text-center">Direktur Utama</h1>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Rabin Ibnu Zainal</p>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center">Staff Utama</h1>
<div class="container mb-5" style=" border-bottom: 1px solid;">
    <div class="row justify-content-center mb-5">
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center">Direktur Bagian</h1>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center">Staff Bagian</h1>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://eftindonesia.org/images/home/hero.jpg" class="card-img-top" style=" height: 18rem;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
