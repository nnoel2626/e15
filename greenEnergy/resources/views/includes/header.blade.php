 <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Croix-des-Bouquets 19, Santo 14</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:greenenergysolutions.haiti@gmail"> greenenergysolutions.haiti@gmail.com></a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="/pages/appointment">Make Appointment</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"><a href="/"><img src="/images/logos/greenenergyLogo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
              <li class="{{Request::path()=== '/' ? 'current_page_item': ''}}">
                <a href="/" accesskey="1" title="">Welcome</a>
             </li>
            {{-- <li class="{{Request::path()=== '/pages/home' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li> --}}
            <li class="{{Request::path()=== '/pages/about' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="{{Request::path()=== '/pages/contact' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="{{Request::path()=== '/pages/service' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('service') }}">Service</a>
            {{-- </li>
               <li class="{{Request::path()=== '/pages/shop' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('shop') }}">Shop</a>
            </li> --}}
            {{-- <li class="{{Request::path()=== '/pages/blog' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li> --}}

            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
