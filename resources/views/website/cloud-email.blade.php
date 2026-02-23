@extends('partials.website')
@section('content')
    {{-- Cloud & Email page content --}}

    <section class="pt-28 pb-16 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-mist-600 transition-colors">Home</a><span>/</span><span
                            class="text-mist-600">Cloud & Email</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Cloud &amp; Email</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-bold font-display text-mist-900 tracking-tight leading-tight mb-5">
                        Microsoft 365 & Google Workspace Experts.<br><span class="text-blue-600 italic font-normal">Seamless migration. Total mobility.</span></h1>
                    <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">Cloud email and file storage should
                        make your team more productive — not create new headaches. Code Wize sets up, migrates, and manages
                        M365 and Google Workspace for Miami businesses.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Talk
                            to Code Wize &rarr;</a><a href="{{ route('it-support') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See
                            all IT services</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:380px;"><img
                        src="{{ asset('images/review.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Services</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-mist-900 tracking-tight mb-3">What Code Wize handles
                </h2>
                <p class="text-base text-mist-500 leading-relaxed max-w-2xl">From fresh setups to messy migrations and
                    ongoing day-to-day administration.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Email Migration</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Moving from any provider? Code Wize migrates your
                        email history, contacts, and calendars without data loss or downtime during business hours.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">SharePoint &amp; Drive Setup</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Organized shared file storage with proper folder
                        structure, permissions, and access controls so the right people see the right things.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">User Management</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Adding employees, removing departing staff, resetting
                        passwords, and adjusting permissions — ongoing M365 and Google Workspace administration.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="11" width="18" height="11" rx="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Security &amp; MFA Setup</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Multi-factor authentication, conditional access
                        policies, and email security filters configured so compromised passwords don't mean compromised
                        accounts.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="1 4 1 10 7 10" />
                            <path d="M3.51 15a9 9 0 1 0 .49-5.05" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Email Backup</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Microsoft and Google don't always back up what you
                        think. Third-party email backup so nothing's lost if an account is deleted or compromised.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Device Sync &amp; Mobile</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Email and files working on phones, tablets, and
                        laptops — not just the office desktop. Cloud accounts synced properly across every device your team
                        uses.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-mist-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Get your cloud setup done right.
                </h2>
                <p class="text-mist-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Free consultation — Code Wize
                    will assess your current email and file setup and show you a better path.</p><a
                    href="{{ route('contact') }}"
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3"><a href="{{ route('it-support') }}"
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
                </a><a href="{{ route('voip') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">📞 VoIP Phones</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('dashboards') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">📊 Dashboards</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a></div>
        </div>
    </section>
@endsection
