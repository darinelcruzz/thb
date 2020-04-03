<header class="lg:px-2 lg:py-2 py-2 flex flex-wrap items-center">
    <div class="flex-1 flex justify-between items-center">
        <a href="{{ url('/') }}">
           <img src="{{ asset('thb-logo.png') }}" class="hidden md:flex h-24">
           <img src="{{ asset('logo-tree.ico') }}" class="md:hidden h-16">
        </a>
    </div>
    
    <label for="menu-toggle" class="cursor-pointer lg:hidden block">
        <i class="fa fa-bars fa-2x"></i>
    </label>

    <input type="checkbox" class="hidden" id="menu-toggle">

    <div class="hidden lg:flex lg:items-center text-center bg-secondary-light rounded-lg lg:w-auto w-full" id="menu">

        <nav>
            <ul class="lg:flex lg:items-center justify-between list-reset lg:pt-0">
                <li class="md:ml-6">
                    <a href="/nosotros" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/nosotros' ? 'font-bold': '' }}">
                        ¿Quiénes somos?
                    </a>
                </li>
                <li class="md:ml-6">
                    <a href="/nuestro-trabajo" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/nuestro-trabajo' ? 'font-bold': '' }}">
                        ¿Qué hacemos?
                    </a>
                </li>
                <li class="md:ml-6">
                    <a href="/ubicacion" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/ubicacion' ? 'font-bold': '' }}">
                        ¿Cómo contactarnos?
                    </a>
                </li>
                <li class="md:ml-6">
                    <a href="/aviso-privacidad" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/aviso-privacidad' ? 'font-bold': '' }}">
                        Aviso de privacidad
                    </a>
                </li>
                <li class="md:ml-6">
                    <a href="/covid-19" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/covid-19' ? 'font-bold': '' }}">
                        COVID-19
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</header>{{--

<div class="p-2">
    <div class="flex flex-wrap justify-between items-center">
        <div class="w-1/6 lg:w-1/5">
            <a href="{{ url('/') }}">
               <img src="{{ asset('thb-logo.png') }}" width="80%" class="hidden md:flex">
               <img src="{{ asset('logo-tree.ico') }}" width="65%" class="md:hidden">
            </a>
        </div>

        <div class="w-5/6 lg:w-4/5">

            <label for="menu-toggle" class="cursor-pointer lg:hidden block">
                <i class="fa fa-bars fa-2x"></i>
            </label>

            <input type="checkbox" class="hidden" id="menu-toggle">
            
            {{-- <div class="hidden lg:flex text-white text-center bg-secondary-light h-auto mx-auto flex flex-wrap rounded-lg" id="menu">
            <div class="hidden lg:flex lg:items-center text-white text-center bg-secondary-light rounded-lg mx-auto" id="menu">

                <nav>
                    <ul class="lg:flex lg:items-center justify-between list-reset lg:pt-0">
                        <li class="md:ml-6">
                            <a href="/nosotros" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/nosotros' ? 'font-bold': '' }}">
                                ¿Quiénes somos?
                            </a>
                        </li>
                        <li class="md:ml-6">
                            <a href="/nuestro-trabajo" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/nuestro-trabajo' ? 'font-bold': '' }}">
                                ¿Qué hacemos?
                            </a>
                        </li>
                        <li class="md:ml-6">
                            <a href="/ubicacion" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/ubicacion' ? 'font-bold': '' }}">
                                ¿Cómo contactarnos?
                            </a>
                        </li>
                        <li class="md:ml-6">
                            <a href="/aviso-privacidad" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/aviso-privacidad' ? 'font-bold': '' }}">
                                Aviso de privacidad
                            </a>
                        </li>
                        <li class="md:ml-6">
                            <a href="/covid-19" class="lg:p-4 py-1 text-white block border-b-2 border-transparent hover:font-bold no-underline {{ url()->current() == env('APP_URL') . '/covid-19' ? 'font-bold': '' }}">
                                COVID-19
                            </a>
                        </li>
                    </ul>
                </nav>

                {{-- <div class="w-1/5 lg:w-1/5">
                    <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/nosotros' ? 'font-bold': '' }}">
                        <a href="/nosotros" class="no-underline text-white px-2">¿Quiénes somos?</a>
                    </div>
                </div>
                <div class="w-1/5 lg:w-1/5 bg-secondary lg:bg-secondary-light">
                    <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/nuestro-trabajo' ? 'font-bold': '' }}">
                        <a href="/nuestro-trabajo" class="no-underline text-white px-2">¿Qué hacemos?</a>
                    </div>
                </div>
                <div class="w-1/5 lg:w-1/5">
                    <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/ubicacion' ? 'font-bold': '' }}">
                        <a href="/ubicacion" class="no-underline text-white px-2">¿Cómo contactarnos?</a>
                    </div>
                </div>
                <div class="w-1/5 lg:w-1/5">
                    <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/aviso-privacidad' ? 'font-bold': '' }}">
                        <a href="/aviso-privacidad" class="no-underline text-white px-2">Aviso de privacidad</a>
                    </div>
                </div>
                <div class="w-1/5 lg:w-1/5">
                    <div class="lg:py-3 py-1 {{ url()->current() == env('APP_URL') . '/covid-19' ? 'font-bold': '' }}">
                        <a href="/covid-19" class="no-underline text-white px-2">COVID-19</a>
                    </div>
                </div> 

            </div>

        </div>
    </div>

</div>--}}