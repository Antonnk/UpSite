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
        <x-form action="{{ action([\App\User\Controllers\UpdateContentPayloadController::class], $site) }}">
            @foreach($site->themeDefinition->sections as $section)
                <x-section class="p-4 mb-6 shadow-none">
                    <h2 class="text-lg font-medium">{{ $section->title }}</h2>
                    <p class="text-gray-600 mb-6">{{ $section->description }}</p>
                    @foreach($section->fields as $field)
                        @if($field->type === 'string')
                            <div class="border-t border-gray-200 py-6">
                                <x-input name="payload[{{ $field->name }}]" label="{{ $field->title }}" description="{{ $field->description }}" value="{{ $site->content->payload[$field->name] ?? '' }}"></x-input>
                            </div>
                        @else
                            <p>{{ $field->name }}: {{ $field->type }}</p>
                        @endif
                    @endforeach

                </x-section>
            @endforeach
            <x-button>{{ __('Update') }}</x-button>
        </x-form>
    </x-section>

@endsection
