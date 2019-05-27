@extends('root')

@section('content')

	<img class="object-cover h-auto w-full mt-4 lg:mt-0" src="{{ asset('header_seminariohg.jpg') }}" alt="banner">

	<div class="flex flex-wrap justify-between items-center text-center w-full bg-white py-12 -my-1">
		<div class="w-1/3 lg:py-12 flex items-center justify-center">
			<div class="bg-primary text-white font-bold lg:text-3xl rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				4 módulos
			</div>			
		</div>
		<div class="w-1/3 lg:py-12 flex items-center justify-center">
			<div class="bg-primary text-white font-bold lg:text-3xl rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				16 sesiones
			</div>
		</div>
		<div class="w-1/3 lg:py-12 flex items-center justify-center">
			<div class="bg-primary text-white font-bold lg:text-3xl rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				64 horas
			</div>
		</div>
	</div>

	{{-- FECHAS --}}

	@include('seminarhg._calendar')

	{{-- MÓDULOS --}}

	@include('seminarhg._modules')

	{{-- Instructores --}}

	@include('seminarhg._speakers')

	{{-- Lugar --}}

	@include('seminarhg._location')

	<div class="flex flex-wrap justify-center text-center w-full bg-terciary lg:py-10 py-4 -my-1">
		<div class="w-full lg:pt-8 mb-4 lg:mb-8 flex items-center justify-center">
			<div class="font-bold text-3xl lg:text-5xl">
				<a class="no-underline text-white" href="{{ route('seminar.create') }}">¡Inscríbete ya!</a>
			</div>			
		</div>
	</div>

	<div class="flex flex-wrap justify-center text-center w-full bg-secondary-light lg:py-10 py-4 -my-1">
		<div class="w-full lg:pt-6 mb-2 lg:mb-4 flex items-center justify-center">
			<div class="text-terciary font-bold text-3xl lg:text-4xl">
				Más información
			</div>			
		</div>

		<div class="w-full mb-4 lg:mb-6 flex items-center justify-center">
			<div class="text-white text-lg lg:text-3xl">
				<i class="fas fa-phone"></i> 663 6016 <br>
				<i class="far fa-envelope"></i> info@thb.com.mx
			</div>			
		</div>
	</div>

	{{-- Logos --}}

	@include('seminarhg._logos')
                
@endsection