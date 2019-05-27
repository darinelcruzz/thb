@extends('root')

@section('content')
		    
    <div class="w-full bg-terciary text-white px-6 py-6 lg:px-16 lg:py-10 rounded-lg shadow">
					
		<h3 class="font-bold text-center text-3xl py-4 mb-3">
			¡REGISTRO COMPLETADO EXITOSAMENTE!
		</h3>

		<div class="text-justify mb-10">
			<b>{{ $subscriber->fullname }}</b> te has registrado exitosamente en breve enviaremos al correo que nos proporcionaste información adicional sobre el seminario <br><br>

			Muchas gracias y te esperamos en junio.<br><br>
		</div>

		<a href="{{ route('seminar.index') }}" class="mt-6 bg-secondary text-white no-underline rounded-lg text-lg py-2 px-5 is-link mr-2 w-full">Regresar</a>

	</div>
                
@Endsection