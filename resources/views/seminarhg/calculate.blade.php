@extends('root')

@section('content')
		    
    <div class="w-full bg-secondary-light text-white px-6 py-6 lg:px-16 lg:py-10 rounded-lg shadow">
					
		<h3 class="font-bold text-center text-3xl py-4 mb-3">
			¿Cuánto tendré que invertir?
		</h3>

		
		<div class="flex flex-wrap items-center">

			<div class="lg:text-right mb-1 pr-6 w-full lg:w-1/2">
	        	
	        	<div class="w-full flex flex-wrap items-center mb-2">

			        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">
			        	Soy...
			        </div>

		            <div class="w-full lg:w-2/3">
		                <select name="type" v-model.number="calculate.discount" id="type" class="inline-input">
		                    <option value="0">Público en general</option>
		                    <option value="50">Cliente de Consultoría JB o TH Competitividad</option>
		                    <option value="30">Miembro de una cámara gremial o centro empresarial</option>
		                    <option value="35">Egresado de la EBC</option>
		                    <option value="40">Estudiante general</option>
		                    <option value="50">Estudiante EBC</option>
		                </select>
		            </div>
			    </div>

			    <div class="w-full flex flex-wrap items-center mb-2">

			        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">
			        	Método de pago
			        </div>

		            <div class="w-full lg:w-2/3">
		                <select name="method" v-model="calculate.method" id="method" class="inline-input">
		                	<option value="">Elija el método de pago</option>
		                    <option value="efectivo">Efectivo</option>
		                    <option value="debito">Tarjeta de débito</option>
		                    <option value="credito">Tarjeta de crédito</option>
		                </select>
		            </div>
			    </div>

			    <div v-if="calculate.method != 'credito'" class="w-full flex flex-wrap items-center mb-2">

			        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">
			        	Pagaré...
			        </div>

		            <div class="w-full lg:w-2/3">
		                <select name="method" v-model.number="calculate.pace" id="method" class="inline-input">
		                	<option value="1">Elija la forma en que pagará</option>
		                    <option value="10">De contado</option>
		                    <option value="4">En pagos</option>
		                </select>
		            </div>
			    </div>

			    <div v-else class="w-full flex flex-wrap items-center mb-2">

			        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">
			        	Mensualidades
			        </div>

		            <div class="w-full lg:w-2/3">
		                <select name="pace" v-model.number="calculate.pace" id="pace" class="inline-input">
		                	<option value="1">Elija los meses sin intereses</option>
		                    <option value="3">3 MSI</option>
		                    <option value="6">6 MSI</option>
		                </select>
		            </div>
			    </div>

			    <div class="w-full flex flex-wrap items-center mb-2 mt-4">
			        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">
			        	
			        </div>
			        <div class="lg:text-right text-primary font-bold text-2xl mb-1 pr-6 w-full lg:w-2/3">
			        	TOTAL : @{{ (total - total * .10 * (calculate.method == 'credito' || calculate.pace == 3 || calculate.pace == 6 || calculate.pace == 10 ? 1: 0)) | currency }} <br>
			        	<div class="mt-2 text-lg" v-if="calculate.pace == 4">
			        		$3,000.00 de inscripción y
			        	</div>
			        	<div class="mt-2 text-lg" v-if="calculate.pace == 4">
			        		4 pagos de @{{ payment | currency }}
			        	</div>
			        	<div v-if="calculate.pace == 3 || calculate.pace == 6" class="mt-2 text-lg">
			        		mensualidades de @{{ (total - total * .10) / calculate.pace | currency }}
			        	</div>
			        </div>
			    </div>

	        </div>

            <div class="w-full lg:w-1/2 lg:pl-20">
                <ol>
                    <li class="mb-3">
                        Banamex
                        <ul>
                            <li>Sucursal: 7004 </li>
                            <li>Nº de Cuenta: 4278306 </li>
                            <li>CLABE: 002 100 7004 4278306 0 </li>
                            <li>Nº de tarjeta: 5204 1673 2821 9597 </li>
                        </ul>
                    </li>

                    <li class="mb-3">
                        BBVA Bancomer
                        <ul>
                            <li>Nº de Cuenta: 2681960423</li>
                            <li>CLABE: 012 100 0268 1960423 9</li>
                            <li>Nº de tarjeta: 4152 3132 7383 9618</li>
                        </ul>
                    </li>

                    <li>
                        Banorte
                        <ul>
                            <li>Nº de Cuenta: 0491533623</li>
                            <li>CLABE: 072 100 0049 1533623 0</li>
                            <li>Nº de tarjeta: 4915 6630 3736 1236</li>
                        </ul>
                    </li>
                </ol>
            </div>

	    </div>

		<a href="{{ route('seminar.index') }}" class="mt-6 bg-white text-primary no-underline rounded-lg text-lg py-2 px-5 is-link mr-2 w-full">
			<i class="fa fa-backward"></i> &nbsp; Regresar
		</a>

	</div>
                
@endsection