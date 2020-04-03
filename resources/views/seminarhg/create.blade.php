@extends('root')

@section('content')
   
   <div class="w-full bg-terciary text-white text-justify px-8 py-6 rounded-lg shadow">

        <h3 class="font-bold text-xl py-4 -ml-5 pl-4">
          Formulario de inscripción
        </h3>

        <form action="{{ route('seminar.store') }}" method="POST" class="py-8" enctype="multipart/form-data">
            @csrf

        <div class="flex flex-wrap">
          
          <div class="w-full lg:w-2/3">
            <div class="lg:mr-1 mb-4">


                @include('seminarhg._inline_input', ['label' => 'nombre (s)', 'name' => 'name', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Apellido paterno', 'name' => 'lastname', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Apellido materno', 'name' => 'lastname2', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Domicilio', 'name' => 'address', 'type' => 'text', 'ph' => 'Calle, Número, Colonia'])

                @include('seminarhg._inline_input', ['label' => 'Fecha de nacimiento', 'name' => 'birthday', 'type' => 'date'])

                @include('seminarhg._inline_input', ['label' => 'número de celular (personal)', 'name' => 'cellphone', 'type' => 'text'])

                @include('seminarhg._inline_input', ['label' => 'Correo electrónico', 'name' => 'email', 'type' => 'email'])
                
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

                    @include('seminarhg._inline_select', ['label' => 'Semestre o Cuatrimestre', 'name' => 'semester', 
                        'options' => ['1' => '1°','2' => '2°','3' => '3°','4' => '4°','5' => '5°','6' => '6°','7' => '7°','8' => '8°','9' => '9°','10' => '10°']
                    ])
                </div>

                <div v-if="iform.originn != ''" class="flex flex-wrap">
                    <div class="w-full lg:w-1/3">
                        
                    </div>
                    <div class="w-full lg:w-2/3">
                        <div class="text-justify">
                            Escanea y sube @{{ iform.type == 'cliente thb' ? 'el contrato de servicios': 'la constancia' }} que acredite que eres @{{ iform.type == 'cliente thb' ? 'cliente': 'miembro' }} de @{{ iform.type == 'cliente thb' ? iform.originn: iform.origin }}.
                        </div>

                        <div class="overflow-hidden relative w-48 mt-4 mb-4">
                            <button type="button" class="hover:bg-secondary-light text-white py-2 px-4 w-full inline-flex items-center"
                                :class="finput.color">
                                <svg fill="#fff" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
                                </svg>
                                <span class="ml-2">@{{ iform.type == 'cliente thb' ? 'Contrato de servicios': 'Constancia' }}</span>
                            </button>
                            <input class="cursor-pointer absolute block opacity-0 pin-r pin-t" v-on:change="finput.color = 'bg-green'" type="file" name="document">
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="flex flex-wrap mt-12">
                <div class="w-full lg:w-1/3">
                    
                </div>
                <div class="w-full lg:w-2/3">
                    <div class="flex flex-wrap items-center justify-between lg:mb-4 mb-1">
                        <div class="w-full">
                            <input class="mr-2" type="radio" name="is_working" value="no" checked v-on:change="workplace.is_disabled = true">
                            <label for="no">No estoy trabajando</label>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-between lg:mb-4 mb-1">
                        <div class="w-full lg:w-1/3 lg:mb-0 mb-2">
                            <input class="mr-2" type="radio" name="is_working" value="si" v-on:change="workplace.is_disabled = false">
                            <label for="no">Estoy trabajando en</label>
                        </div>
                        <div class="w-full lg:w-2/3">
                            <div class="ml-2">
                                <input class="inline-input" :class="workplace.is_disabled ? 'bg-terciary-light': 'bg-white'" type="text" name="workplace" :disabled="workplace.is_disabled">
                            </div>
                        </div>
                    </div>

                    <div v-if="!workplace.is_disabled">
                        
                        <div class="flex flex-wrap items-center justify-between lg:mb-4 mb-1">
                            <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">Área</div>
                            <div class="w-full lg:w-2/3">
                                <input type="text" class="inline-input" name="area" value="{{ old('area') }}">
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-between lg:mb-4 mb-1">
                            <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">Puesto</div>
                            <div class="w-full lg:w-2/3">
                                <input type="text" class="inline-input" name="position" value="{{ old('position') }}">
                            </div>
                        </div>

                        @include('seminarhg._inline_select', ['label' => 'Experiencia', 'name' => 'experience', 
                            'options' => [
                                'sin experiencia' => 'Sin experiencia',
                                'menos de 3 años' => 'Menos de 3 años',
                                '3 años' => '3 años',
                                'más de 3 años' => 'Más de 3 años'
                            ]
                        ])

                    </div>


                </div>
            </div>

            <div class="flex flex-wrap lg:mt-2 mt-1">
                <div class="w-full lg:w-1/3">
                    
                </div>
                <div class="w-full lg:w-2/3">
                    {{-- <p>Para proceder, si aún no has pagado, puedes elegir <b>pagar en línea</b>.  --}}
                        <p>
                        Si ya pagaste (en cualquiera de <a href="#" class="font-bold text-white no-underline blink" v-on:click="showModal('bank_accounts')">estas cuentas</a>) y tienes un recibo de pago escaneado, puedes subirlo para comprobar tu pago. Si pagaste por transferencia, puedes subir una captura de pantalla de tu transacción.</p>
                </div>

                <modal name="bank_accounts" :adaptive="true" :scrollable="true" height="auto">
                    <div class="bg-secondary-lighter w-full p-10 font-bold text-primary">
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
                </modal>
            </div>

            <div class="flex flex-wrap mt-3 mb-8">
                <div class="w-full lg:w-1/3">
                    
                </div>
                <div class="w-full lg:w-2/3">
                    <div class="flex flex-wrap justify-between items-center text-white font-bold lg:text-md text-sm">

                        <div class="w-1/2 flex items-center justify-center">
                            <div class="overflow-hidden relative">
                                <button type="button" class="hover:bg-primary-light text-white font-bold lg:w-48 lg:h-24 w-24 h-24 px-1"
                                    :class="finput2.color">
                                    <span class="ml-2">Ya pagué y quiero subir mi recibo de pago escaneado</span>
                                </button>
                                <input class="cursor-pointer absolute block opacity-0 pin-r pin-t" v-on:change="changeTwo" type="file" name="receipt" :disabled="finput2.is_disabled">
                            </div>        
                        </div>

                        <div class="w-1/2 flex items-center justify-center">

                            <div class="overflow-hidden relative">
                                <button type="button" class="hover:bg-primary-light text-white font-bold lg:w-48 lg:h-24 w-24 h-24 px-1"
                                    :class="finput3.color">
                                    <span class="ml-2">Subir captura de pantalla de mi transferencia</span>
                                </button>
                                <input class="cursor-pointer absolute block opacity-0 pin-r pin-t" v-on:change="changeThree" type="file" name="receipt" :disabled="finput3.is_disabled">
                            </div>         
                        </div>
                    </div>
                </div>
            </div>


            @include('seminarhg._inline_select', ['label' => '¿Cómo me enteré del seminario?', 'name' => 'media', 
                'options' => ['facebook' => 'Facebook', 'volante' => 'Volante', 'cartel' => 'Cartel', 'otro' => 'Otro']
            ])

            @include('seminarhg._inline_select', ['label' => '¿Por qué vine?', 'name' => 'motive', 
                'options' => ['me pareció interesante' => 'Me pareció interesante', 'para mejorar' => 'Para mejorar', 'me envía mi empresa' => 'Me envía mi empresa', 'me sugirieron asistir' => 'Me sugirieron asistir', 'otro' => 'Otro']
            ])

            @include('seminarhg._inline_select', ['label' => 'Medio de pago', 'name' => 'method', 
                'options' => ['efectivo' => 'Efectivo', 'cheque' => 'Cheque', 'transferencia' => 'Transferencia', 'crédito' => 'T. de Crédito', 'débito' => 'T. de Débito', 'otro' => 'Otro']
            ])

            @include('seminarhg._inline_select', ['label' => '¿Cómo pagaré?', 'name' => 'plan', 
                'options' => ['contado' => 'De contado', 'pagos' => 'Inscripción + 4 pagos', 'personalizado' => 'Plan personalizado']
            ])

            @include('seminarhg._inline_select', ['label' => 'Lugar de pago', 'name' => 'place', 
                'options' => ['en evento' => 'En evento', 'banco' => 'Banco', 'tienda' => 'Tienda', 'cajero' => 'Cajero automático', 'spei' => 'SPEI', 'otro' => 'Otro']
            ])

            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/3">
                    
                </div>
                <div class="w-full lg:w-2/3">
                    <button type="submit" class="mt-6 bg-secondary text-white no-underline rounded-lg text-lg py-2 px-5 is-link mr-2 w-full">
                        Completar registro
                    </button>
                </div>
            </div>

            @if ($errors->any())
                <div class="field mt-6">
                    @foreach($errors->get('workplace') as $error)
                        <li class="text-lg font-bold text-secondary-lighter">{{ $error }}</li>
                    @endforeach

                    @foreach($errors->get('area') as $error)
                        <li class="text-lg font-bold text-secondary-lighter">{{ $error }}</li>
                    @endforeach

                    @foreach($errors->get('position') as $error)
                        <li class="text-lg font-bold text-secondary-lighter">{{ $error }}</li>
                    @endforeach
                </div>
            @endif
          </div>
          
        </div>
                
    </form>

   </div>

@endsection