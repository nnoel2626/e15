<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Harvard Wireless Mics') }}</title>


    @yield('head')
   <script src="/js/bootstrap-confirmation.js" defer></script>
    @yield('scripts')

</head>
<body>
    <div id="app">


        <main class="py-4">
           
            <div>@yield('content')</div>
        </main>
    </div>





</body>
</html>
