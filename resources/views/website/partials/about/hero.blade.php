<section class="pt-28 pb-16 bg-mist-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div>
                <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5">
                    <a href="{{ route('home') }}" class="hover:text-mist-600 transition-colors">Home</a>
                    <span>/</span>
                    <span class="text-mist-600">About</span>
                </nav>
                <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><flux:icon.dot-blue />About Code Wize</span>
                <h1 class="mt-4 text-4xl md:text-5xl font-bold font-display text-mist-900 tracking-tight leading-tight mb-5">
                    Miami's IT partner for<br> businesses that run on trust.
                    <br><span class="text-blue-600 italic font-normal">Built here. Focused here.</span>
                </h1>
                <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">Code Wize is a Miami-based technology company that handles IT support and builds custom software for contractors, accountants, and insurance offices across Miami-Dade and South Broward. We've been doing this for over a decade - and we only work in our lane.</p>
                <div class="flex flex-wrap gap-3 items-center">
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-mist-900 text-mist-50 hover:bg-blue-600 transition-colors">Get in touch &rarr;</a>
                    <a href="{{ route('services') }}" class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-mist-200 text-mist-700 hover:border-mist-400 transition-colors">See our services</a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-mist-200" style="height:380px;">
                <img src="{{ asset('web/austin-distel-mpN7xjKQ_Ns-unsplash.webp') }}" alt="Code Wize team" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-mist-900/50 to-transparent"></div>
                <div class="absolute bottom-5 left-5 right-5">
                    <div class="grid grid-cols-3 gap-3">
                        <div class="bg-mist-50/95 backdrop-blur-md rounded-xl px-4 py-3 text-center">
                            <p class="text-xl font-bold text-mist-900">10+</p>
                            <p class="text-xs text-mist-500">Years in Miami</p>
                        </div>
                        <div class="bg-mist-50/95 backdrop-blur-md rounded-xl px-4 py-3 text-center">
                            <p class="text-xl font-bold text-mist-900">50+</p>
                            <p class="text-xs text-mist-500">Businesses served</p>
                        </div>
                        <div class="bg-mist-50/95 backdrop-blur-md rounded-xl px-4 py-3 text-center">
                            <p class="text-xl font-bold text-mist-900">3</p>
                            <p class="text-xs text-mist-500">Industries focused</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
