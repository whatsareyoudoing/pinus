<div class="jumbotron jumbotron-fluid text-white hero-pt" 
  style="background: 
          linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
          url('@yield('hero_bg')') no-repeat center center / cover fixed;">
  <div class="container">
    <h1 class="display-4">@yield('title')</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            @yield('link')
        </ol>
    </nav>
  </div>
</div>
