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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(214, 220, 229);
                color: rgb(42, 44, 104);
                font-family: 'Corbel', serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #3a3c7c;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

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
    <body>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
          
          <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
              <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Docs
              </a>
                <a style="color: #2A2C68;" href="/nosotros">¿QUIÉNES SOMOS?</a>
                <a style="color: #2A2C68;" href="/nuestro-trabajo">¿QUÉ HACEMOS?</a>
                <a style="color: #2A2C68;" href="/ubicacion">¿CÓMO CONTACTARNOS?</a>
            </div>
          </div>
        </nav>

        <div class="flex-center position-ref full-height">
            <div class="content">
                @yield('content')
            </div>
        </div>
        
    </body>
</html>