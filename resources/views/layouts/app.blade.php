<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<div>

    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ action([\App\User\Controllers\LoginController::class, 'show']) }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ action([\App\User\Controllers\RegisterController::class, 'show']) }}">{{ __('Register') }}</a>
        </li>
    @else
        @include('layouts.menu')
    @endguest


    <header class="bg-white shadow">
        <div class="flex justify-between items-center px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl py-6">
                <h1 class="text-3xl font-bold leading-tight text-gray-900">
                    @yield('title')
                </h1>
            </div>

            <div class="flex gap-2 lg:ml-4">
                @yield('toolbar')
            </div>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

</div>
</body>
</html>
