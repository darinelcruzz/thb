@extends('root')

@section('content')

	<div class="flex items-center">
		
		<div class="bg-white p-2 rounded-lg flex-col shadow mx-auto">
										
			<form action="/inscripcion" method="POST" class="py-8 px-10 text-secondary">
					@csrf

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="title">Nombre</label>

					    <div class="control">
					        <input type="text" class="input bg-transparent border border-muted rounded p-2 text-xs w-full" name="name" placeholder="María/Mario López">
					    </div>
					</div>

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="title">Correo electrónico</label>

					    <div class="control">
					        <input type="email" class="input bg-transparent border border-muted rounded p-2 text-xs w-full" name="email" placeholder="ejemplo@dominio.com">
					    </div>
					</div>

					<div class="flex">
						<div class="flex-col mr-4 field mb-6">
						    <label class="label text-lg mb-2 block" for="title">Contraseña</label>

						    <div class="control">
						        <input type="password" class="input bg-transparent border border-muted rounded p-2 text-xs w-full" name="password">
						    </div>
						</div>

						<div class="flex-col field mb-6">
						    <label class="label text-lg mb-2 block" for="title">Confirmar contraseña</label>

						    <div class="control">
						        <input type="password" class="input bg-transparent border border-muted rounded p-2 text-xs w-full" name="password_confirmation">
						    </div>
						</div>
					</div>

					<div class="field">
					    <div class="control">
					        <button type="submit" class="bg-secondary text-white no-underline rounded-lg text-sm py-2 px-5 is-link">Registrarse</button>
					    </div>
					</div>

					@if ($errors->any())
					    <div class="field mt-6">
					        @foreach($errors->all() as $error)
					            <li class="text-sm text-red">{{ $error }}</li>
					        @endforeach
					    </div>
					@endif
				</form>

		</div>
		
	</div>
                
@endsection