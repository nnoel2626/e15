
 <div id="app" class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">

            <ul class="navbar-nav mr-auto">

             <li class="nav-item active {{Request::path()=== '/' ? 'current_page_item': ''}}">
                <a class="nav-link" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
              </li>
                <li class="{{Request::is('index') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('index') }}">All Microphones</a>
                </li>
                <li class="{{Request::is('installed') ? 'current_page_item': ''}}">
                <a class="nav-link" href="{{ route('installed')}}">Installed list</a>

                </li>
                <li class="{{Request::is('portable') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('portable') }}">Portable list</a>
                </li>
                 <li class="{{Request::is('about') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                 <li class="{{Request::is('support') ? 'current_page_item': ''}}">
                    <a  class="nav-link" href="{{ route('support') }}">Support</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav">
            <!-- Authentication Links -->
                 @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @can('manage-users')
                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">User Management</a>
                        @endcan
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                         @csrf
                        </form>
                    </div>
                  </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                @else
            </ul>
             @endguest
        </div>
    </nav>
</div>



<div id="app" class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
  {{-- <a href='/'><img src='/images/bookmark-logo@2x.png' id='logo' alt='bookmark Logo'></a> --}}
        {{-- <nav>
            <ul>
              <li class="{{Request::path()=== '/' ? 'current_page_item': ''}}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
                <li class="{{Request::is('index') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('index') }}">All Microphones</a>
                </li>
                <li class="{{Request::is('installed') ? 'current_page_item': ''}}">
                <a class="nav-link" href="{{ route('installed')}}">Installed list</a> --}}
                     {{-- <a class="nav-link" href="/microphone ? tag = {{ $tag->tag_name}}">  {{ $tag->tag_name  }}</a> --}}
                {{-- </li>
                <li class="{{Request::is('portable') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('portable') }}">Portable list</a>
                </li>
                 <li class="{{Request::is('about') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                 <li class="{{Request::is('support') ? 'current_page_item': ''}}">
                    <a  class="nav-link" href="{{ route('support') }}">Support</a>
                </li> --}}
            {{-- </ul> --}}
             <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ml-auto"> --}}
                        <!-- Authentication Links -->
                        {{-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                          @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                       @can('manage-users')
                                     <a class="dropdown-item" href="{{ route('admin.users.index') }}">User Management</a>
                                       @endcan
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                     @csrf
                                     </form>
                         </div>
                    </li>
                @endguest
            </ul>
        </nav> --}}
         @include('nav')
