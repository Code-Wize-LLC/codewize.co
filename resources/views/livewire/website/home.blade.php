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

    <div class="relative overflow-hidden px-4 sm:px-6 py-4 max-w-full mx-auto aspect-square lg:aspect-[2/1] flex items-center justify-center">
        <!-- Background video -->
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover grayscale">
            <source src="https://videos.pexels.com/video-files/3130284/3130284-uhd_2560_1440_30fps.mp4" type="video/mp4"/>
        </video>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/80 z-15"></div>

        <!-- Foreground content -->
        <div class="z-20 text-white text-center">
            <div class="prose prose-invert max-w-full">
                <h1>{{ __("We Keep Your Business Running Smooth, Secure, and Smart") }}</h1>
                <h2>{{ __("IT Consulting • Custom Software • KPI Dashboards") }}</h2>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose prose-invert">
        <h2 class="border-l-6 border-indigo-600 ps-1.5">How We Help Businesses Thrive</h2>
        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2 sm:col-span-1">
                <ul class="space-y-4 text-lg leading-relaxed list-disc pl-6">
                    <li><strong>Focus on growth —</strong> we manage your IT so you can run your business without distractions.</li>
                    <li><strong>Make smarter decisions —</strong> our custom dashboards turn your data into real-time insights.</li>
                    <li><strong>Streamline your workflows —</strong> with software built around <strong>you</strong>, not the other way around.</li>
                    <li><strong>Stop tech chaos —</strong> we unify your infrastructure, support, and systems into one smooth operation.</li>
                </ul>
            </div>
            <div class="col-span-2 sm:col-span-1">
                
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-12 sm:py-24 max-w-screen-2xl mx-auto prose prose-invert">
        <h2 class="border-l-6 border-indigo-600 ps-1.5">What we deliver</h2>
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
