<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
        @livewireScripts
    </body>
</html>
