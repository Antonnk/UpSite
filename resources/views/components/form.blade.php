<form
    action="{{ $action }}"
    method="post"
    {{ $attributes }}
>
    @csrf
    @method($method ?? 'post')
    {{ $slot ?? null }}

    @if ($errors->any())
        <x-section>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-section>
    @endif

</form>
