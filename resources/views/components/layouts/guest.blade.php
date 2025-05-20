<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white dark:bg-zinc-950">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen antialiased bg-gradient-to-b from-white to-zinc-100 text-zinc-800 dark:from-black dark:to-zinc-900 dark:text-white">
        @include('partials.navbar')

        {{ $slot }}

        @include('partials.footer')
        @fluxScripts
    </body>
</html>
