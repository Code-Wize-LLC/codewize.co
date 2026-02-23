<section class="pb-20 bg-stone-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-[3fr_2fr] gap-10 items-start">

            {{-- Contact Form --}}
            <div class="bg-white rounded-2xl border border-stone-100 p-8">
                <h2 class="text-xl font-bold text-stone-900 mb-1">Send a message</h2>
                <p class="text-sm text-stone-400 mb-7">We'll get back to you within a few hours during business days.</p>

                <form action="{{ route('contact.send') }}" method="POST" class="flex flex-col gap-5">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label for="name" class="text-xs font-semibold text-stone-600 uppercase tracking-widest">Your Name <span class="text-blue-500">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="Jane Smith"
                                class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-900 placeholder-stone-300 transition-colors focus:border-blue-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100"
                                value="{{ old('name') }}">
                            @error('name')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="company" class="text-xs font-semibold text-stone-600 uppercase tracking-widest">Company</label>
                            <input type="text" id="company" name="company" placeholder="Acme Contracting LLC"
                                class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-900 placeholder-stone-300 transition-colors focus:border-blue-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100"
                                value="{{ old('company') }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label for="email" class="text-xs font-semibold text-stone-600 uppercase tracking-widest">Email Address <span class="text-blue-500">*</span></label>
                            <input type="email" id="email" name="email" required placeholder="jane@yourcompany.com"
                                class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-900 placeholder-stone-300 transition-colors focus:border-blue-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100"
                                value="{{ old('email') }}">
                            @error('email')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="phone" class="text-xs font-semibold text-stone-600 uppercase tracking-widest">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="(305) 000-0000"
                                class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-900 placeholder-stone-300 transition-colors focus:border-blue-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100"
                                value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="service" class="text-xs font-semibold text-stone-600 uppercase tracking-widest">What are you interested in?</label>
                        <select id="service" name="service"
                            class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-900 transition-colors focus:border-blue-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 appearance-none">
                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service...</option>
                            <option value="it-support" {{ old('service') == 'it-support' ? 'selected' : '' }}>IT Support & Helpdesk</option>
                            <option value="network-security" {{ old('service') == 'network-security' ? 'selected' : '' }}>Network Security</option>
                            <option value="cloud-email" {{ old('service') == 'cloud-email' ? 'selected' : '' }}>Cloud & Email (M365 / Google Workspace)</option>
                            <option value="voip" {{ old('service') == 'voip' ? 'selected' : '' }}>VoIP Phone System</option>
                            <option value="custom-software" {{ old('service') == 'custom-software' ? 'selected' : '' }}>Custom Software Development</option>
                            <option value="web-apps" {{ old('service') == 'web-apps' ? 'selected' : '' }}>Web Applications & Portals</option>
                            <option value="dashboards" {{ old('service') == 'dashboards' ? 'selected' : '' }}>Dashboards & Reporting</option>
                            <option value="not-sure" {{ old('service') == 'not-sure' ? 'selected' : '' }}>Not sure yet — just exploring</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="message" class="text-xs font-semibold text-stone-600 uppercase tracking-widest">Message <span class="text-blue-500">*</span></label>
                        <textarea id="message" name="message" required rows="5" placeholder="Briefly describe your situation or what you need help with..."
                            class="w-full rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-900 placeholder-stone-300 transition-colors focus:border-blue-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-100 resize-none">{{ old('message') }}</textarea>
                        @error('message')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>

                    @if(session('success'))
                        <div class="rounded-xl bg-green-50 border border-green-100 px-4 py-3 text-sm text-green-700 font-medium">
                            ✓ {{ session('success') }}
                        </div>
                    @endif

                    <div class="flex items-center justify-between gap-4 pt-1">
                        <p class="text-xs text-stone-400">We respond within a few hours on business days.</p>
                        <button type="submit"
                            class="flex-shrink-0 px-6 py-2.5 rounded-xl font-semibold text-sm bg-stone-900 text-stone-50 hover:bg-blue-600 transition-colors">
                            Send message &rarr;
                        </button>
                    </div>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="flex flex-col gap-4">
                <div class="bg-white rounded-2xl border border-stone-100 p-6">
                    <h3 class="font-semibold text-stone-900 mb-4">Contact details</h3>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg width="14" height="14" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.5 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.4 1.35h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-stone-400 uppercase tracking-widest mb-0.5">Phone</p>
                                <a href="tel:+13055550000" class="text-sm font-semibold text-stone-900 hover:text-blue-600 transition-colors">(305) 555-0000</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg width="14" height="14" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-stone-400 uppercase tracking-widest mb-0.5">Email</p>
                                <a href="mailto:hello@codewize.com" class="text-sm font-semibold text-stone-900 hover:text-blue-600 transition-colors">hello@codewize.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg width="14" height="14" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-stone-400 uppercase tracking-widest mb-0.5">Response time</p>
                                <p class="text-sm font-semibold text-stone-900">Within a few hours</p>
                                <p class="text-xs text-stone-400">Monday – Friday, 9am – 6pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-stone-100 p-6">
                    <h3 class="font-semibold text-stone-900 mb-4">What happens next</h3>
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">1</div>
                            <p class="text-sm text-stone-500 leading-relaxed">We'll review your message and reach out within a few hours to schedule a call.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">2</div>
                            <p class="text-sm text-stone-500 leading-relaxed">On the call, we'll walk through your current setup and understand what you actually need.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">3</div>
                            <p class="text-sm text-stone-500 leading-relaxed">If it's a fit, you'll get a clear proposal — flat rate, no surprises.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-stone-900 rounded-2xl p-6">
                    <p class="text-xs font-bold uppercase tracking-widest text-stone-400 mb-3">Serving</p>
                    <p class="text-sm font-semibold text-white mb-1">Miami-Dade County &amp; South Broward</p>
                    <p class="text-xs text-stone-400 leading-relaxed">On-site support available throughout the area. Remote support available anywhere.</p>
                </div>
            </div>
        </div>
    </div>
</section>
