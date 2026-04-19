<div class="jumbotron jumbotron-fluid text-white hero-pt text-center" 
  style="background: 
          linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
          url('@yield('hero_bg')') no-repeat center center / cover fixed;">
  <div class="container">
    <h1 class="display-4 font-weight-bold">@yield('title')</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent d-flex justify-content-center">
            @yield('link')
        </ol>
    </nav>
  </div>
</div>
