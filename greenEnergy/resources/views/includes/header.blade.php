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
            <div class="make_appo"> <a class="btn white_btn" href="/pages/appointment">Make Appointment</a>
            </div>

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
             <a class="nav-link" href="{{ route('about', app()->getLocale())}}">About Us</a>
            </li>
            <li class="{{Request::path()=== '/pages/contact' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('contact', app()->getLocale()) }}">Contact</a>
            </li>
            <li class="{{Request::path()=== '/pages/service' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('service', app()->getLocale()) }}">Services</a>
            </li>
            <li class="{{Request::path()=== '/pages/portfolio' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('portfolio', app()->getLocale()) }}">Portfolio</a>
            </li>
             <li class="nav-item">
            <a class="nav-link" href='/fr' >FR</a>
            </li>


            {{-- <li>
                <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'fr') }}" data-language="fr">
                <i class="flag-icon flag-icon-fr"></i> French</a>
            </li>

            <li>
                <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'es') }}" data-language="fr">
                <i class="flag-icon flag-icon-es"></i> Spanish</a>
            </li> --}}


             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> English</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/fr')}}"><span class="flag-icon flag-icon-fr"> </span>French</a>
                    <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-it"> </span>  Italian</a>
                    <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-ru"> </span>  Russian</a>
                   </div>
             </li>


          {{-- <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i>
            <span class="selected-language">English</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
                <i class="flag-icon flag-icon-us"></i>English</a>
                <a class="dropdown-item" href="{{url('lang/fr')}}" data-language="fr">
                <i class="flag-icon flag-icon-fr"></i>French</a>
                <a class="dropdown-item" href="{{url('lang/es')}}" data-language="de">
                <i class="flag-icon flag-icon-es"></i>Spanish</a>
            </div>
          </li> --}}

            {{-- <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Languages <span class="caret"></span>
                </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                    {{-- <a href="{{ route(Route::currentRouteName(), 'en') }}" class="nav-link">EN</>
                    <a href="{{ route(Route::currentRouteName(), 'fr') }}" class="nav-link">FR</> --}}
                {{-- </div>
                </li> --}}





            {{-- <li class="{{Request::path()=== '/pages/blog' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('products') }}">Products</a>
            </li> --}}

            {{-- </div>
                <div class="search_icon">
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div> --}}


          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
