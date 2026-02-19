<nav class="navbar nav-top position-absolute w-100 ml-auto mb-2">
    <div class="container d-flex justify-content-between pt-3 w-100">
        <img src="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}"
             class="img-fluid nav-item"
             style="width:80px"
             alt="">
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
        <button id="navMobile" class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-custom ml-lg-auto mr-lg-auto">
                <li class="nav-item px-2 {{ request()->routeIs('beranda') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown px-2 {{ request()->is('tentang*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Tentang Kami
                    </a>

                    <div class="dropdown-menu ijo-cel" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="#">Visi & Misi</a>
                        <a class="dropdown-item" href="#">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item px-2 {{ request()->is('berita*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('agenda*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('agenda') }}">Publikasi</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('kontak*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('kontak') }}">Layanan</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('dokumen*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dokumen') }}">Dokumentasi</a>
                </li>
                <li class="nav-item px-2 {{ request()->is('kontak*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
                </li>
                <!-- Google Translate Widget -->
            </ul>
        </div>
    </div>
</nav>


