<div>
    <div class="relative overflow-hidden px-4 sm:px-6 py-4 max-w-full mx-auto aspect-[9/12] lg:aspect-[2/1] flex items-center justify-center">
        <!-- Background video -->
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover grayscale">
            <source src="https://videos.pexels.com/video-files/3130284/3130284-uhd_2560_1440_30fps.mp4" type="video/mp4"/>
        </video>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-accent-content/80 via-accent-content-50/90 to-zinc-50 backdrop-blur-xs z-15"></div>

        <!-- Foreground content -->
        <div class="z-20 text-center">
            <div class="max-w-full">
                <h1 class="text-2xl font-bold md:text-6xl md:font-extrabold">{{ __("Smart. Secure. Seamless IT.") }}</h1>
                <h2 class="mt-3 md:text-xl">{{ __("We help small businesses run better with reliable IT, custom software, and clear data insights.") }}</h2>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 max-w-7xl mx-auto w-full prose text-center">
        <h2>Trusted by South Florida Professionals</h2>
        <div class="grid justify-center grid-cols-2 gap-8 text-zinc-400 md:grid-cols-3">
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/mjacctaxdotcom.png') }}" alt="MJ Accounting Logo" class="sm:h-20 object-fill">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/sosmetaxservices.svg') }}" alt="SosME Logo" class="sm:h-20 object-fill">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/equitable.png') }}" alt="At Ease Logo" class="sm:h-20 object-fill">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/atease.webp') }}" alt="At Ease Logo" class="sm:h-20 object-fill">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/tpbs-dark.png') }}" alt="TPBS Logo" class="sm:h-20 object-fill">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/mjd.png') }}" alt="At Ease Logo" class="sm:h-20 object-fill">
            </a>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-7xl mx-auto prose">
        <h2 class="text-center">Why Code Wize?</h2>

        <p class="text-center">
            {{ __("At Codewize, we help growing companies turn technology into an advantage. Whether it’s outdated systems, scattered software, or slow support, we step in with smart, scalable solutions. From secure cloud setups to custom dashboards and business apps, we design tech that works the way you work — faster, safer, and smarter. This isn’t just support. It’s strategy.") }}
        </p>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:pt-24 max-w-7xl mx-auto">
        <div class="max-w-full prose">
            <h2 class="text-center">What We Deliver</h2>
            <div class="grid grid-cols-2 gap-4 items-center sm:border-l sm:border-accent/10">
                <div class="col-span-2 sm:col-span-1 ps-4">
                    <h3>Managed IT Services That Just Work</h3>
                    <p><span class="!text-accent font-medium">Stay secure, connected, and supported—around the clock.</span></p>
                    <p>We handle everything from secure cloud servers to VoIP systems, firewall setup, and 24/7 tech support. Whether you're growing fast or need to tighten up compliance, we’ll keep your systems running smoothly and your team focused on work, not tech headaches.</p>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <img src="{{ asset('web/pexels-mikhail-nilov-9242928.jpg') }}" alt="" class="rounded-[10px]">
                </div>
    
                <div class="hidden sm:block col-span-2 w-8 border-t -ms-4 border-accent/10"></div>
    
                <div class="col-span-2 sm:col-span-1 ps-4">
                    <h3>Custom Software That Fits Like a Glove</h3>
                    <p><span class="!text-accent font-medium">No more bending your business to fit your tools.</span></p>
                    <p>From elegant websites to robust web apps, we design and build software tailored to your workflow. With speed, security, and SEO built-in, you’ll get a digital experience that looks great and performs even better—on any device.</p>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <img src="{{ asset('web/pexels-rsantos1232-3888151.jpg') }}" alt="" class="rounded-[10px]">
                </div>
    
                <div class="hidden sm:block col-span-2 w-8 border-t -ms-4 border-accent/10"></div>
    
                <div class="col-span-2 sm:col-span-1 ps-4">
                    <h3>Business Dashboards You’ll Actually Use</h3>
                    <p><span class="!text-accent font-medium">Make smarter decisions with real-time insights.</span></p>
                    <p> We turn your raw data into beautiful, interactive dashboards. Track KPIs, generate custom reports, and connect all your systems—from QuickBooks to CRMs—to get the full picture in one place.</p>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <img src="{{ asset('web/pexels-asphotograpy-106344.jpg') }}" alt="" class="rounded-[10px]">
                </div>
    
                <div class="hidden sm:block col-span-2 w-8 border-t -ms-4 border-accent/10"></div>
    
                <div class="col-span-2 sm:col-span-1 ps-4">
                    <h3>Web Presence That Builds Trust & Converts</h3>
                    <p><span class="!text-accent font-medium">Your website is your first impression—make it count.</span></p>
                    <p> Our sites are fast, mobile-friendly, and optimized for search. From design and hosting to analytics and performance tuning, we make sure your digital presence not only looks good but drives results.</p>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <img src="{{ asset('web/igor-miske-JVSgcV8_vb4-unsplash.jpg') }}" alt="" class="rounded-[10px]">
                </div>
    
                <div class="hidden sm:block col-span-2 w-8 border-t -ms-4 border-accent/10"></div>
    
                <div class="col-span-2 sm:col-span-1 ps-4">
                    <h3>Compliance & Continuity You Can Count On</h3>
                    <p><span class="!text-accent font-medium">Stay protected, prepared, and ahead of the curve.</span></p>
                    <p> We help businesses meet strict industry standards like HIPAA and SOC 2, with robust backup strategies and proactive network protection. Whether it's securing sensitive data or planning for the unexpected, we've got your back.</p>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <img src="{{ asset('web/scott-rodgerson-PSpf_XgOM5w-unsplash.jpg') }}" alt="" class="rounded-[10px]">
                </div>
            </div>
        </div>

        <div class="mt-12 sm:mt-24 border-l border-r border-accent/30 py-4">
            <div class="border-t -mx-4 border-accent/30"></div>
            <div class="py-6 text-center">
                <div class="text-2xl md:text-3xl font-bold">Ready to Simplify Your Tech and Focus on What Matters?</div>
                <div class="mt-3">Let’s talk about how Code Wize can support your business with smarter IT, custom software, and data you can trust.</div>
                <flux:button href="{{ route('contact') }}" variant="primary" class="mt-4">
                    Get a Free Consultation
                </flux:button>
            </div>
            <div class="border-t -mx-4 border-accent/30"></div>
        </div>
    </div>
</div>
