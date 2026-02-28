<section id="faq" class="bg-stone-50 py-20">
  <div class="mx-auto max-w-6xl px-6">
    <div class="grid grid-cols-1 gap-14 md:grid-cols-[2fr_3fr]">
      <div>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-3 py-1 text-xs font-bold tracking-widest text-blue-700 uppercase"><flux:icon.dot-blue />FAQ</span>
        <h2 class="mt-4 mb-3 text-3xl font-bold tracking-tight text-stone-900 md:text-4xl">Common questions</h2>
        <p class="text-sm text-stone-500">Something else? <a href="{{ route('contact') }}" class="font-semibold text-blue-600 hover:underline">Reach out &rarr;</a></p>
      </div>
      <div class="flex flex-col gap-2" x-data>
        <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-stone-100 bg-white">
          <button class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-stone-900 transition-colors hover:bg-stone-50" @click="open = !open" :aria-expanded="open.toString()"><span>What areas do you cover for on-site support?</span><span class="shrink-0 text-xl leading-none text-blue-600 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button>
          <div x-show="open" x-cloak x-transition class="border-t border-stone-100 px-5 pt-1 pb-4 text-sm leading-relaxed text-stone-500">Code Wize provides on-site support throughout Miami-Dade County and southern Broward — Hollywood, Miramar, Pembroke Pines, Hallandale Beach, Davie, Weston, and Cooper City. Remote support is available anywhere.</div>
        </div>
        <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-stone-100 bg-white">
          <button class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-stone-900 transition-colors hover:bg-stone-50" @click="open = !open" :aria-expanded="open.toString()"><span>What kinds of businesses do you work with?</span><span class="shrink-0 text-xl leading-none text-blue-600 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button>
          <div x-show="open" x-cloak x-transition class="border-t border-stone-100 px-5 pt-1 pb-4 text-sm leading-relaxed text-stone-500">Code Wize focuses on three verticals: contractor and construction offices, accounting and tax firms, and insurance agencies. This focus means deep familiarity with the workflows and tools specific to each industry.</div>
        </div>
        <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-stone-100 bg-white">
          <button class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-stone-900 transition-colors hover:bg-stone-50" @click="open = !open" :aria-expanded="open.toString()"><span>What does IT support cost?</span><span class="shrink-0 text-xl leading-none text-blue-600 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button>
          <div x-show="open" x-cloak x-transition class="border-t border-stone-100 px-5 pt-1 pb-4 text-sm leading-relaxed text-stone-500">IT support is priced as a flat monthly rate based on your number of devices and scope. No hourly charges for support calls, no surprise invoices. The scope is agreed upfront and stays consistent month to month.</div>
        </div>
        <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-stone-100 bg-white">
          <button class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-stone-900 transition-colors hover:bg-stone-50" @click="open = !open" :aria-expanded="open.toString()"><span>What does a software project cost?</span><span class="shrink-0 text-xl leading-none text-blue-600 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button>
          <div x-show="open" x-cloak x-transition class="border-t border-stone-100 px-5 pt-1 pb-4 text-sm leading-relaxed text-stone-500">After a free scoping call you receive a fixed-price proposal. Simple tools typically start around $3,000–$8,000. More complex applications vary. Pricing is always disclosed before work begins.</div>
        </div>
        <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-stone-100 bg-white">
          <button class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-stone-900 transition-colors hover:bg-stone-50" @click="open = !open" :aria-expanded="open.toString()"><span>Can we start with IT support and add software later?</span><span class="shrink-0 text-xl leading-none text-blue-600 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button>
          <div x-show="open" x-cloak x-transition class="border-t border-stone-100 px-5 pt-1 pb-4 text-sm leading-relaxed text-stone-500">That's the most common path. IT support is lower risk and immediately useful. Once the day-to-day is stable, custom software becomes much more targeted and effective.</div>
        </div>
        <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-stone-100 bg-white">
          <button class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left text-sm font-semibold text-stone-900 transition-colors hover:bg-stone-50" @click="open = !open" :aria-expanded="open.toString()"><span>Do you work with businesses outside your three industries?</span><span class="shrink-0 text-xl leading-none text-blue-600 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button>
          <div x-show="open" x-cloak x-transition class="border-t border-stone-100 px-5 pt-1 pb-4 text-sm leading-relaxed text-stone-500">Occasionally. Reach out — if it's a fit, that will be clear quickly.</div>
        </div>
      </div>
    </div>
  </div>
</section>
