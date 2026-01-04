<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PINUS</title>
    {{-- <link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site_config->icon) }}"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- CSS FILES START -->
    <link href="{{ asset('assets/pinus/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/pinus/js/marked.min.js') }}"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
    @include('myview.components.navbar')
    @yield('content')
    @include('myview.components.footer')

<script src="{{ asset('assets/pinus/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/jquery-migrate-1.4.1.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/pinus/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/pinus/js/custom.js') }}"></script>
<script>
    // Inisialisasi Google Translate
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'id',
            includedLanguages: 'en,id',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }



    // Handle Google Translate UI
    document.addEventListener('DOMContentLoaded', function() {
        // Hilangkan banner Google
        const banner = document.querySelector('.goog-te-banner-frame');
        if (banner) {
            banner.style.display = 'none';
        }

        // Set body position
        document.body.style.top = '0px';
    });

    // Deteksi perubahan bahasa
    setInterval(function() {
        const iframe = document.querySelector('.goog-te-menu-frame');
        if (iframe) {
            iframe.style.zIndex = '999999';
        }
    }, 1000);
</script>
</body>
</html>
