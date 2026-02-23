<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? "Code Wize Technologies - Miami IT Consulting & Custom Software Development" }}</title>

<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
<link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=dm-sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|fraunces:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
<link href="https://fonts.bunny.net/css?family=inter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

<meta name="description" content="{{ $description ?? __('Code Wize is a Miami-based IT consulting and software development firm helping businesses streamline operations with custom dashboards, secure cloud solutions, and reliable local tech support. Fast, smart, and built for growth.') }}">
<link rel="canonical" href="{{ route('home') }}" />

{{-- Production onlly tags --}}
@env('production')
<script src="https://cdn.usefathom.com/script.js" data-site="USINGNHJ" defer></script>
@endenv

@vite(['resources/css/website.css', 'resources/js/app.js'])
@livewireStyles
