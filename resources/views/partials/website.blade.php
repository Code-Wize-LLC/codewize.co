<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('website.partials.head')
    </head>
    <body class="min-h-screen antialiased font-body">
        @include('website.partials.navbar')

        @yield('content')

        @include('website.partials.footer')
        @livewireScripts
    </body>
</html>
