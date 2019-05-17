@extends('root')

@section('content')


<div class="bg-white p-5 rounded-lg shadow mx-auto">
								
	<h3 class="font-normal text-secondary text-xl py-4 -ml-5 border-l-4 border-secondary pl-4 mb-3">
		<b>CONTACTO</b>
	</h3>

	<div class="mb-4 text-primary">

		<div class="flex">
			
			<div class="bg-white flex-col flex-3">
				Para contactar con nosotros puedes enviarnos un mensaje a través del siguiente formulario: <br>

				<form action="/info" method="POST" class="py-8 px-10 text-secondary">
					@csrf

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="title">Nombre</label>

					    <div class="control">
					        <input type="text" class="input bg-transparent border border-muted rounded p-2 text-xs w-full" name="name" placeholder="Juan Pérez">
					    </div>
					</div>

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="title">Correo electrónico</label>

					    <div class="control">
					        <input type="email" class="input bg-transparent border border-muted rounded p-2 text-xs w-full" name="email" placeholder="ejemplo@dominio.com">
					    </div>
					</div>

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="message">Mensaje</label>

					    <div class="control">
					        <textarea name="message" rows="5" class="textarea bg-transparent border border-muted rounded p-2 text-xs w-full" placeholder="Buenos días..."></textarea>
					    </div>
					</div>

					<div class="field">
					    <div class="control">
					        <button type="submit" class="bg-secondary text-white no-underline rounded-lg text-sm py-2 px-5 is-link mr-2">Enviar</button>
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


			<div class="flex-col flex-1">
				<div class="text-normal">
					<p class="text-justify px-10">
						También, si así lo deseas, puedes llamarnos al <b>(961) 663 6016</b> o enviarnos un correo a
						<b><em>info@thb.com.mx</em></b> para solicitar más información o concertar una cita y darnos la oportunidad de
						escucharte.
					</p>

					<div class="px-10 pt-5">
						<img src="{{ asset('location.png') }}" alt="ubicación thb">
					</div>

					<p class="text-right text-terciary px-10 pt-5">
						<em>
							lunes a viernes de 9:00 h a 14:00 h <br>
							Balam 221, Fraccionamiento Fovissste Mactumactzá<br>
							C.P. 29059,Tuxtla Gutiérrez, Chiapas
						</em>
					</p>
				</div>
			</div>

		</div>

	</div>

</div>
                
@endsection