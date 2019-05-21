<div class="text-center w-full bg-white lg:py-12 py-6 -my-1">

	<div class="text-secondary-lighter font-bold lg:text-3xl lg:mb-6 mb-3">
		Módulos
	</div>

	<div class="flex flex-wrap justify-between items-center text-white font-bold lg:text-3xl">

		<div class="w-1/4 lg:py-12 flex items-center justify-center">
			<button v-on:click="showModal('personal_skills')" class="bg-terciary text-white font-bold rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				<div>
					<div class="lg:mb-4 mb-2">
						1
					</div>
					<div class="font-normal text-sm lg:text-2xl">
						Habilidades personales
					</div>
				</div>
			</button>			
		</div>

		<div class="w-1/4 lg:py-12 flex items-center justify-center">
			<button v-on:click="showModal('social_skills')" class="bg-terciary text-white font-bold rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				<div>
					<div class="lg:mb-4 mb-2">
						2
					</div>
					<div class="font-normal text-sm lg:text-2xl">
						Habilidades sociales
					</div>
				</div>
			</button>
		</div>

		<div class="w-1/4 lg:py-12 flex items-center justify-center">
			<button v-on:click="showModal('tecnical_skills')" class="bg-terciary text-white font-bold rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				<div>
					<div class="lg:mb-4 mb-2">
						3
					</div>
					<div class="font-normal text-sm lg:text-2xl">
						Habilidades técnicas
					</div>
				</div>
			</button>
		</div>

		<div class="w-1/4 lg:py-12 flex items-center justify-center">
			<button v-on:click="showModal('specific_skills')" class="bg-terciary text-white font-bold lg:text-2xl rounded-full lg:h-48 lg:w-48 h-24 w-24 flex items-center justify-center">
				<div>
					<div class="lg:mb-4 mb-2">
						4
					</div>
					<div class="font-normal text-sm lg:text-2xl">
						Habilidades específicas
					</div>
				</div>
			</button>
		</div>
	</div>

</div>

@include('seminarhg._skills_modals')