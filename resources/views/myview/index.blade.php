<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PINUS (Pilar Nusantara) adalah lembaga pemberdayaan masyarakat yang berdiri sejak 2006, bergerak di bidang sosial, pendidikan, dan ekonomi umat di Indonesia.">
    <title class="notranslate">Pinus</title>
    {{-- <link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site_config->icon) }}"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/pinus/img/Pinus-Logo-Hires-w-c.png') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS FILES START -->
    <link href="{{ asset('assets/pinus/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pinus/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/pinus/js/marked.min.js') }}"></script>
    <script type="text/javascript">
        // Inisialisasi Google Translate
        window.googleTranslateElementInit = function() {
            console.log("Google Translate Init");

            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en,id',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false,
                // Simpan instance untuk akses nanti
                onLoad: function(instance) {
                    console.log("Google Translate loaded, instance:", instance);
                    window.googleTranslateInstance = instance;
                }
            }, 'google_translate_element');
        };

        // Load Google Translate Script
        (function() {
            const script = document.createElement('script');
            script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);

        })();

    </script>

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

    // $(document).ready(function () {

    //     $('#navbarNav')
    //         .on('show.bs.collapse', function () {
    //             $('#mainNavbar')
    //                 .addClass('ijo-cel')
    //                 .removeClass('bg-transparent');
    //         })
    //         .on('hide.bs.collapse', function () {
    //             $('#mainNavbar')
    //                 .removeClass('ijo-cel')
    //                 .addClass('bg-transparent');
    //         });

    // });

    // $(window).on('scroll', function () {
    //     if ($(this).scrollTop() > 50) {
    //         $('#mainNavbar')
    //             .addClass('navbar-scrolled ijo-cel no-top')
    //             .removeClass('bg-transparent');

    //     } else {
    //         $('#mainNavbar')
    //             .removeClass('navbar-scrolled ijo-cel no-top')
    //             .addClass('bg-transparent');

    //     }
    // });

    $(document).ready(function () {

        let isNavOpen = false;

        $('#navbarNav')
            .on('show.bs.collapse', function () {
                isNavOpen = true;

                $('#mainNavbar')
                    .addClass('ijo-cel')
                    .removeClass('bg-transparent');
            })
            .on('hide.bs.collapse', function () {
                isNavOpen = false;

                if ($(window).scrollTop() <= 50) {
                    $('#mainNavbar')
                        .removeClass('ijo-cel navbar-scrolled no-top')
                        .addClass('bg-transparent');
                }
            });

        $(window).on('scroll', function () {

            if (isNavOpen) return; // ⛔ STOP kalau menu lagi terbuka

            if ($(this).scrollTop() > 50) {
                $('#mainNavbar')
                    .addClass('navbar-scrolled ijo-cel no-top')
                    .removeClass('bg-transparent');
            } else {
                $('#mainNavbar')
                    .removeClass('navbar-scrolled ijo-cel no-top')
                    .addClass('bg-transparent');
            }

        });






    });


    // ========== FUNGSI RESET YANG BERFUNGSI ==========

    // Method 1: Reset dengan instance Google Translate
    window.resetTranslation = function() {
        console.log("=== RESET TRANSLATION ===");

        // Coba semua method sampai salah satu berhasil
        const methods = [
            resetUsingGoogleInstance,
            resetUsingCookies,
            resetUsingLocalStorage,
            resetUsingPageReload
        ];

        for (let method of methods) {
            console.log(`Mencoba method: ${method.name}`);
            if (method()) {
                return true;
            }
        }

        alert("Reset gagal. Coba refresh halaman manual.");
        return false;
    };

    // Method A: Menggunakan Google Translate Instance
    function resetUsingGoogleInstance() {
        try {
            // Cara 1: Menggunakan getInstance()
            if (typeof google !== 'undefined' && google.translate) {
                const instance = google.translate.translateElement.getInstance();
                if (instance && typeof instance.restore === 'function') {
                    instance.restore();
                    console.log("✅ Reset dengan instance Google berhasil");
                    updateLanguageInfo("Bahasa direset ke Indonesia (menggunakan Google instance)");
                    return true;
                }
            }

            // Cara 2: Menggunakan window.googleTranslateInstance
            if (window.googleTranslateInstance && typeof window.googleTranslateInstance.restore === 'function') {
                window.googleTranslateInstance.restore();
                console.log("✅ Reset dengan window instance berhasil");
                updateLanguageInfo("Bahasa direset ke Indonesia");
                return true;
            }

            // Cara 3: Coba panggil restore langsung
            const iframe = document.querySelector('.goog-te-menu-frame');
            if (iframe && iframe.contentWindow) {
                iframe.contentWindow.postMessage('restore', '*');
                console.log("✅ Reset dengan postMessage berhasil");
                return true;
            }
        } catch (error) {
            console.warn("Reset dengan instance gagal:", error);
        }
        return false;
    }

    // Method B: Reset dengan menghapus cookies
    function resetUsingCookies() {
        try {
            // Hapus semua cookie Google Translate
            const domains = [
                window.location.hostname,
                '.' + window.location.hostname,
                'translate.google.com',
                '.translate.google.com'
            ];

            domains.forEach(domain => {
                document.cookie = `googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=${domain};`;
                document.cookie = `googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
            });

            // Hapus cookies lain yang terkait
            const cookies = document.cookie.split(';');
            cookies.forEach(cookie => {
                const [name] = cookie.split('=');
                if (name.includes('google') || name.includes('goog')) {
                    document.cookie = `${name.trim()}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
                }
            });

            console.log("✅ Cookies Google Translate dihapus");
            updateLanguageInfo("Cookies dihapus, refresh halaman");

            // Refresh setelah 1 detik
            setTimeout(() => {
                window.location.reload();
            }, 1000);

            return true;
        } catch (error) {
            console.warn("Reset dengan cookies gagal:", error);
            return false;
        }
    }

    // Method C: Reset dengan localStorage
    function resetUsingLocalStorage() {
        try {
            // Hapus item localStorage Google Translate
            const keys = Object.keys(localStorage);
            keys.forEach(key => {
                if (key.includes('google') || key.includes('goog') || key.includes('translate')) {
                    localStorage.removeItem(key);
                }
            });

            // Hapus sessionStorage juga
            const sessionKeys = Object.keys(sessionStorage);
            sessionKeys.forEach(key => {
                if (key.includes('google') || key.includes('goog') || key.includes('translate')) {
                    sessionStorage.removeItem(key);
                }
            });

            console.log("✅ localStorage Google Translate dihapus");
            updateLanguageInfo("Cache dibersihkan, refresh halaman");

            setTimeout(() => {
                window.location.reload();
            }, 1000);

            return true;
        } catch (error) {
            console.warn("Reset dengan localStorage gagal:", error);
            return false;
        }
    }

    // Method D: Reset dengan reload halaman
    function resetUsingPageReload() {
        try {
            // Hapus parameter translate dari URL
            const url = new URL(window.location.href);

            // Hapus parameter yang terkait translate
            const translateParams = ['tl', 'hl', 'lang', 'language', 'translate'];
            translateParams.forEach(param => {
                url.searchParams.delete(param);
            });

            // Redirect ke URL tanpa parameter translate
            window.location.href = url.toString();
            console.log("✅ Redirect ke URL tanpa parameter translate");
            return true;
        } catch (error) {
            console.warn("Reset dengan reload gagal:", error);
            return false;
        }
    }

    // ========== FUNGSI TAMBAHAN ==========

    // Deteksi bahasa saat ini
    window.detectCurrentLanguage = function() {
        console.log("=== DETEKSI BAHASA ===");

        // Cek dari cookie
        const cookies = document.cookie.split(';');
        let googtrans = '';

        cookies.forEach(cookie => {
            if (cookie.includes('googtrans')) {
                googtrans = cookie.split('=')[1];
            }
        });

        // Cek dari localStorage
        let detectedLang = 'id'; // default

        if (googtrans) {
            // Format: /id/en (dari bahasa id ke bahasa en)
            const parts = googtrans.split('/');
            if (parts.length >= 3) {
                detectedLang = parts[2];
            }
        }

        // Cek dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const urlLang = urlParams.get('tl') || urlParams.get('hl') || urlParams.get('lang');
        if (urlLang) {
            detectedLang = urlLang;
        }

        // Cek dari HTML lang attribute
        const htmlLang = document.documentElement.lang;
        if (htmlLang) {
            detectedLang = htmlLang;
        }

        const languages = {
            'id': 'Indonesia',
            'en': 'English',

        };

        const langName = languages[detectedLang] || detectedLang;
        updateLanguageInfo(`Bahasa terdeteksi: ${langName} (${detectedLang})`);

        console.log("Bahasa terdeteksi:", detectedLang);
        return detectedLang;
    };

    // Update info bahasa
    function updateLanguageInfo(message) {
        const infoEl = document.getElementById('languageInfo');
        if (infoEl) {
            infoEl.innerHTML = `<strong>Info:</strong> ${message}`;
            infoEl.style.background = '#d4edda';
            infoEl.style.color = '#155724';
            infoEl.style.border = '1px solid #c3e6cb';
        }
    }

    // ========== EVENT LISTENERS ==========

    // Auto detect bahasa saat halaman load
    document.addEventListener('DOMContentLoaded', function() {
        console.log("DOM loaded");
        setTimeout(detectCurrentLanguage, 2000);

        // Monitor perubahan bahasa
        setInterval(detectCurrentLanguage, 5000);
    });

    // Intercept klik pada widget Google Translate
    document.addEventListener('click', function(e) {
        // Jika klik di widget Google Translate
        if (e.target.closest('.goog-te-gadget')) {
            console.log("Google Translate widget diklik");
            setTimeout(detectCurrentLanguage, 1000);
        }
    });

    // Sembunyikan banner Google
    const style = document.createElement('style');
    style.textContent = `
        .goog-te-banner-frame { display: none !important; }
        body { top: 0 !important; }
        .goog-te-gadget-simple {
            border: 2px solid #4285f4 !important;
            border-radius: 6px !important;
            padding: 8px 12px !important;
        }
    `;
    document.head.appendChild(style);

</script>


</body>
</html>
