<?php
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil

?>

<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ asset('/') }}" class="active">Home</a></li>
   
        <li><a href="">Produk</a></li>
        <li><a href="">Mitra</a></li>
        <li><a href="">Document</a></li>

    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

<div class="header-social-links">
   
   
    <a href="{{ $site_config->twitter }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
    <a href="{{ $site_config->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="{{ $site_config->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
    
</div>

</div>
</header>

<main class="main">


