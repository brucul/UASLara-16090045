<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendakian Gunung Slamet</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/landing/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/landing/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/landing/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/landing/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/landing/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('public/landing/css/button.css') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('public/admin/assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Laura
    Theme URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
    <div class="bg-color">
      @include('layouts.user.navbar')  
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2>Pendakian</h2>
                <p class="deco">Gunung Slamet</p>
              </div>
              <div class="overlay-detail text-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="merge-sec">
  <section id="daftar" class="section-padding wow fadeIn delay-05s">
    @include('pages.user.daftar')
  </section>
  <section id="aturan" class="section-padding wow fadeIn delay-05s">
    @include('pages.user.aturan')
  </section>
  </div>
  <section id="galeri" class="section-padding wow fadeInUp delay-05s">
    @include('pages.user.galeri')
  </section>
  <section id="blog" class="section-padding wow fadeInUp delay-05s">
    @include('pages.user.blog')
  </section>
  <section id="sejarah" class="section-padding wow fadeIn delay-05s">
     @include('pages.user.sejarah')
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    @include('layouts.user.footer')
  </footer>

  <script src="{{ asset('public/landing/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/landing/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('public/landing/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/landing/js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('public/landing/js/wow.js') }}"></script>
  <script src="{{ asset('public/landing/js/custom.js') }}"></script>
  <script src="{{ asset('public/landing/contactform/contactform.js') }}"></script>
  <script src="{{ asset('public/admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('public/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('public/admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('public/admin/dist/js/sidebarmenu.js') }}"></script>
    <!-- this page js -->
    <script src="{{ asset('public/admin/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/magnific-popup/meg.init.js') }}"></script>

</body>

</html>