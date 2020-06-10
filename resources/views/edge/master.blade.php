<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme" content="{{ $site->theme }}">
        <title>{{ $site->name }}</title>
    </head>
    <body>
        @yield('body')
    </body>
</html>
