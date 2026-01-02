@extends('myview.index')
@section('content')

{{-- Halaman Article --}}

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://eftindonesia.org/images/home/hero.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://eftindonesia.org/images/home/hero.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://eftindonesia.org/images/home/hero.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-success">Selamat Datang di Pinus</h4>
            <h1 style="font-size:4rem;font-weight:bolder;">Kolaborasi Indonesia Yang Lebih Hijau</h1>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptate assumenda expedita fugiat in dolores veritatis nisi labore veniam, dolor consequatur maiores atque qui. Iste.
            </p>
            <a href="#" class="btn btn-success mb-3">
                Selengkapnya
            </a>
        </div>
        <div class="col-md-6">
            <img class="img-fluid rounded-lg" src="https://eftindonesia.org/images/home/feature.png" alt="">
        </div>
    </div>
</div>
<div class="container-fluid p-5" style="background-color: #00190a;">
    <h5 class="text-center text-success">Berita Kami</h5>
    <h1 class="text-center text-white">Berita Terkini</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-3 p-4">
            <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 p-4">
            <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 p-4">
            <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-success ">Selengkapnya</button>
        </div>
    </div>
</div>
{{-- tentang --}}
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-success">Tentang</h4>
            <h1 style="font-size:3rem;font-weight:bolder;">Kolaborasi Indonesia Yang Lebih Hijau</h1>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptate assumenda expedita fugiat in dolores veritatis nisi labore veniam, dolor consequatur maiores atque qui. Iste.
            </p>
            <a href="#" class="btn btn-success mb-3">
                Selengkapnya
            </a>
        </div>

    </div>
</div>
{{-- Program dan kegiatan --}}
<div class="container-fluid p-5">
    <h5 class="text-success text-center">Acara Kami</h5>
    <h1 class="text-center">Program dan Kegiatan</h1>
    <div class="row">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-3 p-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 p-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 p-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-success ">Selengkapnya</button>
        </div>
    </div>
</div>
{{-- Mitra --}}
<div class="container my-5">
    <h5 class="text-center text-success">Mitra Kami</h5>
    <h1 class="text-center">Mitra</h1>
    <div class="row">
        <div class="col-12 col-md-3">
                <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
                <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
                <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
                <div class="card border-0 shadow-sm">
                <img src="https://eftindonesia.org/images/home/feature.png" class="card-img-top img-card" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
