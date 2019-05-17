@extends('root')

@section('content')

    <form method="POST" action="{{ route('login') }}" class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow">
        @csrf

        <h1 class="text-2xl font-normal mb-10 text-center">Iniciar sesión</h1>

        <div class="field mb-6">
            <label class="label text-sm mb-2 block" for="email">Correo electrónico</label>

            <div class="control">
                <input id="email"
                       type="email"
                       class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email"
                       value="{{ old('email') }}"
                       required>
            </div>
        </div>

        <div class="field mb-6">
            <label class="label text-sm mb-2 block" for="password">Contraseña</label>

            <div class="control">
                <input id="password"
                       type="password"
                       class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password"
                       required>
            </div>
        </div>

        <div class="field mb-6">
            <div class="col-md-8 offset-md-4 flex justify-between items-center">
                <a href="{{ route('register') }}" class="bg-terciary text-white no-underline rounded-lg text-sm py-2 px-5 is-link mr-2">
                    ¡Registrate!
                </a>

                <button type="submit" class="bg-secondary text-white no-underline rounded-lg text-sm py-2 px-5 is-link mr-2">
                    Entrar
                </button>


                {{-- @if (Route::has('password.request'))
                    <a class="text-default text-sm" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif --}}
            </div>
        </div>
    </form>

@endsection
