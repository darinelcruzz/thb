@extends('root')

@section('content')

	<div class="bg-white p-5 rounded-lg shadow w-full">
									
		<div class="flex justify-between">
			<h3 class="text-secondary flex-col">Lista de personas inscritas al curso</h3>
		</div>
		<br>

		<ol>
			@foreach($subscribers as $subscriber)
				<li class="mb-2">
					{{ $subscriber->full_name }}
					<a href="{{ $subscriber->receipt_url }}" title="RECIBO DE PAGO" class="ml-2 text-secondary"><i class="fa fa-file-invoice-dollar"></i></a>
					@if($subscriber->document)
						<a href="{{ $subscriber->document_url }}" title="CONSTANCIA/CONTRATO" class="ml-2 text-primary"><i class="fa fa-id-card"></i></a>
					@endif

					<ul>
						<li>Dirección {{ $subscriber->address }}</li>
						<li>Fecha de nacimiento: {{ date('d/m/Y', strtotime($subscriber->birthday)) }}</li>
						<li>Teléfono: {{ $subscriber->cellphone }}</li>
						<li>Correo electrónico: {{ $subscriber->email }}</li>
						<li>Lugar de residencia: {{ $subscriber->city }}</li>
						<li>{{ $subscriber->typeTitle }} {{ $subscriber->origin }}</li>
						@if($subscriber->workplace)
							<li>Estoy trabajando en {{ ucfirst($subscriber->workplace) }}</li>
						@endif
					</ul>
				</li>
			@endforeach
		</ol>

	</div>
                
@endsection