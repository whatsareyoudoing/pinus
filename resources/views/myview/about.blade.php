@section('title', 'Tentang Pilar Nusantara')
@extends('myview.index')
@section('content')
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Tentang</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-success">Tentang</h4>
            <h1 style="font-size:4rem;font-weight:bolder;">{{ $site->nama_singkat }}</h1>
            <img class="img-content" src="{{ asset('assets/upload/image/'.$site->gambar) }}" alt="">
            <div class="text-justify mb-3 pt-5">
                {!! $site->tentang !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-justify mb-3">
                <h4>
                    VISI & MISI
                </h4>
                <p>
                    “Membangun Kemitraan bersama Pemerintah, Bisnis dan Masyarakat untuk Penerapan Tata Kelola yang baik bagi Kesejahteraan Masyarakat”
                </p>
                <p>
                    Bermitra dengan masyarakat untuk mengembangkan kapasitas masyarakat agar dapat berpartisipasi aktif dalam tata Kelola.
                    Bermitra dengan Pemerintah, baik pusat dan daerah, untuk menerapkan prinsip-prinsip Good Government dalam program-program pembangunan.
                    Bermitra dengan Perusahaan dalam menerapkan prinsip-prinsip Good Corporate Governance.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 class="">Struktur Organisasi</h4>
            <div class="text-justify mb-3">
                <p>
                    Saat ini PINUS diketuai oleh Direktur Utama yang berada di Kantor Pusat PINUS di Bandung, dan untuk cabang Sumatera Selatan dan Sulawesi Selatan juga diangkat seorang Direktur.  PINUS juga memiliki tim ahli dari berbagai latar belakang seperti ekonomi, sosiologi, dan lingkungan, yang memiliki pengalaman dan kompetensi untuk mengarahkan program-program di PINUS.  Adapun Struktur Organisasi PINUS adalah sebagai berikut :
                </p>
                <img src="{{ asset('assets/pinus/img/struktur.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>



@endsection
