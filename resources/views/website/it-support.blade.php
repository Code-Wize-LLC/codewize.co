@extends('partials.website')
@section('content')
    {{-- IT Support page content --}}

    <section class="pt-28 pb-16 bg-stone-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-stone-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-stone-600 transition-colors">Home</a><span>/</span><span
                            class="text-stone-600">IT Support</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>IT Support &amp; Helpdesk</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-display font-bold text-stone-900 tracking-tight leading-tight mb-5">
                      Managed IT Support & Helpdesk Services<br><span class="text-blue-600 font-normal italic">Fast response. Zero downtime.</span>
                    </h1>
                    <p class="text-base text-stone-500 leading-relaxed max-w-md mb-8">Remote and on-site support throughout
                        Miami-Dade and South Broward. One monthly rate covers everything — no hourly charges, no surprise
                        invoices, no ticketing queues.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-stone-900 text-stone-50 hover:bg-blue-600 transition-colors">Get
                            IT Support &rarr;</a><a href="{{ route('home') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-stone-200 text-stone-700 hover:border-stone-400 transition-colors">See
                            all IT services</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-stone-200" style="height:380px;"><img
                        src="{{ asset('images/hero.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>What's Included</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-3">Everything covered under
                    one flat rate.</h2>
                <p class="text-base text-stone-500 leading-relaxed max-w-2xl">No tiered plans or service menus. Hardware,
                    software, cloud, phones, and security — all included.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div
                    class="bg-white rounded-2xl border border-stone-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg></div>
                    <h3 class="font-semibold text-stone-900 mb-2">Remote Helpdesk</h3>
                    <p class="text-sm text-stone-500 leading-relaxed">Fast remote support for day-to-day issues — software
                        errors, login problems, slow machines. Most resolved same day without a site visit.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-stone-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg></div>
                    <h3 class="font-semibold text-stone-900 mb-2">On-Site Visits</h3>
                    <p class="text-sm text-stone-500 leading-relaxed">When remote won't cut it, Code Wize comes to you.
                        On-site throughout Miami-Dade and South Broward — typically same day or next morning.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-stone-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg></div>
                    <h3 class="font-semibold text-stone-900 mb-2">24/7 Monitoring</h3>
                    <p class="text-sm text-stone-500 leading-relaxed">Servers, workstations, and network devices monitored
                        around the clock. Issues caught and addressed before they become outages.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-stone-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="16 21 21 21 21 16" />
                            <line x1="4" y1="20" x2="21" y2="5" />
                            <polyline points="8 3 3 3 3 8" />
                        </svg></div>
                    <h3 class="font-semibold text-stone-900 mb-2">New Employee Setup</h3>
                    <p class="text-sm text-stone-500 leading-relaxed">Computer configured, email active, software installed,
                        permissions set. New hires can work on day one instead of waiting days for IT.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-stone-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="1 4 1 10 7 10" />
                            <path d="M3.51 15a9 9 0 1 0 .49-5.05" />
                        </svg></div>
                    <h3 class="font-semibold text-stone-900 mb-2">Backup &amp; Recovery</h3>
                    <p class="text-sm text-stone-500 leading-relaxed">Automated, tested backups running daily. If
                        ransomware hits or a drive fails, your data comes back fast.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-stone-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <h3 class="font-semibold text-stone-900 mb-2">Patch Management</h3>
                    <p class="text-sm text-stone-500 leading-relaxed">OS updates, software patches, and security fixes
                        deployed automatically — keeping devices secure without disrupting your team.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-stone-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>How It Works</span>
                    <h2 class="mt-4 text-3xl font-bold text-stone-900 tracking-tight mb-4">Getting started is
                        straightforward.</h2>
                    <p class="text-sm text-stone-500 leading-relaxed mb-8">No drawn-out onboarding. No multi-month IT
                        audits before anything gets done.</p>
                    <div class="relative flex gap-4 items-start pb-6 last:pb-0">
                        <div class="absolute left-4 top-9 bottom-0 w-px bg-stone-100"></div>
                        <div
                            class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-sm font-bold flex-shrink-0">
                            1</div>
                        <div><strong class="text-sm font-semibold text-stone-900 block mb-1">Free 30-min call</strong>
                            <p class="text-sm text-stone-500 leading-relaxed">Walk through your current setup, devices, and
                                pain points. No obligation, no pitch.</p>
                        </div>
                    </div>
                    <div class="relative flex gap-4 items-start pb-6 last:pb-0">
                        <div class="absolute left-4 top-9 bottom-0 w-px bg-stone-100"></div>
                        <div
                            class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-sm font-bold flex-shrink-0">
                            2</div>
                        <div><strong class="text-sm font-semibold text-stone-900 block mb-1">Flat-rate proposal</strong>
                            <p class="text-sm text-stone-500 leading-relaxed">One monthly number covering everything
                                discussed. No surprise charges later.</p>
                        </div>
                    </div>
                    <div class="relative flex gap-4 items-start pb-6 last:pb-0">
                        <div class="absolute left-4 top-9 bottom-0 w-px bg-stone-100"></div>
                        <div
                            class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-sm font-bold flex-shrink-0">
                            3</div>
                        <div><strong class="text-sm font-semibold text-stone-900 block mb-1">Onboarding (1–2 days)</strong>
                            <p class="text-sm text-stone-500 leading-relaxed">Monitoring deployed, documentation done,
                                backups configured. You're covered.</p>
                        </div>
                    </div>
                    <div class="relative flex gap-4 items-start pb-6 last:pb-0">
                        <div
                            class="w-8 h-8 rounded-full bg-stone-900 text-white flex items-center justify-center text-sm font-bold flex-shrink-0">
                            4</div>
                        <div><strong class="text-sm font-semibold text-stone-900 block mb-1">Call when you need us</strong>
                            <p class="text-sm text-stone-500 leading-relaxed">That's it. Reach out when something comes up.
                                Code Wize responds — not a ticketing queue.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-stone-900 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-white mb-2">Flat Monthly Pricing</h3>
                        <p class="text-sm text-stone-400 leading-relaxed mb-6">Fixed monthly rate based on your number of
                            devices and scope. No hourly billing, no call charges, no surprise invoices.</p>
                        <ul class="list-none flex flex-col gap-3 mb-7 pt-5 border-t border-white/10">
                            <li class="flex items-start gap-3 text-sm text-stone-300"><span
                                    class="text-blue-400 font-bold flex-shrink-0 mt-0.5">&#10003;</span>One monthly number,
                                agreed upfront</li>
                            <li class="flex items-start gap-3 text-sm text-stone-300"><span
                                    class="text-blue-400 font-bold flex-shrink-0 mt-0.5">&#10003;</span>Unlimited remote
                                support included</li>
                            <li class="flex items-start gap-3 text-sm text-stone-300"><span
                                    class="text-blue-400 font-bold flex-shrink-0 mt-0.5">&#10003;</span>On-site visits
                                included for Miami-Dade &amp; South Broward</li>
                            <li class="flex items-start gap-3 text-sm text-stone-300"><span
                                    class="text-blue-400 font-bold flex-shrink-0 mt-0.5">&#10003;</span>24/7 monitoring
                                included</li>
                            <li class="flex items-start gap-3 text-sm text-stone-300"><span
                                    class="text-blue-400 font-bold flex-shrink-0 mt-0.5">&#10003;</span>No long-term
                                contract required</li>
                        </ul>
                        <a href="{{ route('contact') }}"
                            class="inline-block px-5 py-2.5 rounded-xl font-semibold text-sm bg-white text-stone-900 hover:bg-blue-50 hover:text-blue-600 transition-colors">Get
                            a quote &rarr;</a>
                    </div>
                    <div class="bg-white rounded-2xl border border-stone-100 p-5 mt-4">
                        <p class="text-sm text-stone-500 leading-relaxed"><strong class="text-stone-900 font-semibold">Who
                                this is for:</strong> Contractor offices, accounting firms, and insurance agencies in
                            Miami-Dade and South Broward — typically 2 to 50 employees — who need their technology handled
                            without hiring full-time IT staff.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-stone-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-stone-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Let's get your technology sorted.
                </h2>
                <p class="text-stone-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Free 30-minute call. We'll look
                    at what you have and tell you plainly what needs to change.</p><a href="{{ route('contact') }}"
                    class="inline-block px-7 py-3 rounded-xl font-semibold text-sm bg-white text-stone-900 hover:bg-blue-50 hover:text-blue-600 transition-colors">Book
                    a free consultation &rarr;</a>
                <p class="mt-4 text-xs text-stone-600">Serving Miami-Dade &amp; South Broward &middot; Response within a
                    few hours</p>
            </div>
        </div>
    </section>
    <section class="pb-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <p class="text-xs font-bold uppercase tracking-widest text-stone-400 mb-5">Related Services</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3"><a href="{{ route('network-security') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-stone-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-stone-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-stone-900">🛡️ Network Security</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('cloud-email') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-stone-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-stone-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-stone-900">☁️ Cloud & Email</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('voip') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-stone-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-stone-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-stone-900">📞 VoIP Phones</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('custom-software') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-stone-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-stone-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-stone-900">💻 Custom Software</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a></div>
        </div>
    </section>
@endsection
