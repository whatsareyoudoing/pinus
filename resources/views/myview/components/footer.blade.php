{{-- footer --}}
<div class="container-fluid py-4" style="background-color: #f8f7f0">
    <div class="container border-bottom">
        <div class="row d-flex justify-content-end">
            <div class="col-md-6 d-flex justify-content-end">
                <ul class="d-flex justify-content-end" style="font-size:3vh;">
                    <div class="mx-2">
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
                        <a class="p-0 text-dark" href="https://wa.me/{{ $telp }}"><i class="fab fa-whatsapp" style="font-size:25px"></i></a>
                    </div>
                    <div class="mx-2">
                        <a class="p-0 text-dark" href="https://www.instagram.com/{{ $site->instagram }}"><i class="fab fa-instagram" style="font-size:25px"></i></a>
                    </div>
                    <div class="mx-2">
                        <a class="p-0 text-dark" href="https://www.facebook.com/{{ $site->facebook }}"><i class="fab fa-facebook-square" style="font-size:25px"></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-12 mobile-border col-md-3">
                <h5 class="font-weight-bold">Halaman</h5>
                <div class="d-flex flex-column">
                    <a href="{{ route('beranda') }}" class="text-reset my-1  {{ request()->is('beranda*') ? 'font-weight-bold' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('berita') }}" class="text-reset my-1  {{ request()->is('berita*') ? 'font-weight-bold' : '' }}">
                        Berita
                    </a>
                    <a href="{{ route('event') }}" class="text-reset my-1  {{ request()->is('event*') ? 'font-weight-bold' : '' }}">
                        Events
                    </a>
                    <a href="{{ route('dokumen') }}" class="text-reset my-1  {{ request()->is('dokumen*') ? 'font-weight-bold' : '' }}">
                        Dokumen
                    </a>
                    <a href="{{ route('kontak') }}" class="text-reset my-1  {{ request()->is('kontak*') ? 'font-weight-bold' : '' }}">
                        Kontak Kami
                    </a>
                </div>
            </div>
            <div class="col-12 mobile-border col-md-3 text-justify">
                <h5 class="font-weight-bold">Berita</h5>
                @foreach ( $recent_berita as $r )
                <div class="d-flex flex-column my-2">
                    <div class="row">
                        <a href="{{ asset('berita/read/'.$r->slug_berita) }}" class="text-reset col-10">{{ $r->judul_berita }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 mobile-border col-md-3 text-justify pb-3">
                <div class="d-flex flex-column">
                    <h5 class="font-weight-bold">Produk Kami</h5>

                    <a href="https://shopee.co.id" class="mt-3 text-white text-left" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/pinus/img/shopee.png') }}"
                        class="" style="width: 140px;"
                        alt=""
                        id="logo">
                    </a>
                    <a href="https://tokopedia.com" class="mt-3 text-white text-left" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/pinus/img/tokped.png') }}"
                        class="" style="width: 140px;"
                        alt=""
                        id="logo">
                    </a>
                </div>
            </div>
            <div class="col-12 mobile-border col-md-3">
                <div class="mb-3 text-justify">
                    <a class="pengunjung" href="https://info.flagcounter.com/uyMD"><img src="https://s01.flagcounter.com/countxl/uyMD/bg_f8f7f0/txt_000000/border_f8f7f0/columns_3/maxflags_12/viewers_Pengunjung/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                    <a class="visitor d-none" href="https://info.flagcounter.com/uyMD"><img src="https://s01.flagcounter.com/countxl/uyMD/bg_f8f7f0/txt_000000/border_f8f7f0/columns_3/maxflags_12/viewers_Visitor/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ijo-cel border-top py-4">
    <div class="row">
        <div class="col text-white text-center">
            Copyright © 2026 All Rights Reserved.
        </div>
    </div>
</div>

