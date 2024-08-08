<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fajri Jaya Travel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

    <!-- Styles -->
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.seat-charts.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}

     <!-- Custom fonts for this template -->
     
 
     <!-- Custom styles for this page -->
     

    <!-- Bootstrap core JavaScript-->
    

    

    <!-- Add other JavaScript files here if needed -->
    <script src="{{ asset('assets/js/jquery.seat-charts.js') }}"></script>
    
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        
       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

            {{-- <main> --}}
                <div id="content">
                    @include('partials/navBar')
                    @yield('content')
                </div>
            {{-- </main> --}}

            @include('partials/adminFooter')
            
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->


    @include('partials/adminLogout')

    <!-- Bootstrap JS -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{  asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    
    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
    
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
