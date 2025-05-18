<div>
    <div class="px-4 sm:px-6 py-4 max-w-screen-2xl mx-auto">
        <div class="flex items-center justify-between">
            <flux:tooltip content="code wize">
                <a href="{{ route('home') }}" alt="code wize" class="font-medium">
                    {{ __('</wize>') }}
                </a>
            </flux:tooltip>

            <div class="text-sm flex items-center gap-1">
                <a href="{{ route('about') }}" wire:navigate class="px-3 h-8 flex items-center hover:bg-indigo-500 transition-all">about</a>
                <a href="{{ route('services') }}" wire:navigate class="px-3 h-8 flex items-center hover:bg-indigo-500 transition-all">services</a>
                <a href="{{ route('contact') }}" wire:navigate class="px-3 h-8 flex items-center hover:bg-indigo-500 transition-all">contact</a>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden px-4 sm:px-6 py-4 max-w-full mx-auto aspect-[9/12] lg:aspect-[2/1] flex items-center justify-center">
        <!-- Background video -->
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover grayscale">
            <source src="https://videos.pexels.com/video-files/3130284/3130284-uhd_2560_1440_30fps.mp4" type="video/mp4"/>
        </video>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/80 z-15"></div>

        <!-- Foreground content -->
        <div class="z-20 text-white text-center">
            <div class="prose prose-sm md:prose-base prose-invert max-w-full">
                <h1>{{ __("We Keep Your Business Running Smooth, Secure, and Smart") }}</h1>
                <h2>{{ __("IT Consulting • Custom Software • KPI Dashboards") }}</h2>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto w-full prose prose-invert text-center">
        <h2>Trusted by South Florida Professionals</h2>
        <div class="grid justify-center grid-cols-2 gap-8 text-zinc-400 sm:gap-12 md:grid-cols-3">
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/mjacctaxdotcom.png') }}" alt="MJ Accounting Logo" class="sm:h-20 object-fill grayscale hover:grayscale-0 transition-all">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/sosmetaxservices.svg') }}" alt="SosME Logo" class="sm:h-20 object-fill grayscale hover:grayscale-0 transition-all">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/tpbs.webp') }}" alt="TPBS Logo" class="sm:h-20 object-fill grayscale hover:grayscale-0 transition-all opacity-75 hover:opacity-100">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/atease.webp') }}" alt="At Ease Logo" class="sm:h-20 object-fill grayscale hover:grayscale-0 transition-all">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/equitable.png') }}" alt="At Ease Logo" class="sm:h-20 object-fill grayscale hover:grayscale-0 transition-all">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="{{ asset('logos/mjd.png') }}" alt="At Ease Logo" class="sm:h-20 object-fill grayscale hover:grayscale-0 transition-all">
            </a>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose prose-invert">
        <p class="text-center">
            {{ __("You’ve got a business to run — and the last thing you need is unreliable tech, scattered systems, or slow support. At Codewize, we help growing companies turn technology into an advantage. Whether you're struggling with aging infrastructure, overwhelmed by patchwork software, or simply tired of IT that holds you back, we step in with modern, maintainable solutions. From secure cloud setups to custom-built dashboards and business apps, we design systems that work the way *you* work — faster, safer, and smarter. It's not just support. It's strategy. Let’s simplify your tech, so you can scale your business with confidence.") }}
        </p>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose prose-invert">
        <h2>What we deliver</h2>
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-1">
                <h3>Modern IT Solutions</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Cloud Server Setup, Management & Monitoring</li>
                    <li>VoIP Phone System Setup & Support</li>
                    <li>Secure Network Design, Firewall Configuration & Maintenance</li>
                    <li>Data Backup Solutions (Local, Cloud & Hybrid)</li>
                    <li>24/7 Remote Help Desk & On-Site Tech Support</li>
                    <li>Hardware Procurement & Installation</li>
                    <li>Compliance Assistance (e.g. HIPAA, SOC 2)</li>
                </ul>

            </div>
            <div class="col-span-3 sm:col-span-1">
                <h3>Custom Software Development</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Website Design & Development</li>
                    <li>SEO Management & Optimization</li>
                    <li>Custom Web Application Development</li>
                    <li>Website Hosting & Domain Management</li>
                    <li>Performance Optimization & Core Web Vitals</li>
                    <li>Mobile Optimization & Responsive Design</li>
                    <li>Analytics & Conversion Tracking</li>
                </ul>

            </div>
            <div class="col-span-3 sm:col-span-1">
                <h3>KPI Dashboards & Business Intelligence</h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Real-Time Metrics & Performance Dashboards</li>
                    <li>Custom Reporting Systems</li>
                    <li>Integration with Popular CRMs, ERPs, and Financial Platforms</li>
                    <li>Custom API Development & Integration</li>
                    <li>Data Migration & Synchronization</li>
                    <li>KPI & Goal Tracking Systems</li>
                    <li>Data Cleaning, Structuring & Enrichment</li>
                </ul>
            </div>
        </div>

        <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose prose-invert">
            <h2 class="border-l-6 border-indigo-600 ps-1.5"></h2>
            <div class="grid grid-cols-3 gap-6">
            </div>
        </div>
    </div>
</div>
