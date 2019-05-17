<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'THB') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="{{ asset('sweetalert.min.js') }}"></script>

</head>

<body class="bg-terciary-lighter">
    <div id="app">
        <nav class="bg-header section">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-2">
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <img src="{{ asset('thb-logo.png') }}" width="150">
                    </a>

                    <div>
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <div class="flex items-center ml-auto">
                            <div class="links">
                                <a style="color: #2A2C68;" href="/nosotros" class="no-underline ml-4">¿QUIÉNES SOMOS?</a>
                                <a style="color: #2A2C68;" href="/nuestro-trabajo" class="no-underline ml-4">¿QUÉ HACEMOS?</a>
                                <a style="color: #2A2C68;" href="/ubicacion" class="no-underline ml-4">¿CÓMO CONTACTARNOS?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto py-6 section">
            @yield('content')
        </main>
    </div>

    @include('sweet::alert')

</body>
</html>
