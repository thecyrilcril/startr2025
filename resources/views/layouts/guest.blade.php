<!DOCTYPE html>
<html x-data="$store.darkMode"
    :class="dark === true ? `dark` : ``"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 dark:bg-purple-900 dark:text-purple-100 subpixel-antialiased min-h-screen relative grid grid-rows-[auto_1fr_auto]">
        @include('layouts._header')
        <main>
            {{ $slot }}
        </main>
        @include('layouts._footer')
    </body>
</html>
