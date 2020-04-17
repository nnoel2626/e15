<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Harvard Wireless Mics') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
    {{-- <script src="/js/bootstrap-confirmation.js" defer></script>
    @yield('scripts') --}}

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Harvard Wireless Mics') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="{{Request::is('home') ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="{{Request::path()=== '/users' ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('admin.users.index') }}">Users</a>
                    </li>
                    <li class="{{Request::path()=== '/list' ? 'current_page_item': ''}}">
                    <a class="nav-link" href="{{ route('admin.mics.list') }}">Microphones</a>
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
                </div>
            </div>
        </nav>

        <main class="py-4">

            <div> @include('partials.alerts') </div>
            <div>@yield('content')</div>
        </main>
    </div>

    {{-- <script src="{{asset('js/app.js')}}"></script> --}}

<script>

//   $('#edit').on('show.bs.modal', function (event) {
//       var button = $(event.relatedTarget)
//       var title = button.data('mytitle')
//       var description = button.data('mydescription')
//       var cat_id = button.data('catid')
//       var modal = $(this)
//       modal.find('.modal-body #title').val(title);
//       modal.find('.modal-body #des').val(description);
//       modal.find('.modal-body #cat_id').val(cat_id);
// })
  $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var microphone_id = button.data('microphoneId')
      var modal = $(this)
      modal.find('.modal-body #microphone_id').val(microphone_id);
})
</script>


</body>
</html>
