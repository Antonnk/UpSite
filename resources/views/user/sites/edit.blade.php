@extends('layouts.app')

@section('title', __('Edit site :name', ['name' => $site->name]))

@section('toolbar')
    <x-button href="{{ action([\App\User\Controllers\UserSitesController::class, 'delete'], compact('site')) }}">{{ __('Delete') }}</x-button>
@endsection

@section('content')
    @include('user.sites.form')
@endsection
