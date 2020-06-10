@extends('layouts.app')

@section('title', __('Delete')." $site->name")

@section('content')
    <x-section class="p-4">
        <x-form method="DELETE" action="{{ action([\App\User\Controllers\UserSitesController::class, 'destroy'], compact('site')) }}">
            <x-input label='{{ __("Confirm deletion by entering the slug <b>$site->slug</b>") }}' name="confirm" placeholder="{{ $site->slug }}" class="mb-2"></x-input>
            <x-button>{{ __('Delete') }}</x-button>
        </x-form>

    </x-section>
@endsection
