<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark bg-zinc-950 scroll-smooth">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen antialiased bg-zinc-950 text-zinc-100">
        @include('partials.navbar')

        {{ $slot }}

        @include('partials.footer')
        @fluxScripts
    </body>
</html>
