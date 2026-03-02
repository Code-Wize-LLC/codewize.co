<section class="bg-mist-50 py-20">
    <div class="mx-auto max-w-6xl px-6">
        <div class="relative mb-10 overflow-hidden rounded-2xl bg-mist-800" style="height:260px;">
            <img src="{{ asset('web/austin-distel-mpN7xjKQ_Ns-unsplash.webp') }}" alt="Team" class="h-full w-full object-cover object-center opacity-60" />
            <div class="absolute inset-0 flex items-center px-10 md:px-14 bg-linear-to-r from-mist-900/50 to-transparent">
                <div class="max-w-md">
                    <p class="mb-2 text-xs font-bold tracking-widest text-white/60 uppercase">What Code Wize Does</p>
                    <h2 class="text-3xl font-display leading-tight font-bold text-white">Two things most IT companies don't offer together - we do.</h2>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 overflow-hidden rounded-2xl border border-mist-100 md:grid-cols-2">
            <div class="border-b border-mist-100 bg-linear-to-br from-blue-50 via-white via-30% to-white p-10 md:border-r md:border-b-0">
                <p class="mb-4 text-6xl leading-none font-bold text-mist-300 select-none">01</p>
                <span class="badge-blue">
                    <flux:icon.dot-blue />The foundation
                </span>
                <h3 class="mt-4 mb-3 text-2xl font-display font-bold text-mist-900">IT Support &amp; Day-to-Day Tech</h3>
                <p class="mb-5 text-sm leading-relaxed text-mist-500">
                    Computers, network, phones, cloud, backups - Code Wize keeps all of it running and handles issues fast. Flat monthly rate. Available when you need it.
                </p>
                <ul class="flex list-none flex-col gap-2">
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Remote &amp; on-site support across Miami-Dade and South Broward
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-blue-50">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Microsoft 365 &amp; Google Workspace setup and management
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Network, WiFi, and firewall configuration
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        VoIP phone systems
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Automated backups &amp; recovery planning
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        24/7 monitoring and patch management
                    </li>
                </ul>
                <a href="{{ route('it-support') }}" class="mt-7 inline-block rounded-xl bg-mist-900 px-5 py-2.5 text-sm font-semibold text-mist-50 transition-colors hover:bg-blue-600">
                    Get IT support &rarr;
                </a>
            </div>
            <div class="bg-linear-to-br from-white via-white via-70% to-green-50 p-10">
                <p class="mb-4 text-6xl leading-none font-bold text-mist-300 select-none">02</p>
                <span class="badge-green">
                    <flux:icon.dot-green />The differentiator
                </span>
                <h3 class="mt-4 mb-3 text-2xl font-display font-bold text-mist-900">Custom Software &amp; Web Apps</h3>
                <p class="mb-5 text-sm leading-relaxed text-mist-500">Most IT companies stop at support tickets. Code Wize also builds software - when the spreadsheets stop working or your workflow doesn't fit anything on the market.</p>
                <ul class="flex list-none flex-col gap-2">
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Client portals &amp; intake forms
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Job tracking &amp; project dashboards
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        QuickBooks &amp; CRM integrations
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Business websites with local SEO
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Automated workflows &amp; reporting
                    </li>
                    <li class="flex items-center gap-2.5 text-sm leading-relaxed text-mist-500">
                        <flux:icon.web-check />
                        Internal tools that save hours every week
                    </li>
                </ul>
                <div class="mt-7">
                    <a href="{{ route('custom-software') }}" class="btn-secondary">
                        See what's been built <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
