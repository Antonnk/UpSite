@extends('layouts.app')

@section('content')
    <x-form action="{{ action([\App\User\Controllers\LoginController::class, 'login']) }}">
        <x-input class="mb-4" type="email" :label="__('Email')" name="email" :placeholder="__('E-Mail Address')" autofocus></x-input>
        <x-input class="mb-4" type="password" :label="__('Password')" name="password" :placeholder="__('Password')"></x-input>
        <x-button>{{ __('Login') }}</x-button>
    </x-form>
@endsection
