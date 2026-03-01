<section class="bg-white py-20">
    <div class="mx-auto max-w-6xl px-6">
        <div class="relative overflow-hidden rounded-3xl">
            <!-- Background image layer -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('web/taylor-vick-M5tzZtFCOfs-unsplash.jpg') }}')"></div>
            <!-- Gradient + content layer sits on top -->
            <div class="relative px-8 py-16 text-center bg-linear-to-t from-mist-950 to-mist-950/60">
              <h2 class="mb-4 text-3xl leading-tight font-bold text-white md:text-4xl font-display">Let's build something that fits.</h2>
              <p class="mx-auto mb-8 max-w-md text-base leading-relaxed text-white">Free scoping call - describe what you need, and Code Wize will tell you what it would take.</p>
              <a href="{{ route('contact') }}" class="inline-block rounded-xl bg-white px-5 py-3 text-sm font-semibold text-mist-900 transition-colors hover:bg-blue-50 hover:text-blue-600">Book a free consultation &rarr;</a>
              <p class="mt-4 text-xs text-mist-100">Serving Miami-Dade &amp; South Broward &middot; Response within a few hours</p>
            </div>
        </div>
    </div>
</section>
