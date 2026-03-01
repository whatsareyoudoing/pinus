<nav class="navbar nav-top position-absolute w-100 ml-auto mb-2">
    <div class="container d-flex justify-content-end pt-3 w-100">
        <div class="nav-item shadow" style="border-radius:30px;">
            <div class="translate-container" >
                <div id="google_translate_element"></div>
                <button class="reset-btn" onclick="resetTranslation()">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 4v6h-6"></path>
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                    </svg>

                </button>
            </div>
        </div>
    </div>
</nav>

<nav id="mainNavbar" class="nav-main navbar navbar-expand-lg navbar-dark bg-transparent py-4 position-fixed w-100" >
    <div class="container">
        {{-- <img src="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}"
            class="hidden-logo img-fluid "
            style="width:80px"
            alt=""
            id="logo2"> --}}
        <img src="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}"
            class="img-fluid big-logo"
            alt=""
            id="logo">
        <button id="navMobile" class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-custom ml-lg-auto mr-lg-auto d-flex align-items-center">
                <li class="nav-item px-2 {{ request()->routeIs('beranda') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown px-2 {{ request()->is('tentang*') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="#"
                        id="navbarDropdown1"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Tentang Kami
                        <i class="fas fa-caret-down px-1"></i>
                    </a>

                    <div class="dropdown-menu ijo-cel" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="{{ route('visimisi') }}" style="font-size: 15px;">Visi & Misi</a>
                        <a class="dropdown-item" href="{{ route('tim') }}" style="font-size: 15px;">Tim</a>
                        <a class="dropdown-item notranslate" href="{{ route('good-governance') }}" style="font-size: 15px;">Good Governance</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px;">Portofolio</a>
                    </div>
                </li>
                <li class="nav-item px-2 {{ request()->is('berita*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                </li>
                {{-- <li class="nav-item px-2 {{ request()->is('agenda*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('agenda') }}">Publikasi</a>
                </li> --}}
                <li class="nav-item dropdown px-2 {{ request()->is('publikasi*') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="#"
                        id="navbarDropdown2"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Publikasi
                        <i class="fas fa-caret-down px-1"></i>
                    </a>

                    <div class="dropdown-menu ijo-cel" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item notranslate" href="{{ route('policy') }}" style="font-size: 15px;">Policy Brief</a>
                        <a class="dropdown-item" href="{{ route('video') }}" style="font-size: 15px;">Video</a>
                    </div>
                </li>
                {{-- <li class="nav-item px-2 {{ request()->is('kontak*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('kontak') }}">Layanan</a>
                </li> --}}
                <li class="nav-item dropdown px-2 {{ request()->is('layanan*') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="#"
                        id="navbarDropdown3"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Layanan
                        <i class="fas fa-caret-down px-1"></i>
                    </a>

                    <div class="dropdown-menu ijo-cel" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="{{ route('pelatihan') }}" style="font-size: 15px;">Pelatihan SAR</a>
                        <a class="dropdown-item" href="https://eftindonesia.org/lembaga-anggota-kmspe/4" style="font-size: 15px;" target="_blank">EFT</a>
                        <a class="dropdown-item" href="{{ route('produk') }}" style="font-size: 15px;">Produk Dampingan</a>
                    </div>
                </li>
                {{-- <li class="nav-item px-2 {{ request()->is('dokumen*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dokumen') }}">Dokumentasi</a>
                </li> --}}
                <li class="nav-item dropdown px-2 {{ request()->is('dokumen*') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="#"
                        id="navbarDropdown4"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Dokumentasi
                        <i class="fas fa-caret-down px-1"></i>
                    </a>

                    <div class="dropdown-menu ijo-cel" aria-labelledby="navbarDropdown4">
                        <a class="dropdown-item" href="{{ route('dokumen') }}" style="font-size: 15px;">Berkas</a>
                        <a class="dropdown-item" href="{{ route('modul') }}" style="font-size: 15px;">Modul</a>
                    </div>
                </li>
                <li class="nav-item px-2 {{ request()->is('kontak*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
                </li>
                <!-- Google Translate Widget -->
            </ul>
        </div>
    </div>
</nav>


