<?php 
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profilf  = $myprofil->nav_profil();
$nav_layananf = $myprofil->nav_layanan();
?>
<!--Footer Start-->
</main>

<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Company</span>
                </a>
                <div class="footer-contact pt-3">
                    <p><?php echo nl2br($site_config->alamat) ?></p>
                    
                    <p class="mt-3"><strong>Phone:</strong> <span>{{ $site_config->telepon }}</span></p>
                    <p><strong>Email:</strong> <span>{{ $site_config->email }}</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

           
            

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">PINUS</strong> <span>All Rights Reserved</span>
        </p>
        
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>


<!--   JS Files Start  --> 
<script src="{{ asset('assets/aws/js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery-migrate-1.4.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/popper.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery.prettyPhoto.js') }}"></script> 
<script src="{{ asset('assets/aws/js/isotope.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/slick.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/custom.js') }}"></script>


<!--  ASSET BARU UNTUK LAYOUT BARU --> 
 <!-- Vendor JS Files -->
 <script src=" {{ asset('assets_bootstrap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/php-email-form/validate.js') }}  "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/aos/aos.js') }} "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }} "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/waypoints/noframework.waypoints.js') }} "></script>
 <script src="{{ asset('assets_bootstrap/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>

 <!-- Main JS File -->
 <script src="{{ asset('assets_bootstrap/assets/js/main.js') }}  "></script>


</body>
</html>