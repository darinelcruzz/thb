@extends('root')

@section('content')

<div class="w-full bg-terciary text-white text-justify px-8 py-6 rounded-lg shadow">

	<h3 class="font-bold text-xl py-4 -ml-5 pl-4 mb-3">
		Contacto
	</h3>

	<div class="flex flex-wrap">
		
		<div class="w-full lg:w-1/2">
			<div class="lg:mr-1 mb-4">
				Para contactar con nosotros puedes enviarnos un mensaje a través del siguiente formulario: <br>

				<form action="/info" method="POST" class="py-8">
					@csrf

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="title">Nombre</label>

					    <div class="control">
					        <input type="text" class="input bg-white border border-muted rounded p-2 text-xs w-full" name="name" placeholder="Juan Pérez">
					    </div>
					</div>

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="title">Correo electrónico</label>

					    <div class="control">
					        <input type="email" class="input bg-white border border-muted rounded p-2 text-xs w-full" name="email" placeholder="ejemplo@dominio.com">
					    </div>
					</div>

					<div class="field mb-6">
					    <label class="label text-lg mb-2 block" for="message">Mensaje</label>

					    <div class="control">
					        <textarea name="message" rows="5" class="textarea bg-white border border-muted rounded p-2 text-xs w-full" placeholder="Buenos días..."></textarea>
					    </div>
					</div>

					<div class="field flex content-center">
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
		</div>

		<div class="w-full lg:w-1/2">
			<div class="lg:ml-1 mb-4">
				<p class="lg:text-justify text-center lg:px-10">
					Nuestra ubicación <br><br>
					Balam 221, Fraccionamiento Fovissste Mactumactzá,<br>
					C.P. 29059, Tuxtla Gutiérrez, Chiapas
				</p>

				<div class="lg:px-10 pt-5">
					{{-- <img src="{{ asset('location.png') }}" alt="ubicación thb"> --}}
					<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=THB&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
				</div>

				<p class="lg:text-right text-center px-10 pt-1">
					<em>
						Lunes a viernes de 9:00 h a 14:00 h
					</em>
				</p>
			</div>
		</div>
		
	</div>


	<h3 class="font-bold text-center text-xl py-4 -ml-5 pl-4 mt-4">
		<a href="/aviso-privacidad" class="blink no-underline text-secondary-lighter">Aviso de privacidad</a>
	</h3>
					

</div>
                
@endsection