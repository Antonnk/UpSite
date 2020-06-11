<x-section>
    <x-form class="p-4 flex flex-col gap-2" action="{{ action([\App\User\Controllers\SiteContentController::class, 'store'], $site->id) }}">
        <legend>Create a new Content entry</legend>

        <select name="type">
            @foreach(\Domain\Content\Contracts\ContentDefinitionContract::DEFINITIONS as $definition)
                <option value="{{ $definition }}">{{ (new $definition)->name }}</option>
            @endforeach
        </select>

        <textarea name="body"></textarea>

        <div class="flex">
            <x-button>{{ __('Create') }}</x-button>
        </div>
    </x-form>
</x-section>
