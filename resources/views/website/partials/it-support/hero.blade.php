<section class="pt-28 pb-16 bg-mist-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div>
                <nav class="flex items-center gap-2 text-sm text-mist-400 mb-5">
                    <a href="{{ route('home') }}" class="hover:text-mist-600 transition-colors">Home</a>
                    <span>/</span>
                    <span class="text-mist-600">IT Support</span>
                </nav>
                <span class="badge-blue"><flux:icon.dot-blue />IT Support &amp; Helpdesk</span>
                <h1 class="mt-4 text-4xl md:text-5xl font-display font-bold text-mist-900 tracking-tight leading-tight mb-5">
                  Managed IT Support & Helpdesk Services<br><span class="text-blue-600 font-normal italic">Fast response. Zero downtime.</span>
                </h1>
                <p class="text-base text-mist-500 leading-relaxed max-w-md mb-8">
                    Remote and on-site support throughout Miami-Dade and South Broward. One monthly rate covers everything - no hourly charges, no surprise invoices, no ticketing queues.
                </p>
                <div class="flex flex-wrap gap-3 items-center">
                    <a href="{{ route('contact') }}" class="btn-primary">Get IT Support &rarr;</a>
                    <a href="{{ route('home') }}" class="btn-secondary">See all IT services</a>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden bg-mist-200 h-64 md:h-100">
                <img src="{{ asset('web/arlington-research-Kz8nHVg_tGI-unsplash.webp') }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>
