<section class="pb-20 bg-mist-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-[3fr_2fr] gap-10 items-start">

            {{-- Contact Form --}}
            <div class="bg-white rounded-2xl border border-mist-100 p-8">
                <h2 class="text-xl font-bold text-mist-900 mb-1">Send a message</h2>
                <p class="text-sm text-mist-400 mb-7">We'll get back to you within a few hours during business days.</p>

                <form action="" method="POST" class="flex flex-col gap-5">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label for="name" class="form-label">Your Name <span class="text-blue-500">*</span></label>
                            <input type="text" id="name" name="name" required placeholder="Jane Smith" class="form-input" value="{{ old('name') }}">
                            @error('name')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" id="company" name="company" placeholder="Acme Contracting LLC" class="form-input" value="{{ old('company') }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1.5">
                            <label for="email" class="form-label">Email Address <span class="text-blue-500">*</span></label>
                            <input type="email" id="email" name="email" required placeholder="jane@yourcompany.com" class="form-input" value="{{ old('email') }}">
                            @error('email')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="(305) 000-0000" class="form-input" value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="service" class="form-label">What are you interested in?</label>
                        <select id="service" name="service" class="form-select">
                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service...</option>
                            <option value="it-support" {{ old('service') == 'it-support' ? 'selected' : '' }}>IT Support & Helpdesk</option>
                            <option value="network-security" {{ old('service') == 'network-security' ? 'selected' : '' }}>Network Security</option>
                            <option value="cloud-email" {{ old('service') == 'cloud-email' ? 'selected' : '' }}>Cloud & Email (M365 / Google Workspace)</option>
                            <option value="voip" {{ old('service') == 'voip' ? 'selected' : '' }}>VoIP Phone System</option>
                            <option value="custom-software" {{ old('service') == 'custom-software' ? 'selected' : '' }}>Custom Software Development</option>
                            <option value="web-apps" {{ old('service') == 'web-apps' ? 'selected' : '' }}>Web Applications & Portals</option>
                            <option value="dashboards" {{ old('service') == 'dashboards' ? 'selected' : '' }}>Dashboards & Reporting</option>
                            <option value="not-sure" {{ old('service') == 'not-sure' ? 'selected' : '' }}>Not sure yet - just exploring</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="message" class="form-label">Message <span class="text-blue-500">*</span></label>
                        <textarea id="message" name="message" required rows="5" placeholder="Briefly describe your situation or what you need help with..." class="form-input resize-none">{{ old('message') }}</textarea>
                        @error('message')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>

                    @if(session('success'))
                        <div class="rounded-xl bg-green-50 border border-green-100 px-4 py-3 text-sm text-green-700 font-medium">
                            ✓ {{ session('success') }}
                        </div>
                    @endif

                    <div class="flex items-center justify-between gap-4 pt-1">
                        <p class="text-xs text-mist-400">We respond within a few hours on business days.</p>
                        <button type="submit" class="btn-primary">
                            Send message &rarr;
                        </button>
                    </div>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="flex flex-col gap-4">
                <div class="bg-white rounded-2xl border border-mist-100 p-6">
                    <h3 class="font-semibold text-mist-900 mb-4">Contact details</h3>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-start gap-3">
                            <div class="icon-wrapper">
                                <flux:icon.phone variant="mini" color="#155dfc" />
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-mist-400 uppercase tracking-widest mb-0.5">Phone</p>
                                <a href="tel:+17543649364" class="text-sm font-semibold text-mist-900 hover:text-blue-600 transition-colors">(754) 364-9364</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="icon-wrapper">
                                <flux:icon.clock variant="mini" color="#155dfc" />
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-mist-400 uppercase tracking-widest mb-0.5">Response time</p>
                                <p class="text-sm font-semibold text-mist-900">Within a few hours</p>
                                <p class="text-xs text-mist-400">Monday – Friday, 9am – 6pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-mist-100 p-6">
                    <h3 class="font-semibold text-mist-900 mb-4">What happens next</h3>
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">1</div>
                            <p class="text-sm text-mist-500 leading-relaxed">We'll review your message and reach out within a few hours to schedule a call.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">2</div>
                            <p class="text-sm text-mist-500 leading-relaxed">On the call, we'll walk through your current setup and understand what you actually need.</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">3</div>
                            <p class="text-sm text-mist-500 leading-relaxed">If it's a fit, you'll get a clear proposal - flat rate, no surprises.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-mist-900 rounded-2xl p-6">
                    <p class="text-xs font-bold uppercase tracking-widest text-mist-400 mb-3">Serving</p>
                    <p class="text-sm font-semibold text-white mb-1">Miami-Dade County &amp; South Broward</p>
                    <p class="text-xs text-mist-400 leading-relaxed">On-site support available throughout the area. Remote support available anywhere.</p>
                </div>
            </div>
        </div>
    </div>
</section>
