@extends('root')

@section('content')
   
   <div class="w-full bg-terciary text-white text-justify px-8 py-6 rounded-lg shadow">

        <h3 class="font-bold text-xl py-4 -ml-5 pl-4">
          Formulario de inscripción
        </h3>

        <div class="flex flex-wrap">
          
          <div class="w-full lg:w-2/3">
            <div class="lg:mr-1 mb-4">

              <form action="/info" method="POST" class="py-8">
                @csrf

                @include('seminarhg._inline_input', ['label' => 'nombres', 'name' => 'name', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Apellido paterno', 'name' => 'lastname', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Apellido materno', 'name' => 'lastname2', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Domicilio', 'name' => 'address', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Fecha de nacimiento', 'name' => 'birthday', 'type' => 'date'])

                @include('seminarhg._inline_input', ['label' => 'número de celular (personal)', 'name' => 'birthday', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Correo electrónico', 'name' => 'city', 'type' => 'email'])
                
                @include('seminarhg._inline_input', ['label' => 'Ciudad de residencia', 'name' => 'city', 'type' => 'text'])

                <div class="mb-4">
                    <div class="flex flex-wrap items-center">
                        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">Yo soy...</div>

                        <div class="w-full lg:w-2/3">
                            <select name="type" id="type" v-model="iform.type" class="inline-input">
                                <option value='' selected>Elige una opción</option>
                                <option value="cámara gremial">Miembro de una cámara gremial</option>
                                <option value="centro empresarial">Miembro de un centro empresarial</option>
                                <option value="colegio de profesores">Miembro de un colegio de profesores</option>
                                <option value="egresado ebc">Egresado de la EBC</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="cliente thb">Cliente de Consultoría JB o TH Competitividad</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div v-if="iform.type == 'cámara gremial' || iform.type == 'centro empresarial' || iform.type == 'colegio de profesores'">
                    @include('seminarhg._inline_input', ['label' => 'Miembro de', 'name' => 'origin', 'type' => 'text'])
                </div>

                <div v-else-if="iform.type == 'estudiante'">
                    @include('seminarhg._inline_input', ['label' => 'Alumno de', 'name' => 'origin', 'type' => 'text'])
                </div>

                <div v-if="iform.type == 'cliente thb'">
                    <div class="mb-4">
                        <div class="flex flex-wrap items-center">
                            <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">Cliente de</div>

                            <div class="w-full lg:w-2/3">
                                <select name="origin2" v-model="iform.originn" class="inline-input">
                                    <option value='' selected>Elige una opción</option>
                                    <option value="Consultoría JB">Consultoría JB</option>
                                    <option value="TH Competitividad">TH Competitividad</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-else-if="iform.type == 'estudiante'">
                    <div class="mb-4">
                        <div class="flex flex-wrap items-center">
                            <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">Cursando</div>

                            <div class="w-full lg:w-2/3">
                                <select name="origin2" v-model="iform.originn" class="inline-input">
                                    <option value='' selected>Elige una opción</option>
                                    <option value="licenciatura">Licenciatura</option>
                                    <option value="maestría">Maestría</option>
                                    <option value="doctorado">Doctorado</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="iform.originn != ''" class="flex flex-wrap">
                    <div class="w-full lg:w-1/3">
                        
                    </div>
                    <div class="w-full lg:w-2/3">
                        <div class="text-justify">
                            Escanea y sube @{{ iform.type == 'cliente thb' ? 'el contrato de servicios': 'la constancia' }} que acredite que eres @{{ iform.type == 'cliente thb' ? 'cliente': 'miembro' }} de @{{ iform.type == 'cliente thb' ? iform.originn: iform.origin }}.
                        </div>

                        <div class="overflow-hidden relative w-48 mt-4 mb-4">
                            <button class="bg-secondary hover:bg-secondary-light text-white py-2 px-4 w-full inline-flex items-center">
                                <svg fill="#fff" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
                                </svg>
                                <span class="ml-2">@{{ iform.type == 'cliente thb' ? 'Contrato de servicios': 'Constancia' }}</span>
                            </button>
                            <input class="cursor-pointer absolute block opacity-0 pin-r pin-t" type="file" name="documents">
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-2/3">
                        
                    </div>
                    <div class="w-full lg:w-1/3">
                        <button type="submit" class="mt-6 bg-secondary text-white no-underline rounded-lg text-lg py-2 px-5 is-link mr-2 w-full">Enviar</button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="field mt-6">
                        @foreach($errors->all() as $error)
                            <li class="text-sm text-white">{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
              </form>
            </div>
          </div>
          
        </div>
                

   </div>

@endsection