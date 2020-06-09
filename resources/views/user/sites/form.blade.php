<x-section>
    <x-form class="p-4" action="{{ action([\App\User\Controllers\UserSitesController::class, $site->id ? 'update' : 'store'], $site->id ? ['site' => $site] : null) }}">
        <x-input class="mb-4" label="Name" name="name" value="{{ old('name', $site->name) }}" placeholder="Name of the site"></x-input>
        <x-input class="mb-4" label="Slug" name="slug" value="{{ old('slug', $site->slug) }}" placeholder="Url"></x-input>
        <x-input class="mb-4" label="Theme" name="theme" value="{{ old('theme', $site->theme) }}" placeholder="Name of the site theme"></x-input>
        <div class="flex gap-2">
            <x-button>{{ $site->id ? __('Update') : __('Create') }}</x-button>
            <x-button href="{{ action([\App\User\Controllers\UserSitesController::class, 'index']) }}">{{ __('Cancel') }}</x-button>
        </div>
    </x-form>

    @if ($errors->any())
        <x-section>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-section>
    @endif

</x-section>
