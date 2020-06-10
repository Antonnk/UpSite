<div>
    <label for="{{ $name }}">{!! html_entity_decode($label) !!}</label>
    <input {{ $attributes->merge([
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'block border rounded p-2 w-full pl-7 pr-12 sm:text-sm sm:leading-5'
        ]) }} />
</div>
