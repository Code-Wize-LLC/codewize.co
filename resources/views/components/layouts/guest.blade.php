<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark dark:bg-neutral-950">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen antialiased bg-gradient-to-b from-black to-zinc-900 text-white">
        {{ $slot }}
        @fluxScripts
    </body>
</html>
