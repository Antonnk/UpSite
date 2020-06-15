@extends('layouts.app')

@section('title', __('Site :name', ['name' => $site->name]))

@section('toolbar')
    <x-button target="_blank" href="{{ action([\App\Edge\Controllers\SiteController::class, 'show'], compact('site')) }}">
        {{ __('View site') }}
    </x-button>
    <x-button href="{{ action([\App\User\Controllers\UserSitesController::class, 'edit'], compact('site')) }}">
        {{ __('Edit') }}
    </x-button>
@endsection

@section('content')

    <x-description-list :item="$site"></x-description-list>
    <div class="my-4"></div>

    <x-section class="p-4">
        @foreach($site->themeDefinition->sections as $section)
            <x-section class="p-4">
                <x-form action="{{ action([\App\User\Controllers\UpdateContentPayloadController::class], $site) }}">
                    <b>{{ $section->title }}</b>
                    <small>{{ $section->description }}</small>
                    @foreach($section->fields as $field)
                        @if($field->type === 'string')
                            <x-input name="payload[{{ $field->name }}]" label="{{ $field->title }}" value="{{ $site->content->payload[$field->name] ?? '' }}"></x-input>
                        @else
                            <p>{{ $field->name }}: {{ $field->type }}</p>
                        @endif
                    @endforeach
                    <div class="mt-2"></div>
                    <x-button>{{ __('Update') }}</x-button>
                </x-form>
            </x-section>
        @endforeach
    </x-section>

@endsection
