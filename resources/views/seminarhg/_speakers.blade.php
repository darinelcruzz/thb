<div class="flex flex-wrap justify-center text-center w-full bg-secondary-light lg:py-16 py-6 -my-1">

	<div class="w-full lg:pt-8 mb-4 lg:mb-8 flex items-center justify-center">
		<div class="text-white font-bold lg:text-3xl">
			Instructores
		</div>			
	</div>

	<div class="w-full flex items-center justify-center">
		<button v-on:click="showModal('speaker_one')" class="text-white lg:text-3xl">
			L.A.I. Claudia Herrera Juárez
		</button>			
	</div>

	<div class="w-full flex items-center justify-center">
		<button v-on:click="showModal('speaker_two')" class="text-white lg:text-3xl">
			Ing. Arturo Daniel Trejo Palacios
		</button>			
	</div>

	<div class="w-full flex items-center justify-center">
		<button v-on:click="showModal('speaker_three')" class="text-white lg:text-3xl">
			Lic. Julio Bonifaz Rodríguez
		</button>		
	</div>

	<div class="w-full flex items-center justify-center">
		<button v-on:click="showModal('speaker_four')" class="text-white lg:text-3xl">
			Lic. Alejandro Hernández Meneses
		</button>			
	</div>

</div>

<modal name="speaker_one" adaptive="true" scrollable="true" height="auto">
	<div class="bg-secondary-lighter w-full">
		
		<div class="text-center text-2xl text-primary font-bold py-8">
			L.A.I. Claudia Herrera Juárez
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Egresada de ...
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Realizó estudios ...
		</div>

	</div>
</modal>

<modal name="speaker_two" adaptive="true" scrollable="true" height="auto">
	<div class="bg-secondary-lighter w-full">
		
		<div class="text-center text-2xl text-primary font-bold py-8">
			Ing. Arturo Daniel Trejo Palacios
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Egresado del Instituto Politécnico Nacional de Ingeniería Industrial
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Realizó la Maestría en Calidad en la XYZU
		</div>

	</div>
</modal>

<modal name="speaker_three" adaptive="true" scrollable="true" height="auto">
	<div class="bg-secondary-lighter w-full">
		
		<div class="text-center text-2xl text-primary font-bold py-8">
			Lic. Julio Bonifaz Rodríguez
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Egresado de ...
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Realizó estudios ...
		</div>

	</div>
</modal>

<modal name="speaker_four" adaptive="true" scrollable="true" height="auto">
	<div class="bg-secondary-lighter w-full">
		
		<div class="text-center text-2xl text-primary font-bold py-8">
			Lic. Alejandro Hernández Meneses
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Egresado de ...
		</div>

		<div class="text-center text-lg text-primary font-normal pb-8 lg:px-24 px-12">
			Realizó estudios ...
		</div>

	</div>
</modal>