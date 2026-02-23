<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-end justify-between mb-10 flex-wrap gap-4">
            <div>
                <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>IT Services</span>
                <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-3">Keep everything running.</h2>
                <p class="text-base text-stone-500 leading-relaxed max-w-xl">Flat monthly rate. No hourly billing. Remote and on-site support throughout Miami-Dade and South Broward.</p>
            </div>
            <a href="{{ route('it-support') }}" class="flex-shrink-0 text-sm font-semibold text-blue-600 hover:text-blue-700 transition-colors">See all IT services &rarr;</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- IT Support --}}
            <a href="{{ route('it-support') }}" class="group flex gap-5 items-start bg-white border border-stone-100 rounded-2xl p-6 hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-md transition-all duration-200 no-underline">
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                    <svg width="20" height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1.5">
                        <h3 class="font-semibold text-stone-900">IT Support & Helpdesk</h3>
                        <span class="text-blue-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                    </div>
                    <p class="text-sm text-stone-500 leading-relaxed">Remote and on-site help for day-to-day issues — computers, email, software, and everything in between. Most issues resolved same day.</p>
                    <div class="mt-3 flex flex-wrap gap-1.5">
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Remote helpdesk</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">On-site visits</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">24/7 monitoring</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Flat monthly rate</span>
                    </div>
                </div>
            </a>

            {{-- Network Security --}}
            <a href="{{ route('network-security') }}" class="group flex gap-5 items-start bg-white border border-stone-100 rounded-2xl p-6 hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-md transition-all duration-200 no-underline">
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                    <svg width="20" height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1.5">
                        <h3 class="font-semibold text-stone-900">Network Security</h3>
                        <span class="text-blue-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                    </div>
                    <p class="text-sm text-stone-500 leading-relaxed">Business-grade firewalls, properly segmented WiFi, endpoint protection, and continuous threat monitoring so your network isn't one incident away from a bad week.</p>
                    <div class="mt-3 flex flex-wrap gap-1.5">
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Firewall setup</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">WiFi design</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">VPN & remote access</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Free network audit</span>
                    </div>
                </div>
            </a>

            {{-- Cloud & Email --}}
            <a href="{{ route('cloud-email') }}" class="group flex gap-5 items-start bg-white border border-stone-100 rounded-2xl p-6 hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-md transition-all duration-200 no-underline">
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                    <svg width="20" height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1.5">
                        <h3 class="font-semibold text-stone-900">Cloud & Email</h3>
                        <span class="text-blue-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                    </div>
                    <p class="text-sm text-stone-500 leading-relaxed">Microsoft 365 and Google Workspace setup, migration, and ongoing administration — plus email security, shared drives, and MFA so your team stays productive and protected.</p>
                    <div class="mt-3 flex flex-wrap gap-1.5">
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">M365 & Google Workspace</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Email migration</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">MFA & security</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">User management</span>
                    </div>
                </div>
            </a>

            {{-- VoIP --}}
            <a href="{{ route('voip') }}" class="group flex gap-5 items-start bg-white border border-stone-100 rounded-2xl p-6 hover:border-blue-200 hover:-translate-y-0.5 hover:shadow-md transition-all duration-200 no-underline">
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-100 transition-colors">
                    <svg width="20" height="20" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.5 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.4 1.35h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1.5">
                        <h3 class="font-semibold text-stone-900">VoIP Phone Systems</h3>
                        <span class="text-blue-600 text-sm group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                    </div>
                    <p class="text-sm text-stone-500 leading-relaxed">Cloud-based business phones that work from any device. Auto-attendant, call routing, voicemail-to-email, and typically 40–60% cheaper than traditional landlines.</p>
                    <div class="mt-3 flex flex-wrap gap-1.5">
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Any device</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Auto-attendant</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Call recording</span>
                        <span class="text-xs bg-stone-50 border border-stone-100 text-stone-500 rounded-lg px-2.5 py-1">Number porting</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
