@extends('layouts.app')

@section('title', __('Delete')." $site->name")

@section('content')
    <x-section class="p-4">
        <p>Are you sure?</p>
        <x-form method="DELETE" action="{{ action([\App\User\Controllers\UserSitesController::class, 'destroy'], compact('site')) }}">
            <x-button>{{ __('Delete') }}</x-button>
        </x-form>
    </x-section>
@endsection
