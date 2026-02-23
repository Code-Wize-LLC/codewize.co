@extends('partials.website')
@section('content')
    <section class="pt-28 pb-16 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-mist-600 transition-colors">Home</a><span>/</span><span
                            class="text-mist-600">Dashboards</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Dashboards &amp; Reporting</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-bold font-display text-mist-900 tracking-tight leading-tight mb-5">Real-Time Business Intelligence & Reporting.<br><span class="text-blue-600 italic font-normal">Better data. Smarter decisions.</span></h1>
                    <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">Your data already exists — in
                        QuickBooks, your CRM, spreadsheets, and various tools. Code Wize pulls it together into a single
                        live dashboard so you can see what's actually happening without hunting through five different
                        systems.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Get
                            a free scoping call &rarr;</a><a href="{{ route('custom-software') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See
                            all software services</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:380px;"><img
                        src="{{ asset('images/multimon.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-green-600"></span>What Gets Built</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-mist-900 tracking-tight mb-3">Dashboards that answer
                    the questions you actually ask</h2>
                <p class="text-base text-mist-500 leading-relaxed max-w-2xl">Not generic BI tools with charts you'll never
                    use — dashboards built around the metrics that matter for your specific business.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">KPI Dashboards</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">A live view of the numbers that run your business —
                        revenue, pipeline, jobs in progress, outstanding invoices, renewal dates — updated in real time.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18" />
                            <path d="M9 21V9" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">QuickBooks Integration</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Pull P&amp;L data, outstanding invoices, client
                        balances, and expense summaries directly from QuickBooks — no exporting to Excel every time you want
                        to check something.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Scheduled Reports</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Weekly or monthly reports generated automatically and
                        emailed to you — no one needs to pull data manually or remember to run the report.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Pipeline &amp; Renewal Tracking</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">For insurance agencies and sales-driven businesses — a
                        live view of deals in progress, upcoming renewals, and at-risk accounts so nothing slips.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#16A34A" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Multi-User Access</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Role-based access so managers see everything, staff
                        sees what's relevant, and clients can view their own data — all from the same system.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center mb-5"><svg
                            width="20" height="20" fill="none" stroke="#16A34A" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="3" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">PDF &amp; Excel Exports</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">One-click exports for client reports, lender
                        packages, or audit documentation — formatted documents without manual assembly.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Who This Is For</span>
                    <h2 class="mt-4 text-3xl font-bold text-mist-900 tracking-tight mb-4">If you're still pulling reports
                        manually, this is for you.</h2>
                    <p class="text-sm text-mist-500 leading-relaxed mb-5">A dashboard project is a fit when:</p>
                    <ul class="list-none flex flex-col gap-2">
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Your key numbers live in multiple systems and you check them all separately
                        </li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Generating a report for a client or partner takes an hour of manual work</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>You find out about problems after they've already cost you</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>You're relying on QuickBooks exports to Excel for basic financial summaries
                        </li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>You're managing renewals or deadlines in a spreadsheet</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>You want data to make decisions but it takes too long to pull together</li>
                    </ul>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:340px;">
                    <img src="{{ asset('images/multimon.jpg') }}" alt="Dashboard setup"
                        class="w-full h-full object-cover" style="object-position:center 40%;">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-mist-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Ready to see your business
                    clearly?</h2>
                <p class="text-mist-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Free scoping call — describe what
                    you need to see, and Code Wize builds a dashboard around it.</p><a href="{{ route('contact') }}"
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
                </a><a href="{{ route('web-apps') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">🌐 Web Applications</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('cloud-email') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">☁️ Cloud & Email</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('it-support') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">🔧 IT Support</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a></div>
        </div>
    </section>
@endsection
