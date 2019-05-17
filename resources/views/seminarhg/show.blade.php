@extends('root')

@section('content')

	<div class="flex items-center">
		
		<div class="bg-white p-5 rounded-lg flex-col shadow ml-auto">
										
			<img src="{{ asset('seminario.jpeg') }}" alt="Flyer Seminario">

		</div>

		<div class="p-5 rounded-lg flex-col ml-5 mr-auto">
										
			<div class="field">
			    <div class="control">
			        <a href="{{ route('register') }}" class="bg-secondary text-white no-underline w-full rounded-lg text-sm py-2 px-5 is-link mr-2">Inscríbete</a>
			    </div>
			</div>

		</div>
		
	</div>
                
@endsection