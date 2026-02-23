@extends('partials.website')
@section('content')
    {{-- Network Security page content --}}

    <section class="pt-28 pb-16 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-mist-600 transition-colors">Home</a><span>/</span><span
                            class="text-mist-600">Network Security</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Network Setup &amp; Security</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-bold text-mist-900 tracking-tight leading-tight mb-5 font-display">Secure Business Network Infrastructure<br><span class="text-blue-600 italic font-normal">Built for speed. Guarded for safety.</span></h1>
                    <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">Slow WiFi, outages, and unsecured
                        connections cost Miami businesses real money. Code Wize sets up and maintains fast, properly secured
                        networks — then monitors them so problems are caught before they become disasters.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Get
                            a Free Network Audit &rarr;</a><a href="{{ route('it-support') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See
                            full IT support</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:380px;"><img
                        src="{{ asset('images/cables.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>What's Covered</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-mist-900 tracking-tight mb-3">Network setup and
                    security for Miami offices</h2>
                <p class="text-base text-mist-500 leading-relaxed max-w-2xl">Whether starting from scratch, fixing a
                    previous mess, or upgrading aging equipment — Code Wize handles the full network stack.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="8" rx="2" />
                            <rect x="2" y="14" width="20" height="8" rx="2" />
                            <line x1="6" y1="6" x2="6.01" y2="6" />
                            <line x1="6" y1="18" x2="6.01" y2="18" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Firewall Setup &amp; Management</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Business-grade firewalls configured, monitored, and
                        maintained — not the consumer router defaults most offices are running.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12.55a11 11 0 0 1 14.08 0" />
                            <path d="M1.42 9a16 16 0 0 1 21.16 0" />
                            <path d="M8.53 16.11a6 6 0 0 1 6.95 0" />
                            <line x1="12" y1="20" x2="12.01" y2="20" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">WiFi Design &amp; Optimization</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Dead zones and slow speeds are fixable. Code Wize
                        designs and deploys business WiFi that covers your space properly and stays fast.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Endpoint Protection</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Managed antivirus, malware detection, and monitoring
                        deployed across all Windows and Mac devices on your network.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="12" y1="8" x2="12" y2="12" />
                            <line x1="12" y1="16" x2="12.01" y2="16" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Threat Monitoring</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">24/7 monitoring for unusual activity, unauthorized
                        access attempts, and suspicious behavior — with fast response when something looks wrong.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="11" width="18" height="11" rx="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">VPN &amp; Remote Access</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Secure remote access for employees working from home
                        or the field — without opening your network to unnecessary risk.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Network Health Reporting</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Regular reports on performance, security status, and
                        issues addressed. You'll always know the state of your infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Why It Matters</span>
                    <h2 class="mt-4 text-3xl font-bold text-mist-900 tracking-tight mb-4">Most small office networks have
                        real security gaps.</h2>
                    <p class="text-sm text-mist-500 leading-relaxed mb-5">The majority of small business networks Code
                        Wize encounters for the first time have at least one of these problems:</p>
                    <ul class="list-none flex flex-col gap-2">
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Router using default admin credentials</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>No separation between guest and internal WiFi</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Outdated firmware on network equipment</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>No monitoring — issues discovered only when something breaks</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Backups that haven't been tested (or aren't running)</li>
                        <li class="flex items-start gap-2.5 text-sm text-mist-500 leading-relaxed"><span
                                class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>Employees on personal devices with no endpoint protection</li>
                    </ul>
                    <p class="text-sm text-mist-500 leading-relaxed mt-5">None are catastrophic individually — together
                        they make a network one incident away from a bad week. Code Wize fixes them systematically.</p>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:320px;">
                    <img src="{{ asset('images/cables.jpg') }}" alt="Network cabling" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-mist-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Get a free network audit.</h2>
                <p class="text-mist-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Code Wize reviews your current
                    setup and shows you exactly what's exposed — no obligation, no pitch.</p><a
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
                </a><a href="{{ route('cloud-email') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">☁️ Cloud & Email</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('voip') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">📞 VoIP Phones</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a><a href="{{ route('custom-software') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">💻 Custom Software</p>
                    </div><span
                        class="text-blue-600 text-base group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                </a></div>
        </div>
    </section>
@endsection
