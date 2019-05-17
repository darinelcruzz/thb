@extends('root')

@section('content')
    <form method="POST" action="{{ route('register') }}"
          class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow"
    >
        @csrf

        <h1 class="text-2xl font-normal mb-10 text-center">Registro</h1>

        <div class="field mb-6">
            <label class="label text-sm mb-2 block" for="name">Nombre</label>

            <div class="control">
                <input id="name"
                       type="text"
                       class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full{{ $errors->has('name') ? ' is-invalid' : '' }}"
                       name="name"
                       value="{{ old('name') }}"
                       required
                       autofocus>
            </div>
        </div>

        <div class="field mb-6">
            <label class="label text-sm mb-2 block" for="email">Correo Electrónico</label>

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
            <label class="label text-sm mb-2 block" for="password-confirmation">Confirmar Contraseña</label>

            <div class="control">
                <input id="password-confirmation"
                       type="password"
                       class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full"
                       name="password_confirmation"
                       required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="bg-secondary text-white no-underline rounded-lg text-sm py-2 px-5 is-link mr-2">Registrarse</button>
            </div>
        </div>
    </form>
@endsection