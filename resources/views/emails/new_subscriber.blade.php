@component('mail::message')

Completé mi registro para el seminario de Habilidades Gerenciales.

Mis datos completos son:

- Nombre: {{ $subscriber->full_name }} 
- Dirección: {{ $subscriber->address }}
- Fecha de nacimiento: {{ $subscriber->birthday }}
- Teléfono: {{ $subscriber->cellphone }}
- Correo electrónico: {{ $subscriber->email }}
- Lugar de residencia: {{ $subscriber->city }}
- {{ $subscriber->typeTitle }} {{ $subscriber->origin }}
{{ $subscriber->workplaceTitle }}

Información adicional:
- Me enteré del seminario por: {{ ucfirst($subscriber->media) }}
- Razón por la que me inscribí: {{ ucfirst($subscriber->motive) }}
- Método de pago: {{ ucfirst($subscriber->method) }}
- Pagaré: {{ ucfirst($subscriber->plan) }}
- Lugar de pago: {{ ucfirst($subscriber->place) }}

Adjunto mi recibo de pago/transferencia {{ $subscriber->document ? 'y también mi constancia/contrato de servicios': '' }}

@endcomponent