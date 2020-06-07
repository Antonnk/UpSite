<div>
    <label for="{{ $label }}">{{ $label }}</label>
    <input {{ $attributes->merge(['type' => 'text', 'id' => $label, 'class' => 'block border rounded p-2 w-full pl-7 pr-12 sm:text-sm sm:leading-5']) }} />
</div>
