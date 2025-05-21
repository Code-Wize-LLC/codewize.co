<div>
    <div class="relative overflow-hidden px-4 sm:px-6 py-4 max-w-full mx-auto aspect-[9/12] lg:aspect-[2/1] flex items-center justify-center">
        <!-- Background video -->
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover grayscale">
            <source src="https://videos.pexels.com/video-files/3130284/3130284-uhd_2560_1440_30fps.mp4" type="video/mp4"/>
        </video>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-white/80 dark:bg-black/60 backdrop-blur-sm z-15"></div>

        <!-- Foreground content -->
        <div class="z-20 text-center">
            <div class="prose prose-sm md:prose-base dark:prose-invert max-w-full">
                <h1>{{ __("We Keep Your Business Running Smooth, Secure, and Smart") }}</h1>
                <h2>{{ __("IT Consulting • Custom Software • KPI Dashboards") }}</h2>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 max-w-screen-2xl mx-auto w-full prose dark:prose-invert text-center">
        <h2>Trusted by South Florida Professionals</h2>
        <div class="grid justify-center grid-cols-2 gap-8 text-zinc-400 md:grid-cols-3">
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

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose dark:prose-invert">
        <p class="text-center">
            {{ __("You’ve got a business to run — you shouldn’t have to fight your tech. At Codewize, we help growing companies turn technology into an advantage. Whether it’s outdated systems, scattered software, or slow support, we step in with smart, scalable solutions. From secure cloud setups to custom dashboards and business apps, we design tech that works the way you work — faster, safer, and smarter. This isn’t just support. It’s strategy.") }}
        </p>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose dark:prose-invert">
        <h2 class="text-center">What we deliver</h2>
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-1">
                <h4>Modern IT Solutions</h4>
                <ul class="space-y-2">
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
                <h4>Custom Software Development</h4>
                <ul class="space-y-2">
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
                <h4>KPI Dashboards & Business Intelligence</h4>
                <ul class="space-y-2">
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
