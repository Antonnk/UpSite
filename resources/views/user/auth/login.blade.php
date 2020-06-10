@extends('layouts.app')

@section('content')
    <x-form action="{{ action([\App\User\Controllers\LoginController::class, 'login']) }}">
        <x-input :label="__('Email')" name="email" class="mb-4" type="email" :placeholder="__('E-Mail Address')" autofocus></x-input>
        <x-input :label="__('Password')" name="password" class="mb-4" type="password" :placeholder="__('Password')"></x-input>
        <x-button>{{ __('Login') }}</x-button>
    </x-form>
@endsection
