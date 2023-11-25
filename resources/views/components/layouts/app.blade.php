<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Gocha.dev' }}</title>
    </head>

    <body class="h-full bg-white min-h-screen flex flex-col justify-between">
        <div>
            <x-theme.header />
            <main>
                {{ $slot }}
            </main>
        </div>
        <x-theme.footer />
    </body>

</html>
