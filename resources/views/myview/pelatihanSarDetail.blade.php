@section('title', 'Pelatihan SAR Detail')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/dokumentasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('pelatihan') }}">Pelatihan SAR</a></li>
    <li class="breadcrumb-item active">Pelatihan SAR Detail</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit modi rem</h2>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-12">
            <img style="width: 100%; height: 25rem; object-fit: cover; border-radius: 10px;" 
            src="https://polinela.ac.id/wp-content/uploads/2019/12/sar_and_rescue_garda_polinela-1034x642.jpg">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-justify">et sunt perspiciatis! Excepturi at atque aut veniam labore fuga facilis itaque numquam dignissimos est nulla, laborum aperiam delectus ipsum similique porro tempore voluptas ducimus accusamus? Dolorem, reiciendis voluptas. Sit eos culpa corporis recusandae unde similique sed minus libero, exercitationem amet labore aliquid quam nobis suscipit expedita perferendis, aut mollitia aperiam harum voluptas iure neque! Corrupti explicabo quibusdam ut inventore recusandae neque, sit cum voluptatem eligendi beatae natus ullam expedita eos modi quas! Pariatur error dolore atque incidunt cum itaque provident reiciendis reprehenderit, vel soluta nulla dolores, delectus perspiciatis. Quas totam labore ut nihil, neque placeat perspiciatis nostrum iste, minima fugiat eligendi sed magni quia qui asperiores, ratione exercitationem! Earum, quo aperiam rem illum recusandae ducimus nobis velit ad consectetur harum veniam porro asperiores beatae repellendus fugiat nisi odit et! Debitis.</p>
            <p class="text-justify">et sunt perspiciatis! Excepturi at atque aut veniam labore fuga facilis itaque numquam dignissimos est nulla, laborum aperiam delectus ipsum similique porro tempore voluptas ducimus accusamus? Dolorem, reiciendis voluptas. Sit eos culpa corporis recusandae unde similique sed minus libero, exercitationem amet labore aliquid quam nobis suscipit expedita perferendis, aut mollitia aperiam harum voluptas iure neque! Corrupti explicabo quibusdam ut inventore recusandae neque, sit cum voluptatem eligendi beatae natus ullam expedita eos modi quas! Pariatur error dolore atque incidunt cum itaque provident reiciendis reprehenderit, vel soluta nulla dolores, delectus perspiciatis. Quas totam labore ut nihil, neque placeat perspiciatis nostrum iste, minima fugiat eligendi sed magni quia qui asperiores, ratione exercitationem! Earum, quo aperiam rem illum recusandae ducimus nobis velit ad consectetur harum veniam porro asperiores beatae repellendus fugiat nisi odit et! Debitis.</p>
        </div>
    </div>

    
</div>

@endsection
