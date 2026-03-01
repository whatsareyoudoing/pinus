@section('title', 'Modul Detail')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/dokumentasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('modul') }}">Modul</a></li>
    <li class="breadcrumb-item active">Modul Detail</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container mb-5">
    <div class="row">
        <div class="col-md-5"><img style="width:100%; height:25rem; max-height: 25rem;" src="https://celios.co.id/wp-content/uploads/2025/01/1739605493-1024x801.jpg"></div>
        <div class="col-md-7 d-flex align-items-center">
            <div class="">
                <h4>Modul PINUS</h4>
                <h2>CHINA-INDONESIA RELATIONS: 2024 Year in Review and 2025 Outlook</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi mollitia quae tenetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <p>Lorem ipsum dolor sit</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Lorem, ipsum dolor.</h5>
            <p class="text-justify">et sunt perspiciatis! Excepturi at atque aut veniam labore fuga facilis itaque numquam dignissimos est nulla, laborum aperiam delectus ipsum similique porro tempore voluptas ducimus accusamus? Dolorem, reiciendis voluptas. Sit eos culpa corporis recusandae unde similique sed minus libero, exercitationem amet labore aliquid quam nobis suscipit expedita perferendis, aut mollitia aperiam harum voluptas iure neque! Corrupti explicabo quibusdam ut inventore recusandae neque, sit cum voluptatem eligendi beatae natus ullam expedita eos modi quas! Pariatur error dolore atque incidunt cum itaque provident reiciendis reprehenderit, vel soluta nulla dolores, delectus perspiciatis. Quas totam labore ut nihil, neque placeat perspiciatis nostrum iste, minima fugiat eligendi sed magni quia qui asperiores, ratione exercitationem! Earum, quo aperiam rem illum recusandae ducimus nobis velit ad consectetur harum veniam porro asperiores beatae repellendus fugiat nisi odit et! Debitis.</p>
            <h5>Lorem, ipsum dolor.</h5>
            <p class="text-justify">et sunt perspiciatis! Excepturi at atque aut veniam labore fuga facilis itaque numquam dignissimos est nulla, laborum aperiam delectus ipsum similique porro tempore voluptas ducimus accusamus? Dolorem, reiciendis voluptas. Sit eos culpa corporis recusandae unde similique sed minus libero, exercitationem amet labore aliquid quam nobis suscipit expedita perferendis, aut mollitia aperiam harum voluptas iure neque! Corrupti explicabo quibusdam ut inventore recusandae neque, sit cum voluptatem eligendi beatae natus ullam expedita eos modi quas! Pariatur error dolore atque incidunt cum itaque provident reiciendis reprehenderit, vel soluta nulla dolores, delectus perspiciatis. Quas totam labore ut nihil, neque placeat perspiciatis nostrum iste, minima fugiat eligendi sed magni quia qui asperiores, ratione exercitationem! Earum, quo aperiam rem illum recusandae ducimus nobis velit ad consectetur harum veniam porro asperiores beatae repellendus fugiat nisi odit et! Debitis.</p>
            <h5>Lorem, ipsum dolor.</h5>
            <p class="text-justify">explicabo quibusdam ut inventore recusandae neque, sit cum voluptatem eligendi beatae natus ullam expedita eos modi quas! Pariatur error dolore atque incidunt cum itaque provident reiciendis reprehenderit, vel soluta nulla dolores, delectus perspiciatis. Quas totam labore ut nihil, neque placeat perspiciatis nostrum iste, minima fugiat eligendi sed magni quia qui asperiores, ratione exercitationem! Earum, quo aperiam rem illum recusandae ducimus nobis velit ad consectetur harum veniam porro asperiores beatae repellendus fugiat nisi odit et! Debitis.</p>
        </div>
    </div>

    
</div>

@endsection
