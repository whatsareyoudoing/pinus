@section('title', 'Kontak')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Kontak Kami</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Kontak --}}

<div class="continer m-5">
    <div class="row">
        <div class="col-6">
            <h5 class="text-ijo-cel">Formulir Kontak</h5>
            <h1>Kontak Kami</h1>
            <div class="embed-responsive embed-responsive-16by9 border rounded shadow-sm mt-5">
                <iframe
                    class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3496014295325!2d112.64370737483693!3d-7.153993792850383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8005e53c4e819%3A0xa73ae0845e0e3e58!2sRumah%20Sakit%20Grha%20Husada!5e0!3m2!1sid!2sid!4v1708945000000!5m2!1sid!2sid"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <div class="col-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputNomor">No. Telp / Whatsapp</label>
                    <input type="text" class="form-control" id="exampleInputNomor" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage">Pesan</label>
                    <textarea  cols="30" rows="10" class="form-control" id="exampleInputMessage"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-ijo-cel px-5 py-2">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
