{{-- Site Footer --}}
{{-- Usage: @include('components.footer') --}}

<footer class="bg-mist-950 text-mist-400 pt-14 pb-8">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Top grid --}}
        <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr_1fr] gap-10 pb-10 border-b border-white/10">

            {{-- Brand / contact --}}
            <div>
                <a href="{{ route('home') }}"
                    class="block font-bold text-lg tracking-tight text-mist-100 mb-3 no-underline">
                    code<span class="text-blue-600">wize</span>
                </a>
                <p class="text-sm leading-relaxed max-w-xs">
                    IT support and custom software for contractors, accountants,
                    and insurance offices in Miami-Dade and South Broward.
                </p>
                <address class="not-italic mt-5 flex flex-col gap-1 text-sm">
                    <span>Miami, Florida</span>
                    <a href="mailto:hello@codewize.co" class="hover:text-mist-100 transition-colors">
                        hello@codewize.co
                    </a>
                </address>
            </div>

            {{-- Services column --}}
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-mist-600 mb-4">
                    Services
                </p>
                <ul class="list-none flex flex-col gap-2">
                    @foreach ([['label' => 'IT Support & Helpdesk', 'route' => 'it-support'], ['label' => 'Network & Security', 'route' => 'network-security'], ['label' => 'Cloud & Email', 'route' => 'cloud-email'], ['label' => 'VoIP Phone Systems', 'route' => 'voip'], ['label' => 'Custom Software', 'route' => 'custom-software'], ['label' => 'Web Applications', 'route' => 'web-apps'], ['label' => 'Dashboards & Reporting', 'route' => 'dashboards']] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}"
                                class="text-sm hover:text-mist-100 transition-colors">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Service areas column --}}
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-mist-600 mb-4">
                    Service Areas
                </p>
                <ul class="list-none flex flex-col gap-2 text-sm">
                    <li>IT Support Miami, FL</li>
                    <li>IT Services Doral, FL</li>
                    <li>IT Help Kendall, FL</li>
                    <li>IT Support Miramar, FL</li>
                    <li>IT Services Pembroke Pines</li>
                    <li>Software Dev Coral Gables</li>
                    <li>IT Company Hollywood, FL</li>
                </ul>
            </div>

        </div>{{-- /top grid --}}

        {{-- Bottom bar --}}
        <div class="pt-6 flex flex-wrap justify-between gap-3 text-xs text-mist-600">
            <span>
                &copy; {{ date('Y') }} Code Wize Technologies, LLC &middot; Miami, Florida
            </span>
            <span>
                IT Support &amp; Custom Software &middot; Miami-Dade &amp; South Broward
            </span>
        </div>
    </div>
</footer>
