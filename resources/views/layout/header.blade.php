<?php
$site_config = DB::table('konfigurasi')->first();
?>
<body class="index-page">

   <header id="header" class="header d-flex align-items-center sticky-top">
       <div class="container position-relative d-flex align-items-center">
         
      
           <a href="{{ asset('/') }}" class="logo d-flex align-items-center me-auto">
               <!-- Uncomment the line below if you also wish to use an image logo -->
               <img src="{{ asset('assets/upload/image/' . $site_config->logo) }}" alt="{{ $site_config->namaweb }}"> 
              
           </a>

         
