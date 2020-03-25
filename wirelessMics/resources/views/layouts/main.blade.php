<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'Microphones')</title>
    <meta charset='utf-8'>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='/css/default.css' rel='stylesheet'>
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head')

</head>

<body>

    <header>
        {{-- <a href='/'><img src='/images/bookmark-logo@2x.png' id='logo' alt='bookmark Logo'></a> --}}
        <nav>
            <ul>
                <li><a href='/home'>Home</a></li>
                <li><a href='/microphones'>All Microphones</a></li>
                <li><a href='/list'>Portable list</a></li>
                <li><a href='/about'>About</a></li>
                <li><a href='/support'>Support</a></li>
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
                                     <a class="dropdown-item" href="{{ route('admin.users.index') }}">User Management</a>
                                       @endcan
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                     @csrf
                                     </form>
                         </div>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>

    <section id='main'>
        @yield('content')
    </section>

    <footer>
        &copy; Harvard Microphones
    </footer>

</body>

</html>
