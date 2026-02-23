<section class="pt-28 pb-16 bg-stone-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div>
                <nav class="flex items-center gap-2 text-sm text-stone-400 mb-5"><a href="{{ route('home') }}"
                        class="hover:text-stone-600 transition-colors">Home</a><span>/</span><span
                        class="text-stone-600">IT Support</span></nav><span
                    class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span
                        class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>IT Support &amp; Helpdesk</span>
                <h1 class="mt-4 text-4xl md:text-5xl font-display font-bold text-stone-900 tracking-tight leading-tight mb-5">
                  Managed IT Support & Helpdesk Services<br><span class="text-blue-600 font-normal italic">Fast response. Zero downtime.</span>
                </h1>
                <p class="text-base text-stone-500 leading-relaxed max-w-md mb-8">Remote and on-site support throughout
                    Miami-Dade and South Broward. One monthly rate covers everything — no hourly charges, no surprise
                    invoices, no ticketing queues.</p>
                <div class="flex flex-wrap gap-3 items-center"><a href="{{ route('contact') }}"
                        class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-stone-900 text-stone-50 hover:bg-blue-600 transition-colors">Get
                        IT Support &rarr;</a><a href="{{ route('home') }}"
                        class="px-5 py-2.5 rounded-xl font-semibold text-sm border border-stone-200 text-stone-700 hover:border-stone-400 transition-colors">See
                        all IT services</a></div>
            </div>
            <div class="rounded-2xl overflow-hidden bg-stone-200" style="height:380px;"><img
                    src="{{ asset('images/hero.jpg') }}" alt="" class="w-full h-full object-cover"></div>
        </div>
    </div>
</section>
