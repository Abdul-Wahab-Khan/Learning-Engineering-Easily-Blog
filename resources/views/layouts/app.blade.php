<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Engineering') }}</title>

    <!-- Styles -->
    {{-- <link href="{{asset("/css/blog/clean-blog.min.css")}}" rel="stylesheet">
    <link href="{{asset("/css/bootstrap.min.css")}}" rel="stylesheet">
     --}}
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <!-- New Theme Links starts -->

    <!-- Vendor CSS Files -->
    <link href="{{asset('newTheme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('newTheme/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('newTheme/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('newTheme/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('newTheme/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('newTheme/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('newTheme/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('newTheme/css/style.css')}}" rel="stylesheet">

    <!-- New Theme Links ends -->

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-light">
    <div id="app">
        @include('shared/navbar')

            @include('shared/alerts')

                <div class="container">
                    @yield('content')
                </div>


        @include('shared/footer')
    </div>









    {{-- <script src="{{ asset("/js/blog/clean-blog.min.js") }}"></script>
    <script src="{{ asset("/js/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ mix("js/app.js") }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/js/blog/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/js/blog/contact_me.js') }}"></script> --}}

    <!-- new Theme js links -->

      <!-- Vendor JS Files -->
  <script src="{{asset('newTheme/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  {{-- <script src="{{asset('newTheme/vendor/php-email-form/validate.js')}}"></script> --}}
  <script src="{{asset('newTheme/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('newTheme/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('newTheme/js/main.js')}}"></script>
  <script src="{{mix('js/app.js')}}"></script>

    <!-- new theme js links ends  -->

    <!-- Scripts -->
    @stack('inline-scripts')
</body>
</html>
