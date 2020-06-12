<div>
    <b>{{ $content->meta['name'] }}</b>

    <x-form action="{{ action([\App\User\Controllers\ContentController::class, 'update'], $content) }}">
        @foreach($content->content as $subContent)
            {{ $subContent->type::form($subContent) }}
        @endforeach
        <x-button>{{ __('Update') }}</x-button>
    </x-form>
</div>
