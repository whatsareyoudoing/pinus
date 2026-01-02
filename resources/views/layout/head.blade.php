<?php 
$site_config = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ $title }}</title>
<meta name="description" content="{{ $deskripsi }}">
<meta name="keywords" content="{{ $keywords }}"
<meta name="author" content="{{ $site_config->namaweb }}">
<!-- icon -->
<link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site_config->icon) }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
<!-- CSS FILES START -->
{{-- <link href="{{ asset('assets/aws/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('assets/aws/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('assets/aws/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/aws/css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/aws/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/aws/css/prettyPhoto.css') }}" rel="stylesheet">
<link href="{{ asset('assets/aws/css/all.min.css') }}" rel="stylesheet"> --}}
<script src="{{ asset('assets/aws/js/marked.min.js') }}"></script>


<!--  ASSET BARU UNTUK LAYOUT BARU --> 
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets_bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_bootstrap/assets/vendor/aos/aos.css') }}"rel="stylesheet">
  <link href="{{ asset('assets_bootstrap/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_bootstrap/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href=" {{ asset('assets_bootstrap/assets/css/main.css') }}" rel="stylesheet">


<?php echo $site_config->metatext ?>
</head>

<body>