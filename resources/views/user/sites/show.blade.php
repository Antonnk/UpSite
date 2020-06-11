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
        @foreach($site->content as $content)
            {{ $content->type }}: {{ $content->body }}<br>
        @endforeach

        @include('user.content.form', ['site' => $site])

    </x-section>
@endsection
