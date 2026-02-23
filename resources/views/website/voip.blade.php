@extends('partials.website')
@section('content')
    {{-- VoIP page content --}}

    <section class="pt-28 pb-16 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5"><a href="{{ route('home') }}"
                            class="hover:text-mist-600 transition-colors">Home</a><span>/</span><span
                            class="text-mist-600">VoIP Phones</span></nav><span
                        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                            class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>VoIP Phone Systems</span>
                    <h1 class="mt-4 text-4xl md:text-5xl font-bold font-display text-mist-900 tracking-tight leading-tight mb-5">Cloud VoIP Business Phone Systems.<br><span class="text-blue-600 italic font-normal">Crystal clear. Cost effective.</span></h1>
                    <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">Traditional office phone systems are
                        expensive, inflexible, and tied to a physical location. VoIP gives Miami businesses a professional
                        phone presence that works from any device — at a fraction of the cost.</p>
                    <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                            class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Get
                            a VoIP Quote &rarr;</a><a href="{{ route('it-support') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See
                            all IT services</a></div>
                </div>
                <div class="rounded-2xl overflow-hidden bg-mist-200" style="height:380px;"><img
                        src="{{ asset('images/hero.jpg') }}" alt="" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-10"><span
                    class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>What You Get</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-mist-900 tracking-tight mb-3">A business phone system
                    that actually works for you</h2>
                <p class="text-base text-mist-500 leading-relaxed max-w-2xl">Code Wize deploys and manages VoIP phone
                    systems for Miami businesses — from single-office setups to multi-location teams.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.5 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.4 1.35h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Works on Any Device</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Use your business number from a desk phone, laptop, or
                        mobile — wherever you are. Field and remote staff stay reachable on the same number.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <polyline points="23 7 16 12 23 17 23 7" />
                            <rect x="1" y="5" width="15" height="14" rx="2" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Auto-Attendant &amp; Call Routing</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Professional greetings, business-hours routing, and
                        call forwarding — so your business sounds polished even when you're a small team.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Voicemail to Email</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Voicemails delivered to your inbox as audio files with
                        optional transcription — no more calling in to check messages.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <line x1="12" y1="1" x2="12" y2="23" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Lower Monthly Cost</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">VoIP typically cuts phone bills by 40–60% compared to
                        traditional landlines. No expensive hardware, no per-line charges as you grow.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Call Recording</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Optional call recording for training, compliance, or
                        dispute resolution. Recordings stored securely and accessible when needed.</p>
                </div>
                <div
                    class="bg-white rounded-2xl border border-mist-100 p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center mb-5"><svg width="20"
                            height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg></div>
                    <h3 class="font-semibold text-mist-900 mb-2">Setup &amp; Ongoing Support</h3>
                    <p class="text-sm text-mist-500 leading-relaxed">Full setup — number porting, device configuration,
                        staff training — plus ongoing support as your team grows or changes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-mist-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-mist-900 rounded-3xl overflow-hidden text-center px-8 py-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Ready to upgrade your office
                    phones?</h2>
                <p class="text-mist-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Book a free call and find out
                    what a modern VoIP system would cost for your Miami office.</p><a href="{{ route('contact') }}"
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
                </a><a href="{{ route('cloud-email') }}"
                    class="flex items-center justify-between gap-3 bg-white border border-mist-100 rounded-xl px-5 py-4 no-underline group hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-sm transition-all duration-200">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-widest text-mist-400 mb-0.5">Also available</p>
                        <p class="text-sm font-semibold text-mist-900">☁️ Cloud & Email</p>
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
