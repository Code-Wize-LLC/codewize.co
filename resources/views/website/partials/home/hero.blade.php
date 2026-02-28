<section class="bg-stone-50 pt-28 pb-4">
    <div class="mx-auto max-w-6xl px-6">
        <div class="grid grid-cols-1 items-center gap-14 md:grid-cols-2">
            <div class="pt-6">
                <span class="badge-blue"><flux:icon.dot-blue />Miami-Dade &amp; South Broward</span>
                <h1 class="font-display mt-5 mb-6 text-5xl leading-tight font-bold tracking-tight text-stone-900 md:text-6xl">
                    <div>Seamless IT & Custom Software Solutions</div>
                    <span class="font-normal text-blue-600 italic">One partner. Complete control.</span>
                </h1>
                <p class="mb-8 max-w-lg leading-relaxed text-stone-500">Code Wize handles IT support for small and medium-sized organizations across Miami-Dade and South Broward - and builds the custom software your business needs when the generic tools stop working.</p>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('it-support') }}" class="btn-primary">
                        Get IT Support &rarr;
                    </a>
                    <a href="{{ route('custom-software') }}" class="btn-secondary">
                        See the software side <span>&rarr;</span>
                    </a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-stone-200 h-64 md:h-full">
                <img src="{{ asset('web/pexels-fotios-photos-16129705.jpg') }}" alt="IT support consultation" class="h-full w-full object-cover" />
                <div class="absolute inset-0 bg-linear-to-t from-stone-900/40 to-transparent"></div>
                <div class="absolute right-5 bottom-5 left-5">
                    <div class="flex items-center gap-3 rounded-xl bg-stone-50/95 p-4 backdrop-blur-md">
                        <flux:avatar icon="check" iconVariant="micro" size="md" circle color="blue" />
                        <div>
                            <p class="text-sm font-semibold text-stone-900">Available same day in Miami-Dade</p>
                            <p class="text-xs text-stone-500">On-site &amp; remote support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 grid grid-cols-2 overflow-hidden rounded-2xl border border-stone-100 md:grid-cols-4">
            <div class="border-r border-stone-100 bg-white px-6 py-7">
                <p class="text-4xl font-bold text-stone-900">10+</p>
                <p class="mt-1 text-xs font-medium text-stone-400">Years in Miami</p>
            </div>
            <div class="border-r border-stone-100 bg-white px-6 py-7">
                <p class="text-4xl font-bold text-stone-900">50+</p>
                <p class="mt-1 text-xs font-medium text-stone-400">Projects delivered</p>
            </div>
            <div class="border-r border-stone-100 bg-white px-6 py-7">
                <p class="text-4xl font-bold text-stone-900">24/7</p>
                <p class="mt-1 text-xs font-medium text-stone-400">Monitoring</p>
            </div>
            <div class="bg-white px-6 py-7">
                <p class="text-4xl font-bold text-stone-900">Fast</p>
                <p class="mt-1 text-xs font-medium text-stone-400">Response times</p>
            </div>
        </div>
    </div>
</section>
