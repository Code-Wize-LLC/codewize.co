<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-zinc-50 scroll-smooth">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen antialiased bg-zinc-50 text-zinc-900">
        @include('partials.navbar')

        {{ $slot }}

        @include('partials.footer')
        @fluxScripts
    </body>
</html>
