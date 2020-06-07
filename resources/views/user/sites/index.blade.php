@extends('layouts.app')

@section('title', __('My Sites'))

@section('toolbar')
    <x-button href="{{ action([\App\User\Controllers\UserSitesController::class, 'create']) }}">{{ __('New Site') }}</x-button>
@endsection

@section('content')
    <x-table-component :blueprint="$tableBlueprint"></x-table-component>
@endsection
