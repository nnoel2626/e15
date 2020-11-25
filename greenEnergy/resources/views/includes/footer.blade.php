<!-- footer -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

           <div class="col-lg-3 col-md-6 footer-links">
            <h4>Main Menu</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/" accesskey="1">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('about', app()->getLocale()) }}">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('service', app()->getLocale()) }}">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('portfolio', app()->getLocale()) }}">Portfolio</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">La Finca S A</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">News</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Technical Support</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Members</h4>
            <ul>
            <li><a href="{{ route('register', app()->getLocale()) }}"><i class="fa fa-angle-right"></i>Join</a></li>
            <li><a href="{{ route('login', app()->getLocale()) }}"><i class="fa fa-angle-right"></i>Sign In</a></li>
            <li><a href="{{ route('password.request', app()->getLocale()) }}"><i class="fa fa-angle-right"></i> Forget password</a></li>
            <li><a href="/admin/loginl"><i class="fa fa-angle-right"></i> Admin Login</a></li>
          </ul>
        </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>

            <p>Green Energy Solutions<br>
            Santo 14, Croix-des-Bouquets 19<br>
            Port-au-Prince, Haiti<br>
            <strong>Phone:</strong> +011 509 37022525<br>
            <strong>Email:</strong>greenenergysolutions.haiti@gmail.com<br>
            </p>


            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>



          {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore
              legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> --}}

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Green Energy Solutions</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Norcius Noel</a>
      </div>
    </div>

    <!-- end footer -->
