<!-- footer -->
  {{-- <div class="container-fuild">
    <div class="row"> --}}
      {{-- <div class="map_section"> --}}
        {{-- <div id="map"></div> --}}
      {{-- </div> --}}
      {{-- <div class="footer_blog">
        <div class="row">

             <div class="col-md-4">
            <div class="main-heading left_text">
              <h2>Footer Menu</h2>
            </div>
            <ul class="footer-menu">
            <li><a href="/" accesskey="1" title=""><i class="fa fa-angle-right"></i> Welcome</a></li>
            <li><a  href="{{ route('about') }}"><i class="fa fa-angle-right"></i> About Us</a></li>
            <li><a  href="{{ route('contact') }}"><i class="fa fa-angle-right"></i> Contact</a></li>
           <li><a  href="{{ route('service') }}"><i class="fa fa-angle-right"></i> Service</a></li>
            <li><a  href="{{ route('shop') }}"><i class="fa fa-angle-right"></i> Shop</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <div class="main-heading left_text">
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Complete System installation</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Solar panel Installation</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Repair services</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
            </ul>
          </div>

            <div class="col-md-4">
            <div class="main-heading left_text">
              <h2>Guess or Acount Holder</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="{{ route('register') }}"><i class="fa fa-angle-right"></i>Register</a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="{{ route('password.request') }}"><i class="fa fa-angle-right"></i> Forget password</a></li>
             <li><a href="/admin/loginl"><i class="fa fa-angle-right"></i> Admin Login</a></li>

               {{-- password.reset --}}
            {{-- </ul>
          </div>

          <div class="col-md-4">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
             <li><a  href="{{ route('blog') }}"><i class="fa fa-angle-right"></i> Blog</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> News</a></li>

              {{-- <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li> --}}
            {{-- </ul>
          </div>

          <div class="col-md-4">
            <div class="main-heading left_text">
              <h2>Social Media</h2>
            </div>
            <p>Many way to stay in contact via social Media.</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div> --}}




          {{-- <div class="col-md-4">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>Green Energy Solutions<br>
            Santo 14,Croix-des-Bouquets 19<br>
              Port-au-Prince, Haiti<br>greenenergysolutions.haiti@gmail.com<br>
              <span style="font-size:18px;"><a href="tel:+011 509 37022525">+011 509 37022525</a></span></p>
            <div class="footer_mail-section"> --}}
              {{-- <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form> --}}
            {{-- </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p> © Copyrights 2020 Design by Norcius Noel</p>
      </div>
    </div>
  </div>  --}}
<!-- end footer -->


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
