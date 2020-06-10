<x-section>
    <x-form class="p-4 flex flex-col gap-2" action="{{ action([\App\User\Controllers\ContentController::class, 'store']) }}">
        <legend>Create a new Content entry</legend>

        <select name="type">
            @foreach(\Domain\Content\Enums\ContentTypeEnum::getNames() as $contentType)
                <option value="{{ $contentType }}">{{ $contentType }}</option>
            @endforeach
        </select>

        <textarea name="body"></textarea>

        <div class="flex gap-2">
            <x-input name="contentable_type" :label='__("Content Owner Type")' value="{{ get_class($contentable) }}" readonly></x-input>
            <x-input name="contentable_id" :label='__("Content Owner Key")' value="{{ $contentable->getKey() }}" readonly></x-input>
        </div>

        <div class="flex">
            <x-button>{{ __('Create') }}</x-button>
        </div>
    </x-form>
</x-section>
