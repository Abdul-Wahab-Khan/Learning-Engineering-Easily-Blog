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
    <link href="{{asset("/css/blog/clean-blog.min.css")}}" rel="stylesheet">
    <link href="{{asset("/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet">

</head>
<body class="bg-light">
    <div id="app">
        @include('shared/navbar')

        <div class="container">
            @include('shared/alerts')

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('shared/footer')
    </div>
    <script src="{{ asset("/js/blog/clean-blog.min.js") }}"></script>
    <script src="{{ asset("/js/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/js/blog/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/js/blog/contact_me.js') }}"></script>

    <!-- Scripts -->
    @stack('inline-scripts')
</body>
</html>
