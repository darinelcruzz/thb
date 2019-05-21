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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="{{ asset('sweetalert.min.js') }}"></script>

    <style>
        .blink {
              animation: blink-animation 1s steps(5, start) infinite;
              -webkit-animation: blink-animation 1s steps(5, start) infinite;
            }
            @keyframes blink-animation {
              to {
                visibility: hidden;
              }
            }
            @-webkit-keyframes blink-animation {
              to {
                visibility: hidden;
              }
            }
    </style>


</head>

<body class="bg-terciary-lighter">
    <div class="font-sans container mx-auto px-4 lg:px-1" id="app">

        <div class="p-2">

            <div class="flex flex-wrap justify-between items-center">
                <div class="w-1/6 lg:w-1/5">
                    <a href="{{ url('/') }}">
                       <img src="{{ asset('thb-logo.png') }}" width="80%">
                    </a>
                </div>

                <div class="w-5/6 lg:w-4/5">
                    
                    <div class="text-white text-center bg-secondary-light h-auto mx-auto flex flex-wrap rounded-lg">

                        <div class="w-1/3 lg:w-1/3">
                            <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/nosotros' ? 'font-bold': '' }}">
                                <a href="/nosotros" class="no-underline text-white px-2">¿Quiénes somos?</a>
                            </div>
                        </div>
                        <div class="w-1/3 lg:w-1/3 bg-secondary lg:bg-secondary-light">
                            <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/nuestro-trabajo' ? 'font-bold': '' }}">
                                <a href="/nuestro-trabajo" class="no-underline text-white px-2">¿Qué hacemos?</a>
                            </div>
                        </div>
                        <div class="w-1/3 lg:w-1/3">
                            <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/ubicacion' ? 'font-bold': '' }}">
                                <a href="/ubicacion" class="no-underline text-white px-2">¿Cómo contactarnos?</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="mx-auto pb-6">
            @yield('content')
        </div>
    </div>

    @include('sweet::alert')

</body>
</html>
