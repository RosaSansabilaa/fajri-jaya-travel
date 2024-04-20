<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fajri Jaya Travel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('assets/js/navbar.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Bootstrap JS -->
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sb-admin-2-min.js') }}"></script> --}}
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>


    <!-- Add other JavaScript files here if needed -->
    
</head>
<body>
    <div id="app">
       <!-- @include('partials.admin-navbar') -->
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
