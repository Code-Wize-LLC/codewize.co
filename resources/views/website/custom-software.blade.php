@extends('partials.website')
@section('content')
    {{-- Custom Software page content --}}

    <section class="pt-28 pb-16 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-mist-600 transition-colors">Home</a><span>/</span><span
                            class="text-mist-600">Custom Software</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Custom Software Development</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-bold font-display text-mist-900 tracking-tight leading-tight mb-5">Custom Software Development & Strategy.<br><span class="text-blue-600 italic font-normal">Built for you. Scaled for growth.</span></h1>
                    <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">Off-the-shelf software makes you adapt
                        to it. Custom software adapts to you. Code Wize builds web applications, internal tools, and
                        business portals for Miami businesses — fixed price, no hourly billing.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Talk
                            through your idea &rarr;</a><a href="{{ route('web-apps') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See
                            web apps & portals</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:380px;"><img
                        src="{{ asset('images/monitor.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-green-600"></span>What Gets Built</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-mist-900 tracking-tight mb-3">The kind of software
                    Miami businesses actually need</h2>
                <p class="text-base text-mist-500 leading-relaxed max-w-2xl">Code Wize focuses on software that solves real
                    operational problems — not technology for its own sake.</p>
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
                    <p class="text-sm text-mist-500 leading-relaxed">Secure, branded portals where clients upload
                        documents, sign forms, check status, and communicate — replacing endless email threads.</p>
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
                    <h3 class="font-semibold text-mist-900 mb-2">Job &amp; Project Tracking</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Custom web apps for contractor offices to track jobs,
                        crew assignments, material costs, timelines, and client communications in one place.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Document Automation</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Auto-generated proposals, contracts, invoices, and
                        reports — pulling from your data and producing formatted documents without manual assembly.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Workflow Automation</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Repetitive manual processes turned into automatic
                        workflows — triggered emails, status updates, and approval chains that run without anyone
                        remembering.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18" />
                            <path d="M9 21V9" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Integrations</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Connect QuickBooks, your CRM, insurance software, or
                        any tool to a central app that keeps everything in sync — no more double entry.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg
                            width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Internal Tools</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Anything that runs on spreadsheets, paper, or tribal
                        knowledge — turned into a proper internal tool that anyone can use consistently.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Real Examples</span>
                    <h2 class="mt-4 text-3xl font-bold text-mist-900 tracking-tight mb-6">What's been built for Miami
                        businesses like yours</h2>
                    <div class="flex flex-col gap-4">
                        <div class="bg-white rounded-2xl border border-mist-100 p-5">
                            <p class="font-semibold text-mist-900 mb-2">🏗️ Contractor job tracker</p>
                            <p class="text-sm text-mist-500 leading-relaxed">A Miami general contractor was managing 20+
                                active jobs across 4 spreadsheets. Code Wize built a custom web app that tracks jobs,
                                materials, subcontractors, and automatically sends clients weekly status updates.</p>
                        </div>
                        <div class="bg-white rounded-2xl border border-mist-100 p-5">
                            <p class="font-semibold text-mist-900 mb-2">🧾 Accounting firm client portal</p>
                            <p class="text-sm text-mist-500 leading-relaxed">A Miami tax firm was emailing documents back
                                and forth with 200+ clients every tax season. Code Wize built a secure portal for document
                                upload, e-signatures, and status tracking. Admin time saved: 10+ hours per week during peak
                                season.</p>
                        </div>
                        <div class="bg-white rounded-2xl border border-mist-100 p-5">
                            <p class="font-semibold text-mist-900 mb-2">🛡️ Insurance renewal dashboard</p>
                            <p class="text-sm text-mist-500 leading-relaxed">A South Broward insurance agency was managing
                                renewals manually across a CRM and multiple spreadsheets. Code Wize built a live dashboard
                                pulling from both — showing upcoming renewals, at-risk accounts, and pipeline in one view.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="rounded-2xl overflow-hidden bg-mist-200 mb-5" style="height:200px;">
                        <img src="{{ asset('images/review.jpg') }}" alt="Code review" class="w-full h-full object-cover"
                            style="object-position:center 30%;">
                    </div>
                    <div class="bg-mist-900 rounded-2xl p-7">
                        <h3 class="text-2xl font-bold text-white mb-2">Fixed-Price Projects</h3>
                        <p class="text-sm text-mist-400 leading-relaxed mb-5">Every project starts with a free scoping
                            call. You get a fixed-price proposal — not an hourly estimate that balloons. Code Wize doesn't
                            bill by the hour.</p>
                        <p class="text-xs font-bold uppercase tracking-widest text-mist-500 mb-4">Typical project ranges
                        </p>
                        <div class="flex flex-col">
                            <div class="flex justify-between text-sm py-3 border-b border-white/10 last:border-0"><span
                                    class="text-mist-300">Simple portal or intake form</span><span
                                    class="text-blue-400 font-semibold">$3K – $6K</span></div>
                            <div class="flex justify-between text-sm py-3 border-b border-white/10 last:border-0"><span
                                    class="text-mist-300">Dashboard with integrations</span><span
                                    class="text-blue-400 font-semibold">$5K – $12K</span></div>
                            <div class="flex justify-between text-sm py-3 border-b border-white/10 last:border-0"><span
                                    class="text-mist-300">Full custom web application</span><span
                                    class="text-blue-400 font-semibold">$10K+</span></div>
                        </div>
                        <a href="{{ route('contact') }}"
                            class="inline-block mt-6 px-5 py-2.5 rounded-xl font-semibold text-sm bg-white text-mist-900 hover:bg-blue-50 hover:text-blue-600 transition-colors">Get
                            a free scoping call &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-mist-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Ready to build something?</h2>
                <p class="text-mist-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Free scoping call — describe the
                    problem, and Code Wize will tell you honestly what it would take to solve it.</p><a
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3"><a href="{{ route('web-apps') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">🌐 Web Applications</p>
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
