@extends('layouts.app')

@section('content')
    <x-form action="{{ action([\App\User\Controllers\RegisterController::class, 'register']) }}">
        <x-input class="mb-4" type="email" :label="__('Email')" name="email" :placeholder="__('E-Mail Address')" autofocus></x-input>
        <x-input class="mb-4" :label="__('First name')" name="first_name" :placeholder="__('Given name')"></x-input>
        <x-input class="mb-4" :label="__('Last name')" name="last_name" :placeholder="__('Family name')"></x-input>
        <x-input class="mb-4" type="password" :label="__('Password')" name="password" :placeholder="__('Password')"></x-input>
        <x-input class="mb-4" type="password" :label="__('Confirm password')" name="password_confirmation" :placeholder="__('Confirm password')"></x-input>
        <x-button>{{ __('Register') }}</x-button>
    </x-form>
@endsection
