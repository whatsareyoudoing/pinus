@section('title', 'Kontak')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/kontak-hero.png'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Kontak Kami</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Kontak --}}

<div class="container-fluid">
    <div class="container">
        <h5 class="text-ijo-cel">Formulir Kontak</h5>
        <h1>Kontak Kami</h1>
        <div class="row">
            {{-- <div class="col-lg-6 col-sm-12">
                <div class="border rounded shadow-sm mt-4">
                    <iframe
                        class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3496014295325!2d112.64370737483693!3d-7.153993792850383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8005e53c4e819%3A0xa73ae0845e0e3e58!2sRumah%20Sakit%20Grha%20Husada!5e0!3m2!1sid!2sid!4v1708945000000!5m2!1sid!2sid"
                        allowfullscreen=""
                        loading="lazy"
                        style="border:0; width: 100%; height: 100%; min-height: 100%;"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div> --}}
            <div class="col-lg-6 col-sm-12 d-flex align-items-stretch">
                <div class="border rounded shadow-sm mt-4 w-100" style="min-height: 300px;">
                    <iframe
                        class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3496014295325!2d112.64370737483693!3d-7.153993792850383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8005e53c4e819%3A0xa73ae0845e0e3e58!2sRumah%20Sakit%20Grha%20Husada!5e0!3m2!1sid!2sid!4v1708945000000!5m2!1sid!2sid"
                        allowfullscreen=""
                        loading="lazy"
                        style="border:0; width: 100%; height: 100%; min-height: 100%;"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputName"></label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Nama Lengkap" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat Email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputNomor" placeholder="No. Telp / Whatsapp" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <textarea  cols="30" rows="10" class="form-control" placeholder="Pesan" id="exampleInputMessage"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-ijo-cel px-5 py-2">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5">
    <div class="row g-4">
        <div class="col-md-4 d-flex flex-column justify-content-start">
            <h6 class="font-weight-bold mb-2">Kantor PINUS Pusat Main Office:</h6>
            <p class="text-muted small">
                Jl. H. Tohir No.16, RT. 3/RW. 5, Lenteng Agung, Kec. Jagakarsa, 
                Kota Jakarta Selatan, DKI Jakarta 12630
            </p>
        </div>

        <div class="col-md-4 d-flex flex-column justify-content-start">
            <h6 class="font-weight-bold mb-2">Kantor PINUS Sumsel:</h6>
            <p class="text-muted small">
                Komplek Perumahan Bukit Sejahtera, Blok G6, Bukit Baru, Palembang.<br>
                <strong>Telp:</strong> 0811-718481
            </p>
        </div>

        <div class="col-md-4 d-flex flex-column justify-content-start">
            <h6 class="font-weight-bold mb-2">Kantor PINUS Sulsel:</h6>
            <p class="text-muted small">
                Jl. Hertasning 5 No. 28 B Makassar, Sulawesi Selatan.<br>
                <strong>Telp:</strong> 0411-885110
            </p>
        </div>
    </div>
</div>


@endsection
