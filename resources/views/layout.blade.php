<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Talento Humano para tu Bienestar</title>
        <link rel="icon" href="{{ asset('/logo-tree.ico') }}">

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

        <link rel="icon" href="{{ asset('thb-logo.png') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
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

        <div id="app">
            <div class="mx-auto my-10">

                <div class="w-4/5 lg:3/5 text-white text-center bg-secondary-light h-auto mx-auto flex flex-wrap rounded-lg">

                    <div class="w-full lg:w-1/5">
                        <div class="py-3">
                            <a href="/nosotros" class="no-underline text-white px-2">¿Quiénes somos?</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/5 bg-secondary lg:bg-secondary-light">
                        <div class="py-3">
                            <a href="/nuestro-trabajo" class="no-underline text-white px-2">¿Qué hacemos?</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/5">
                        <div class="py-3">
                            <a href="/ubicacion" class="no-underline text-white px-2">¿Cómo contactarnos?</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/5">
                        <div class="py-3">
                            <a href="/aviso-privacidad" class="no-underline text-white px-2">Aviso de privacidad</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/5">
                        <div class="py-3">
                            <a href="/covid-19" class="no-underline text-white px-2">COVID-19</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="w-4/5 lg:w-3/5 mx-auto">
                @yield('content')
            </div>

        </div>
        
    </body>
</html>
