<div class="flex flex-wrap items-center justify-between lg:mb-4 mb-1">
    <div class="lg:text-right mb-1 pr-6 w-full lg:w-1/3">{{ $label }}</div>

    <div class="w-full lg:w-2/3">
        <select name="{{ $name }}" class="inline-input">
            @foreach($options as $value => $description)
                <option value="{{ $value }}" {{ $loop->index == 0 ? 'selected': '' }}>{{ $description }}</option>
            @endforeach
        </select>
    </div>
</div>