<div class="flex items-baseline">
    <span class="w-1/4 pr-4">
        <label for="{{ $name }}" class="text-gray-800 font-medium">{!! html_entity_decode($label) !!}</label>
        <p class="text-sm text-gray-600">{{ $description }}</p>
    </span>
    <input {{ $attributes->merge([
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'block border rounded p-2 w-1/2 pl-7 pr-12 sm:text-sm sm:leading-5'
        ]) }} />
</div>
