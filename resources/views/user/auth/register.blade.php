@extends('layouts.app')

@section('content')
    <x-form action="{{ action([\App\User\Controllers\RegisterController::class, 'register']) }}">
        <x-input :label="__('Email')" name="email" type="email" class="mb-4" :placeholder="__('E-Mail Address')" autofocus></x-input>
        <x-input :label="__('First name')" name="first_name" class="mb-4" :placeholder="__('Given name')"></x-input>
        <x-input :label="__('Last name')" name="last_name" class="mb-4" :placeholder="__('Family name')"></x-input>
        <x-input :label="__('Password')" class="mb-4" name="password" type="password" :placeholder="__('Password')"></x-input>
        <x-input :label="__('Confirm password')" name="password_confirmation" class="mb-4"  type="password" :placeholder="__('Confirm password')"></x-input>
        <x-button>{{ __('Register') }}</x-button>
    </x-form>
@endsection
