<div class="flex flex-wrap justify-center text-center w-full bg-secondary-light lg:py-10 py-4 -my-1">
	<div class="w-full lg:pt-6 mb-2 lg:mb-4 flex items-center justify-center">
		<div class="text-white text-3xl lg:text-4xl">
			Inversión
		</div>			
	</div>

	<div class="w-full mb-4 lg:mb-6 flex items-center justify-center">
		<div class="text-white text-lg lg:text-3xl">
			<div class="font-bold mb-2">
				MXN $ 25,000.00 IVA incluido
			</div>
			<div class="text-lg mt-3">
				<i class="fas fa-hand-pointer"></i> 
				<a href="#" v-on:click="showModal('available_discounts')" class="text-white no-underline">
					aplican descuentos
				</a>
				<i class="fas fa-hand-pointer"></i>
			</div>
		</div>			
	</div>
</div>

<modal name="available_discounts" adaptive="true" scrollable="true" height="auto">
	<div class="bg-secondary-lighter w-full">
		
		<div class="text-center text-lg text-primary-light font-bold pt-8">
			Contado:<br>
			MXN $ 25,000.00 IVA incluido <br>
			En pagos:<br>
			MXN $ 3,000.00 de inscripción <br> 4 pagos de $ 5,500.00 al mes IVA incluido
		</div>

		<div class="text-center text-2xl text-primary font-bold py-8">
			Descuentos aplicables
		</div>

		<ul class="px-8 lg:px-16 pb-8 text-primary">
			<li class="pb-2 font-bold">30% de descuento a miembros de cámaras gremiales, centros empresariales y colegios de profesionistas</li>
			<li class="pb-2 font-bold">35% a egresados de la EBC</li>
			<li class="pb-2 font-bold">40% a la comunidad estudiantil en general (comprobable con credencial vigente o constancia emitida por su institución educativa)</li>
			<li class="pb-2 font-bold">50% para alumnos, docentes y administrativos de la EBC</li>
			<li class="pb-2 font-bold">10% adicional en pago de contado</li>
			<li class="pb-2 font-bold">Promoción a 3 ó 6 meses sin intereses (cuenta como pago de contado)</li>
		</ul>

		<div class="text-center text-lg text-primary-light font-bold pb-4">
			<i class="fas fa-hand-pointer"></i> 
			<a href="{{ route('seminar.calculate') }}" class="text-primary no-underline">
				Calcula tu inversión
			</a>
			<i class="fas fa-hand-pointer"></i>
		</div>
	</div>
</modal>