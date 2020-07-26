
<!DOCTYPE html>
<html lang="en">
<head>
 @include('includes.head')
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="/images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  @include('includes.header')
</header>
<!-- end header -->

     <!-- section Main -->
<div id="slider" class="section main_slider">
  <div class="container-fuild">
    <div class="row">
        @yield('content')
    </div>
  </div>
</div>
<!-- End section Main -->

<!-- footer -->
<footer class="footer_style_2">
    @include('includes.footer')x
</footer>
<!-- end footer -->

 <!-- JavaScript Libraries -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- menu js -->
<script src="/js/menumaker.js"></script>
<!-- wow animation -->
 <script src="/js/wow.js"></script>
<!-- custom js -->
<script src="/js/custom.js"></script>
<!-- revolution js files -->
<script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>

        <!-- Portfolio JS lib -->
<script src="/superfish/hoverIntent.js"></script>
<script src="/superfish/superfish.min.js"></script>
<script src="/waypoints/waypoints.min.js"></script>
<script src="/counterup/counterup.min.js"></script>
<script src="/isotope/isotope.pkgd.min.js"></script>
<script src="/lightbox/js/lightbox.min.js"></script>
<script src="/touchSwipe/jquery.touchSwipe.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>




