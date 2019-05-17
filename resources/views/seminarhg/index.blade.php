@extends('root')

@section('content')

	<div class="bg-white p-5 rounded-lg shadow w-full">
									
		<div class="flex justify-between">
			<h3 class="text-secondary flex-col">Hola de nuevo, {{ $user->name }}</h3>

			<a href="{{ route('seminar.logout') }}" class="text-terciary no-underline flex-col rounded-lg text-sm py-2 px-5 is-link mr-2">
	            Cerrar sesión
	        </a>
		</div>
		<br>

		@if($user->is_paid)

			Ya has pagado tu inscripción al curso, muchas gracias
		@else

			Por favor realiza el pago del curso por la cantidad de $500 a la cuenta XXXXXXXXXXXXXXXXXX
			y envíanos una foto del comprobante

		@endif

	</div>
                
@endsection