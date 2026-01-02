@section('title', 'Berita Pinus')
@extends('myview.index')
@section('content')
@include('myview.components.hero')
    <div class="container-fluid px-0 px-md-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="">
                                <img src="https://eftindonesia.org/images/home/feature.png" class="img-content rounded-top" alt="...">
                                <div class="border">
                                    <div class="d-flex border-bottom mx-2 p-3">
                                        <div class="mx-2">
                                            <i class="fas fa-user"></i>
                                            admin
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-calendar"></i>
                                            12 Des 2026
                                        </div>
                                        <div class="mx-2">
                                            <i class="fas fa-folder"></i>
                                            healty
                                        </div>
                                    </div>
                                    <h3 class="p-3">Lorem ipsum dolor sit amet.</h3>
                                    <p class="text-justify pb-3 px-3">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, quas. Illum corrupti quidem rem ducimus provident tempore nostrum ipsa ipsum minus quae quos animi facilis dolorum praesentium ullam, dolorem vitae veniam enim velit repellendus, magnam ab! Sint eius consequatur hic, numquam maxime, et quasi aspernatur doloremque, recusandae obcaecati corporis voluptas.
                                    </p>
                                    <div class="d-flex justify-content-end pb-5 pr-3">
                                        <a href="#" class="btn btn-success">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form class="py-3" action="" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Berita" aria-label="Cari Berita" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" id="button-addon2">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group pb-5">
                                <li class="list-group-item bg-success text-white font-weight-bold">
                                    <h5>
                                        Kategori
                                    </h5>
                                </li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group">
                                <li class="list-group-item bg-success text-white font-weight-bold">
                                    <h5>
                                        Recent Post
                                    </h5>
                                </li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
