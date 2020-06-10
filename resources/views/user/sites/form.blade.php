<x-section>
    <x-form class="p-4" action="{{ action([\App\User\Controllers\UserSitesController::class, $site->id ? 'update' : 'store'], $site->id ? ['site' => $site] : null) }}">
        <x-input label="Name" name="name" class="mb-2" value="{{ old('name', $site->name) }}" placeholder="Name of the site"></x-input>
        <x-input label="Slug" name="slug" class="mb-2" value="{{ old('slug', $site->slug) }}" placeholder="Url"></x-input>
        <x-input label="Theme" name="theme" class="mb-2" value="{{ old('theme', $site->theme) }}" placeholder="Name of the site theme"></x-input>
        <div class="flex gap-2">
            <x-button>{{ $site->id ? __('Update') : __('Create') }}</x-button>
            <x-button href="{{ action([\App\User\Controllers\UserSitesController::class, 'index']) }}">{{ __('Cancel') }}</x-button>
        </div>
    </x-form>
</x-section>
