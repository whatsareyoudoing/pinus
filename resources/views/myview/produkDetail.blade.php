@section('title', 'Produk Detail')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/dokumentasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('produk') }}">Produk</a></li>
    <li class="breadcrumb-item active">Produk Detail</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-md-5">
            <img style="width:100%; height:25rem; max-height: 25rem; border-radius: 15px" src="https://img.antarafoto.com/cache/1200x800/2021/03/08/kerajinan-tangan-dari-tanaman-eceng-gondok-t45r-dom.jpg">
        </div>
        <div class="col-md-7 d-flex align-items-center">
            <div class="">
                <h4>Produk PINUS</h4>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptas itaque rerum.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi mollitia quae tenetur.</p>
                <a href="https://shopee.co.id" class="btn text-white" style="background-color: #fa5030" target="_blank" rel="noopener noreferrer">Shopee</a>
                <a href="https://tokopedia.com" class="btn text-white" style="background-color: #03ac0e" target="_blank" rel="noopener noreferrer">Tokopedia</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-justify">et sunt perspiciatis! Excepturi at atque aut veniam labore fuga facilis itaque numquam dignissimos est nulla, laborum aperiam delectus ipsum similique porro tempore voluptas ducimus accusamus? Dolorem, reiciendis voluptas. Sit eos culpa corporis recusandae unde similique sed minus libero, exercitationem amet labore aliquid quam nobis suscipit expedita perferendis, aut mollitia aperiam harum voluptas iure neque! Corrupti explicabo quibusdam ut inventore recusandae neque, sit cum voluptatem eligendi beatae natus ullam expedita eos modi quas! Pariatur error dolore atque incidunt cum itaque provident reiciendis reprehenderit, vel soluta nulla dolores, delectus perspiciatis. Quas totam labore ut nihil, neque placeat perspiciatis nostrum iste, minima fugiat eligendi sed magni quia qui asperiores, ratione exercitationem! Earum, quo aperiam rem illum recusandae ducimus nobis velit ad consectetur harum veniam porro asperiores beatae repellendus fugiat nisi odit et! Debitis.</p>
        </div>
    </div>

    
</div>

@endsection
