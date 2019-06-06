<div class="lg:mb-4 mb-1">
    <div class="flex flex-wrap items-center">

        <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">{{ ucfirst($label) }}</div>

        <div class="w-full lg:w-2/3">
            @if($name == 'origin')
            	<input type="{{ $type }}" class="inline-input" name="{{ $name }}" v-model="iform.origin">
            @else
            	<input type="{{ $type }}" class="inline-input" name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ isset($ph) ? $ph: ''}}">
            @endif
        </div>
    </div>
</div>