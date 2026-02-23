<section class="py-20 bg-stone-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-end justify-between mb-10 flex-wrap gap-4">
            <div>
                <span class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Software Services</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-3">When the spreadsheet stops being enough.</h2>
                <p class="text-base text-stone-500 leading-relaxed max-w-xl">Fixed-price projects. Free scoping call. No hourly billing — ever.</p>
            </div>
            <a href="{{ route('custom-software') }}" class="flex-shrink-0 text-sm font-semibold text-green-600 hover:text-green-700 transition-colors">See all software services &rarr;</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            {{-- Custom Software --}}
            <a href="{{ route('custom-software') }}" class="group flex flex-col bg-white border border-stone-100 rounded-2xl p-6 hover:border-green-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-200 no-underline">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center group-hover:bg-green-100 transition-colors">
                        <svg width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                    </div>
                    <span class="text-green-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </div>
                <h3 class="font-semibold text-stone-900 mb-2">Custom Software</h3>
                <p class="text-sm text-stone-500 leading-relaxed flex-1">Web applications, internal tools, and business portals built around your exact workflow — not generic software you have to adapt to.</p>
                <div class="mt-4 pt-4 border-t border-stone-100">
                    <p class="text-xs text-stone-400">Client portals · Job trackers · Document automation · Workflow tools</p>
                </div>
            </a>

            {{-- Web Applications --}}
            <a href="{{ route('web-apps') }}" class="group flex flex-col bg-white border border-stone-100 rounded-2xl p-6 hover:border-green-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-200 no-underline">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center group-hover:bg-green-100 transition-colors">
                        <svg width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <span class="text-green-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </div>
                <h3 class="font-semibold text-stone-900 mb-2">Web Applications & Portals</h3>
                <p class="text-sm text-stone-500 leading-relaxed flex-1">Client-facing portals, online intake forms, scheduling tools, and business websites built for Miami-Dade local search.</p>
                <div class="mt-4 pt-4 border-t border-stone-100">
                    <p class="text-xs text-stone-400">Client portals · Intake forms · Scheduling · Business websites</p>
                </div>
            </a>

            {{-- Dashboards --}}
            <a href="{{ route('dashboards') }}" class="group flex flex-col bg-white border border-stone-100 rounded-2xl p-6 hover:border-green-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-200 no-underline">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center group-hover:bg-green-100 transition-colors">
                        <svg width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                    </div>
                    <span class="text-green-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </div>
                <h3 class="font-semibold text-stone-900 mb-2">Dashboards & Reporting</h3>
                <p class="text-sm text-stone-500 leading-relaxed flex-1">Live business intelligence pulling from QuickBooks, your CRM, and other tools into a single view — with scheduled reports and one-click exports.</p>
                <div class="mt-4 pt-4 border-t border-stone-100">
                    <p class="text-xs text-stone-400">KPI dashboards · QuickBooks integration · Scheduled reports</p>
                </div>
            </a>
        </div>

        {{-- Pricing callout --}}
        <div class="mt-6 bg-white rounded-2xl border border-stone-100 p-6 md:p-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex gap-3 items-start">
                <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <svg width="14" height="14" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#16A34A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-stone-900 mb-1">Fixed-price proposals</p>
                    <p class="text-xs text-stone-500 leading-relaxed">Every project starts with a free scoping call. You get a firm price — not an hourly estimate that grows.</p>
                </div>
            </div>
            <div class="flex gap-3 items-start">
                <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <svg width="14" height="14" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#16A34A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-stone-900 mb-1">Typical project ranges</p>
                    <p class="text-xs text-stone-500 leading-relaxed">Simple tools from $3K–$6K. Dashboards with integrations $5K–$12K. Full custom applications $10K+.</p>
                </div>
            </div>
            <div class="flex gap-3 items-start">
                <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <svg width="14" height="14" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#16A34A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-stone-900 mb-1">No hourly billing — ever</p>
                    <p class="text-xs text-stone-500 leading-relaxed">Whether IT support or a software project, pricing is flat and disclosed before any work begins.</p>
                </div>
            </div>
        </div>
    </div>
</section>
