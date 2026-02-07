{{-- <div class="position-absolute d-none d-md-block" style="width:450px;height:50px">
        <div class="position-absolute" style="
            width:450px;
            height:50px;
            z-index: 9999;
            border-left:0px solid transparent;
            border-right:90px solid transparent;
            border-top:145px solid #4baf47;
        ">
    </div>
    <div class="ml-5 pt-4 position-absolute text-white" style="
        z-index:10000;
        padding-left:80px;
        font-size:50px">
        <img src="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}" class="img-fluid" alt="" style="width: 130px;">

    </div>
         <div class="position-absolute" style="
            width:459px;
            height:50px;
            z-index: 9998;
            border-left:0px solid transparent;
            border-right:90px solid transparent;
            border-top:145px solid rgb(0, 0, 0);
        ">
    </div>
</div> --}}

{{-- <div class="position-absolute d-block d-md-none" style="width:100px;height:50px">
        <div class="position-absolute" style="
            width:250px;
            height:50px;
            z-index: 9999;
            border-left:0px solid transparent;
            border-right:90px solid transparent;
            border-top:145px solid #4baf47;
        ">
    </div>
    <div class="ml-5 pt-4 position-absolute text-white" style="
        z-index:10000;
        padding-left:10px;
        font-size:50px">
        <img src="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}" alt="" style="width: 100px;">

    </div>
         <div class="position-absolute" style="
            width:259px;
            height:50px;
            z-index: 9998;
            border-left:0px solid transparent;
            border-right:90px solid transparent;
            border-top:145px solid rgb(0, 0, 0);
        ">
    </div>
</div> --}}

{{--
<nav class="navbar navbar-expand-lg navbar-light bg-trnasparent py-3">
    <div class="container-fluid">
        <div class="ml-auto d-flex justify-content-between " style="width:75%;">
            <ul class="navbar-nav flex-row d-none d-md-none d-lg-flex">
                <li class="nav-item ml-custom">
                    <a class="nav-link p-0" href="#">
                        <i class="fas fa-phone-alt"></i>
                        {{ $site->telepon }}
                    </a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link p-0" href="#">
                        <i class="fas fa-envelope"></i>
                        {{ $site->email }}
                    </a>
                </li>
            </ul>
            @php
                // Ambil nomor
                $telp = $site->telepon ?? '';

                // Hilangkan semua karakter non-angka
                $telp = preg_replace('/\D+/', '', $telp);

                // Kalau masih pakai 0 di depan → ubah ke 62
                if (substr($telp, 0, 1) === '0') {
                    $telp = '62' . substr($telp, 1);
                }
            @endphp
            <ul class="navbar-nav flex-row ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link p-0" href="https://wa.me/{{ $telp }}" target="_blank"><i class="fab fa-whatsapp" style="font-size: 20px"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link p-0" href="https://www.instagram.com/{{ $site->instagram }}" target="_blank"><i class="fab fa-instagram" style="font-size: 20px"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link p-0" href="https://www.facebook.com/{{ $site->facebook }}" target="_blank"><i class="fab fa-facebook-square" style="font-size: 20px"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-transparent pt-lg-5 pb-lg-4 py-sm-3 position-fixed w-100" style=" z-index:1030;">
    <div class="container-fluid">
        <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mt-5 mt-lg-auto mx-md-auto text-custom">
                <li class="nav-item px-2 ">
                    <img src="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}" class="img-fluid" alt="" style="width: 100px;">
                </li>
                <li class="nav-item px-2 {{ request()->routeIs('beranda') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('tentang*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('berita*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('agenda*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('agenda') }}">Program dan Kegiatan</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('dokumen*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dokumen') }}">Dokumen</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('kontak*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
                </li>
                <!-- Google Translate Widget -->
                <li class="nav-item">
                    <div class="translate-container">
                        <div id="google_translate_element"></div>
                        <button class="reset-btn" onclick="resetTranslation()">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 4v6h-6"></path>
                                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                            </svg>

                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


