<section class="bg-stone-50 pt-28 pb-4">
    <div class="mx-auto max-w-6xl px-6">
        <div class="grid grid-cols-1 items-start gap-14 md:grid-cols-2">
            <div class="pt-6">
                <span class="badge-blue">
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>Miami-Dade &amp; South Broward</span>
                <h1
                    class="font-display mt-5 mb-6 text-5xl leading-tight font-bold tracking-tight text-stone-900 md:text-6xl">
                    Seamless IT & <br />Custom Software Solutions<br />
                    <span class="font-normal text-blue-600 italic">One partner. Complete control.</span>
                </h1>
                <p class="mb-8 max-w-lg text-lg leading-relaxed text-stone-500">Code Wize handles IT support for
                    contractors, accountants, and insurance offices across Miami-Dade and South Broward — and builds the
                    custom software your business needs when the generic tools stop working.</p>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('it-support') }}"
                        class="rounded-xl bg-stone-900 px-6 py-2.5 text-sm font-semibold text-stone-50 transition-colors hover:bg-blue-600">
                        Get IT Support &rarr; </a>
                    <a href="{{ route('custom-software') }}"
                        class="flex items-center gap-1 text-sm font-semibold text-stone-500 transition-colors hover:text-stone-900">
                        See the software side <span>&rarr;</span> </a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-stone-200" style="height:420px;">
                <img src="{{ asset('images/hero.jpg') }}" alt="IT support consultation"
                    class="h-full w-full object-cover" />
                <div class="absolute inset-0 bg-linear-to-t from-stone-900/40 to-transparent"></div>
                <div class="absolute right-5 bottom-5 left-5">
                    <div class="flex items-center gap-3 rounded-xl bg-stone-50/95 p-4 backdrop-blur-md">
                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600">
                            <svg width="14" height="14" fill="none" stroke="white" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
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
