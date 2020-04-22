<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'Microphones')</title>
    <meta charset='utf-8'>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
     <link href='/css/normalize.css' rel='stylesheet'>
    <link href='/css/default.css' rel='stylesheet'>
     @yield('head')
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header>
         {{-- <a class="navbar-brand"   href="/">
            <img src='/images/fasshield_4_0.jpg' height="50" id='logo' alt='bookmark Logo'>
            </a> --}}
         <nav class ="navbar-nav">
            <ul>
              <li class="{{Request::path()=== '/' ? 'current_page_item': ''}}">
             <a class="nav-link" href="{{ route('home') }}">Home</a>
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
                </li>
             </ul>
             <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                     @guest
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
                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">Resource Management</a>
                    @endcan
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                    @csrf
                    </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
   </div>
</header>
   {{-- <main> --}}
   <section id='main'>
        @yield('content')
    </section>
{{-- </main> --}}

    <footer>
        &copy; Harvard Wireless Microphones.
    </footer>

</body>

</html>
