@extends('partials.website')
@section('content')
    {{-- Web Applications page content --}}

    <section class="pt-28 pb-16 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-mist-600 transition-colors">Home</a><span>/</span><span
                            class="text-mist-600">Web Applications</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Web Applications &amp; Portals</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-bold font-display text-mist-900 tracking-tight leading-tight mb-5">Custom Web Applications & Client Portals.<br><span class="text-blue-600 italic font-normal">Connect with clients. Simplify your work.</span>
                    </h1>
                    <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">A good web application should make
                        your clients feel taken care of and your team feel less buried. Code Wize builds purpose-built web
                        apps for Miami businesses — from client portals to internal tools.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Start
                            with a free scoping call &rarr;</a><a href="{{ route('custom-software') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See
                            all software services</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:380px;"><img
                        src="{{ asset('images/review.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Types of Apps</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-mist-900 tracking-tight mb-3">What Code Wize builds
                </h2>
                <p class="text-base text-mist-500 leading-relaxed max-w-2xl">Purpose-built for your business — not generic
                    templates adapted to fit.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Client Portals</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Branded, secure portals where clients log in to upload
                        documents, view status, sign agreements, and communicate — replacing endless email threads.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="12" y1="18" x2="12" y2="12" />
                            <line x1="9" y1="15" x2="15" y2="15" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Online Intake &amp; Forms</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Replace PDF forms and email attachments with smart
                        online intake — conditional questions, file uploads, e-signatures, and automatic data routing.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Scheduling &amp; Booking</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Custom scheduling tools for client appointments,
                        inspections, or consultations — integrated with your calendar and sending automatic confirmations.
                    </p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Internal Admin Tools</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Custom internal apps for managing clients, tracking
                        work, and generating reports — built for your team's exact workflow.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg
                            width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="2" y1="12" x2="22" y2="12" />
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Business Websites</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Fast, conversion-focused websites built to rank in
                        Miami-Dade local search and bring in the right clients — not templated sites that look generic.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg
                            width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2"
                            viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18" />
                            <path d="M9 21V9" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">API &amp; Third-Party Integrations</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Connect your web app to QuickBooks, your CRM, email
                        platforms, or any service with an API — so data flows automatically instead of being re-entered.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-mist-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Let's build something that fits.
                </h2>
                <p class="text-mist-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Free scoping call — describe what
                    you need, and Code Wize will tell you what it would take.</p><a href="{{ route('contact') }}"
                    class="inline-block px-7 py-3 rounded-xl font-semibold text-sm bg-white text-mist-900 hover:bg-blue-50 hover:text-blue-600 transition-colors">Book
                    a free consultation &rarr;</a>
                <p class="mt-4 text-xs text-mist-600">Serving Miami-Dade &amp; South Broward &middot; Response within a
                    few hours</p>
            </div>
        </div>
    </section>
    <section class="pb-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <p class="text-xs font-bold uppercase tracking-widest text-mist-400 mb-5">Related Services</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3"><a href="{{ route('custom-software') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">💻 Custom Software</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('dashboards') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">📊 Dashboards</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('it-support') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">🔧 IT Support</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('network-security') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">🛡️ Network Security</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a></div>
        </div>
    </section>
@endsection
