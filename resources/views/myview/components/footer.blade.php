{{-- footer --}}
<div class="container-fluid bg-light pb-5 pt-5" style="">
    <div class="container border-bottom">
        <div class="row">
            <div class="col-md-6 notranslate" style="font-size:7vh;">
            PINUS
            </div>
            <div class="col-md-6 d-flex justify-content-end mt-5">
                <ul class="d-flex mr-5" style="font-size:3vh;">
                    <div class="mx-2">
                        <a class="p-0 text-dark" href="#"><i class="fab fa-whatsapp" style=""></i></a>
                    </div>
                    <div class="mx-2">
                        <a class="p-0 text-dark" href="#"><i class="fab fa-instagram" style=""></i></a>
                    </div>
                    <div class="mx-2">
                        <a class="p-0 text-dark" href="#"><i class="fab fa-facebook-square" style=""></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 mobile-border col-md-4 text-justify">
                <h5>Tentang Kami</h5>
                <div class="clamp-3">
                    {!! $site->tentang !!}
                </div>
            </div>
            <div class="col-12 mobile-border col-md-2">
                <h5>Halaman</h5>
                <div class="d-flex flex-column">
                    <a href="{{ route('beranda') }}" class="text-reset my-1  {{ request()->is('beranda*') ? 'font-weight-bold' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('berita') }}" class="text-reset my-1  {{ request()->is('berita*') ? 'font-weight-bold' : '' }}">
                        Berita
                    </a>
                    <a href="{{ route('agenda') }}" class="text-reset my-1  {{ request()->is('agenda*') ? 'font-weight-bold' : '' }}">
                        Program dan kegiatan
                    </a>
                    <a href="{{ route('beranda') }}" class="text-reset my-1  {{ request()->is('beranda*') ? 'font-weight-bold' : '' }}">
                        Dokumen
                    </a>
                    <a href="{{ route('beranda') }}" class="text-reset my-1  {{ request()->is('beranda*') ? 'font-weight-bold' : '' }}">
                        Kontak Kami
                    </a>
                </div>
            </div>
            <div class="col-12 mobile-border col-md-3 text-justify">
                <h5>Berita</h5>
                @foreach ( $recent_berita as $r )
                <div class="d-flex flex-column my-2">
                    <div class="row my-2">
                        <a href="{{ asset('berita/read/'.$r->slug_berita) }}" class="text-reset col-10 mt-1">{{ $r->judul_berita }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 mobile-border col-md-3">
                <h5>Kontak</h5>
                <div class="mb-3">
                    Hubungi kami untuk pertanyaan, kerjasama, atau informasi lebih lanjut mengenai EFT Indonesia.
                </div>
                <div class="d-flex justify-content-end pb-3">
                    <button class="btn btn-success align-items-end">Kontak Kami</button>
                </div>
            </div>
        </div>
    </div>
</div>

