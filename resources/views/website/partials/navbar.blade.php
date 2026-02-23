{{-- Navigation Bar --}}
{{-- Usage: @include('components.navbar', ['active' => 'IT Support']) --}}
{{-- Active options: 'IT Support' | 'Network' | 'Cloud & Email' | 'VoIP' | 'Custom Software' | 'Dashboards' --}}

@php
    $navItems = [
        ['label' => 'IT Support', 'route' => 'it-support'],
        ['label' => 'Network', 'route' => 'network-security'],
        ['label' => 'Cloud & Email', 'route' => 'cloud-email'],
        ['label' => 'VoIP', 'route' => 'voip'],
        ['label' => 'Custom Software', 'route' => 'custom-software'],
        ['label' => 'Dashboards', 'route' => 'dashboards'],
    ];
@endphp

<header class="fixed inset-x-0 top-0 z-50 bg-mist-50/95 backdrop-blur-lg border-b border-black/10"
    x-data="{ open: false }" @keydown.escape.window="open = false">
    <div class="max-w-6xl mx-auto px-6 flex items-center justify-between h-[60px]">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="font-bold text-lg tracking-tight text-mist-900 no-underline">
            code<span class="text-blue-600">wize</span>
        </a>

        {{-- Desktop nav --}}
        <ul class="hidden md:flex items-center gap-7 list-none">
            @foreach ($navItems as $item)
                <li>
                    <a href="{{ route($item['route']) }}"
                        class="text-sm transition-colors duration-200
                    {{ ($active ?? '') === $item['label'] ? 'text-blue-600 font-semibold' : 'text-mist-500 hover:text-mist-900' }}">
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Desktop CTA --}}
        <a href="{{ route('contact') }}"
            class="hidden md:inline-block px-5 py-2 rounded-lg text-sm font-semibold
              bg-mist-900 text-mist-50 transition-colors hover:bg-blue-600">
            Free Consultation
        </a>

        {{-- Mobile hamburger --}}
        <button class="md:hidden bg-transparent border-none cursor-pointer p-1 text-mist-900" aria-label="Toggle menu"
            :aria-expanded="open.toString()" aria-controls="mob-menu" @click="open = !open">
            {{-- Hamburger icon --}}
            <svg x-show="!open" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" aria-hidden="true">
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
            {{-- Close icon --}}
            <svg x-show="open" x-cloak width="22" height="22" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

    </div>

    {{-- Mobile menu --}}
    <nav id="mob-menu" x-show="open" x-cloak x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-mist-50 border-t border-black/10 px-6 py-5 flex flex-col gap-3"
        aria-label="Mobile navigation">
        @foreach ($navItems as $item)
            <a href="{{ route($item['route']) }}"
                class="text-sm font-medium transition-colors
                {{ ($active ?? '') === $item['label'] ? 'text-blue-600' : 'text-mist-500 hover:text-mist-900' }}"
                @click="open = false">
                {{ $item['label'] }}
            </a>
        @endforeach

        <a href="{{ route('contact') }}"
            class="mt-1 px-5 py-2 rounded-lg text-sm font-semibold text-center
              bg-mist-900 text-mist-50 transition-colors hover:bg-blue-600"
            @click="open = false">
            Free Consultation
        </a>
    </nav>

</header>
