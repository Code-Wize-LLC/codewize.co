@extends('partials.website')
@section('content')
<section class="pt-28 pb-4 bg-stone-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-start">
      <div class="pt-6">
        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Miami-Dade &amp; South Broward</span>
        <h1 class="mt-5 text-5xl md:text-6xl font-bold font-display text-stone-900 tracking-tight leading-tight mb-6">
          Seamless IT & <br>Custom Software Solutions<br>
          <span class="text-blue-600 font-normal italic">One partner. Complete control.</span>
        </h1>
        <p class="text-lg text-stone-500 leading-relaxed max-w-lg mb-8">
          Code Wize handles IT support for contractors, accountants, and insurance offices across Miami-Dade and South Broward — and builds the custom software your business needs when the generic tools stop working.
        </p>
        <div class="flex flex-wrap gap-3 items-center">
          <a href="{{ route('it-support') }}"
             class="px-6 py-2.5 rounded-xl font-semibold text-sm bg-stone-900 text-stone-50 hover:bg-blue-600 transition-colors">
            Get IT Support &rarr;
          </a>
          <a href="{{ route('custom-software') }}"
             class="text-sm font-semibold text-stone-500 hover:text-stone-900 transition-colors flex items-center gap-1">
            See the software side <span>&rarr;</span>
          </a>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden bg-stone-200 relative" style="height:420px;">
        <img src="{{ asset('images/hero.jpg') }}" alt="IT support consultation" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-stone-900/40 to-transparent"></div>
        <div class="absolute bottom-5 left-5 right-5">
          <div class="bg-stone-50/95 backdrop-blur-md rounded-xl p-4 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0">
              <svg width="14" height="14" fill="none" stroke="white" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <p class="font-semibold text-sm text-stone-900">Available same day in Miami-Dade</p>
              <p class="text-xs text-stone-500">On-site &amp; remote support</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 mt-8 rounded-2xl overflow-hidden border border-stone-100">
      <div class="bg-white py-7 px-6 border-r border-stone-100"><p class="text-4xl font-bold text-stone-900">10+</p><p class="text-xs text-stone-400 mt-1 font-medium">Years in Miami</p></div>
      <div class="bg-white py-7 px-6 border-r border-stone-100"><p class="text-4xl font-bold text-stone-900">50+</p><p class="text-xs text-stone-400 mt-1 font-medium">Projects delivered</p></div>
      <div class="bg-white py-7 px-6 border-r border-stone-100"><p class="text-4xl font-bold text-stone-900">24/7</p><p class="text-xs text-stone-400 mt-1 font-medium">Monitoring</p></div>
      <div class="bg-white py-7 px-6"><p class="text-4xl font-bold text-stone-900">Fast</p><p class="text-xs text-stone-400 mt-1 font-medium">Response times</p></div>
    </div>
  </div>
</section>

<div class="bg-white border-y border-stone-100 py-4 mt-12 overflow-hidden"
     style="-webkit-mask:linear-gradient(90deg,transparent,black 10%,black 90%,transparent);">
  <p class="text-center text-xs font-bold uppercase tracking-widest text-stone-400 mb-3">Trusted by Miami-Dade &amp; South Broward businesses</p>
  <div id="tickerTrack" class="flex items-center w-max will-change-transform">
    <div class="ticker-set flex items-center gap-12 pr-12">
      <span class="font-semibold text-stone-500 text-sm whitespace-nowrap">MJ Accounting</span><span class="text-stone-300 text-xl">&middot;</span><span class="font-semibold text-stone-500 text-sm whitespace-nowrap">SosME Tax Services</span><span class="text-stone-300 text-xl">&middot;</span><span class="font-semibold text-stone-500 text-sm whitespace-nowrap">At Ease</span><span class="text-stone-300 text-xl">&middot;</span><span class="font-semibold text-stone-500 text-sm whitespace-nowrap">TPBS Group</span><span class="text-stone-300 text-xl">&middot;</span><span class="font-semibold text-stone-500 text-sm whitespace-nowrap">MJD Group</span><span class="text-stone-300 text-xl">&middot;</span><span class="font-semibold text-stone-500 text-sm whitespace-nowrap">At Ease Insurance</span><span class="text-stone-300 text-xl">&middot;</span>
    </div>
  </div>
</div>

<section class="py-20 bg-stone-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="relative rounded-2xl overflow-hidden mb-10 bg-stone-800" style="height:260px;">
      <img src="{{ asset('images/team.jpg') }}" alt="Team" class="w-full h-full object-cover object-center opacity-60">
      <div class="absolute inset-0 flex items-center px-10 md:px-14">
        <div class="max-w-md">
          <p class="text-xs font-bold uppercase tracking-widest text-white/60 mb-2">What Code Wize Does</p>
          <h2 class="text-3xl font-bold text-white leading-tight">Two things most IT companies don't offer together — we do.</h2>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 rounded-2xl overflow-hidden border border-stone-100">
      <div class="bg-white p-10 border-b md:border-b-0 md:border-r border-stone-100">
        <p class="text-6xl font-bold text-stone-100 mb-4 select-none leading-none">01</p>
        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>The foundation</span>
        <h3 class="mt-4 text-2xl font-bold text-stone-900 mb-3">IT Support &amp; Day-to-Day Tech</h3>
        <p class="text-sm text-stone-500 leading-relaxed mb-5">Computers, network, phones, cloud, backups — Code Wize keeps all of it running and handles issues fast. Flat monthly rate. Available when you need it.</p>
        <ul class="list-none flex flex-col gap-2"><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Remote &amp; on-site support across Miami-Dade and South Broward</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Microsoft 365 &amp; Google Workspace setup and management</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Network, WiFi, and firewall configuration</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>VoIP phone systems</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Automated backups &amp; recovery planning</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>24/7 monitoring and patch management</li></ul>
        <a href="{{ route('it-support') }}" class="inline-block mt-7 px-5 py-2.5 rounded-xl font-semibold text-sm bg-stone-900 text-stone-50 hover:bg-blue-600 transition-colors">Get IT support &rarr;</a>
      </div>
      <div class="bg-stone-50 p-10">
        <p class="text-6xl font-bold text-stone-200 mb-4 select-none leading-none">02</p>
        <span class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>The differentiator</span>
        <h3 class="mt-4 text-2xl font-bold text-stone-900 mb-3">Custom Software &amp; Web Apps</h3>
        <p class="text-sm text-stone-500 leading-relaxed mb-5">Most IT companies stop at support tickets. Code Wize also builds software — when the spreadsheets stop working or your workflow doesn't fit anything on the market.</p>
        <ul class="list-none flex flex-col gap-2"><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Client portals &amp; intake forms</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Job tracking &amp; project dashboards</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>QuickBooks &amp; CRM integrations</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Business websites with local SEO</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Automated workflows &amp; reporting</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Internal tools that save hours every week</li></ul>
        <a href="{{ route('custom-software') }}" class="inline-flex items-center gap-1 mt-7 text-sm font-semibold text-stone-500 hover:text-stone-900 transition-colors">See what's been built <span>&rarr;</span></a>
      </div>
    </div>
  </div>
</section>

<section id="it-services" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-start">
      <div>
        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>IT Support</span>
        <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-4">IT support for Miami offices that need things working — not almost working.</h2>
        <p class="text-base text-stone-500 leading-relaxed mb-5">Whether it's a crashed computer, a new employee who needs everything configured, or a network that's gotten sluggish — Code Wize handles it fast.</p>
        <div class="rounded-2xl bg-stone-50 border border-stone-100 p-5 mb-5">
          <p class="text-sm text-stone-500 leading-relaxed"><strong class="text-stone-900 font-semibold">What to expect:</strong> Fast response times, flat monthly pricing, and on-site availability throughout Miami-Dade and South Broward.</p>
        </div>
        <div class="rounded-2xl overflow-hidden bg-stone-200" style="height:200px;">
          <img src="{{ asset('images/cables.jpg') }}" alt="Network infrastructure" class="w-full h-full object-cover">
        </div>
      </div>
      <div class="flex flex-col gap-3"><div class="bg-white rounded-xl border border-stone-100 p-5 flex gap-4 items-start"><div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="17" height="17" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div><div><h4 class="font-semibold text-stone-900 text-sm mb-1">Computers & Devices</h4><p class="text-xs text-stone-500 leading-relaxed">Setup, repairs, upgrades, and management for Windows and Mac — keeping devices fast.</p></div></div><div class="bg-white rounded-xl border border-stone-100 p-5 flex gap-4 items-start"><div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="17" height="17" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div><div><h4 class="font-semibold text-stone-900 text-sm mb-1">Cloud & Email</h4><p class="text-xs text-stone-500 leading-relaxed">Microsoft 365 and Google Workspace — setup, migration, shared drives, and ongoing management.</p></div></div><div class="bg-white rounded-xl border border-stone-100 p-5 flex gap-4 items-start"><div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="17" height="17" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><h4 class="font-semibold text-stone-900 text-sm mb-1">Security & Backups</h4><p class="text-xs text-stone-500 leading-relaxed">Firewall, antivirus, and automated backups so hardware failure or ransomware doesn't derail the business.</p></div></div><div class="bg-white rounded-xl border border-stone-100 p-5 flex gap-4 items-start"><div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="17" height="17" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.5 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.4 1.35h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div><div><h4 class="font-semibold text-stone-900 text-sm mb-1">VoIP Phone Systems</h4><p class="text-xs text-stone-500 leading-relaxed">Modern phone systems that work from any device — desk, mobile, or laptop.</p></div></div><div class="bg-white rounded-xl border border-stone-100 p-5 flex gap-4 items-start"><div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="17" height="17" fill="none" stroke="#2563EB" stroke-width="2" viewBox="0 0 24 24"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-5.05"/></svg></div><div><h4 class="font-semibold text-stone-900 text-sm mb-1">New Employee Onboarding</h4><p class="text-xs text-stone-500 leading-relaxed">Computer ready, email configured, permissions set — so new hires can work on day one.</p></div></div></div>
    </div>
  </div>
</section>

<section id="software" class="py-20 bg-stone-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-start">
      <div>
        <span class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>Software Development</span>
        <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-4">When the spreadsheet stops being enough</h2>
        <p class="text-base text-stone-500 leading-relaxed mb-5">We build web applications and internal tools for Miami businesses — the kind that replace a process that was never designed to scale.</p>
        <div class="rounded-2xl overflow-hidden bg-stone-200 mb-5" style="height:220px;">
          <img src="{{ asset('images/monitor.jpg') }}" alt="Software development" class="w-full h-full object-cover">
        </div>
        <div class="flex flex-col gap-3"><div class="bg-stone-50 rounded-xl border border-stone-100 p-4"><p class="font-semibold text-sm text-stone-900 mb-1">🏗️ Contractor job tracker</p><p class="text-xs text-stone-500 leading-relaxed">Custom web app replacing 4 spreadsheets — tracks jobs, materials, subs, and sends automatic client updates.</p></div><div class="bg-stone-50 rounded-xl border border-stone-100 p-4"><p class="font-semibold text-sm text-stone-900 mb-1">📊 Accounting firm client portal</p><p class="text-xs text-stone-500 leading-relaxed">Secure document upload, e-signatures, and status tracking — saving 10+ hours per week in tax season.</p></div><div class="bg-stone-50 rounded-xl border border-stone-100 p-4"><p class="font-semibold text-sm text-stone-900 mb-1">🛡️ Insurance renewal dashboard</p><p class="text-xs text-stone-500 leading-relaxed">Live view of renewals and pipeline pulled from CRM and spreadsheets into one clean view.</p></div></div>
      </div>
      <div>
        <div class="rounded-2xl overflow-hidden bg-stone-200 mb-5" style="height:220px;">
          <img src="{{ asset('images/review.jpg') }}" alt="Code review" class="w-full h-full object-cover object-top">
        </div>
        <div class="bg-white rounded-2xl border border-stone-100 p-7">
          <h3 class="font-bold text-stone-900 text-xl mb-4">What Code Wize builds</h3>
          <ul class="list-none flex flex-col gap-2"><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Web applications &amp; internal business tools</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Client portals with file sharing &amp; e-signatures</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Dashboards connecting your existing software</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>QuickBooks, CRM &amp; third-party integrations</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Business websites with Miami-Dade local SEO</li><li class="flex items-start gap-2.5 text-sm text-stone-500 leading-relaxed"><span class="mt-0.5 w-4 h-4 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2 2 4-4" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Automated workflows — invoicing, follow-ups, alerts</li></ul>
          <div class="mt-5 pt-5 border-t border-stone-100">
            <p class="text-xs text-stone-400 mb-2 font-medium">How software projects are priced</p>
            <p class="text-sm text-stone-500 leading-relaxed">Fixed-price proposals after a free scoping call. No hourly billing. Simple tools start around $3,000–$8,000. Always disclosed upfront.</p>
          </div>
          <a href="{{ route('contact') }}" class="inline-block mt-5 px-5 py-2.5 rounded-xl font-semibold text-sm bg-stone-900 text-stone-50 hover:bg-blue-600 transition-colors">Talk through your idea &rarr;</a>
        </div>
      </div>
    </div>
    <div class="mt-10 rounded-2xl overflow-hidden bg-stone-200" style="height:220px;">
      <img src="{{ asset('images/multimon.jpg') }}" alt="Development setup" class="w-full h-full object-cover" style="object-position:center 45%;">
    </div>
  </div>
</section>

<section id="industries" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <div class="mb-10">
      <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Who We Work With</span>
      <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-3">Built for contractors, accountants, and insurance offices</h2>
      <p class="text-base text-stone-500 leading-relaxed max-w-lg">We work in three industries and know them well. That means less time explaining your business and more time fixing your problems.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5"><div class="bg-white rounded-2xl border border-stone-100 overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all duration-200"><div class="h-32 bg-stone-100 flex items-center justify-center text-5xl">🏗️</div><div class="p-6"><h3 class="font-bold text-stone-900 mb-2">Contractors &amp; Construction</h3><p class="text-sm text-stone-500 leading-relaxed mb-4">General contractors, specialty trades, and construction management across Miami-Dade.</p><ul class="list-none flex flex-col gap-1.5"><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Job tracking &amp; cost management</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Subcontractor document portals</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>IT support for office &amp; field</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Remote file access for job sites</li></ul></div></div><div class="bg-white rounded-2xl border border-stone-100 overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all duration-200"><div class="h-32 bg-blue-50 flex items-center justify-center text-5xl">🧾</div><div class="p-6"><h3 class="font-bold text-stone-900 mb-2">Accounting &amp; Tax Firms</h3><p class="text-sm text-stone-500 leading-relaxed mb-4">CPA firms, bookkeepers, and tax preparers in Miami-Dade and South Broward.</p><ul class="list-none flex flex-col gap-1.5"><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Secure client document portals</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>QuickBooks integration &amp; reports</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Encrypted cloud backups</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Remote-ready workstations</li></ul></div></div><div class="bg-white rounded-2xl border border-stone-100 overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all duration-200"><div class="h-32 bg-green-50 flex items-center justify-center text-5xl">🛡️</div><div class="p-6"><h3 class="font-bold text-stone-900 mb-2">Insurance Agencies &amp; Brokers</h3><p class="text-sm text-stone-500 leading-relaxed mb-4">Independent agencies who need organized client data and dependable systems.</p><ul class="list-none flex flex-col gap-1.5"><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Renewal tracking &amp; dashboards</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Client communication portals</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>CRM integrations &amp; automation</li><li class="text-xs text-stone-400 flex gap-1.5 items-start"><span class="text-blue-500 flex-shrink-0 mt-0.5">—</span>Network security for records</li></ul></div></div></div>
  </div>
</section>

<section id="locations" class="py-20 bg-stone-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="mb-10">
      <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Service Area</span>
      <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-3">On-site throughout Miami-Dade and South Broward.</h2>
      <p class="text-base text-stone-500 leading-relaxed max-w-lg">We stay in our lane geographically so we can actually be there when you need us — same day, not a support ticket and a 3-day wait.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
      <div class="bg-white rounded-2xl border border-stone-100 p-7">
        <h3 class="font-bold text-stone-900 mb-5">&#128205; Miami-Dade County</h3>
        <div class="grid grid-cols-2 gap-x-6 gap-y-2"><span class="text-sm text-stone-500">Miami (All Areas)</span><span class="text-sm text-stone-500">Coral Gables</span><span class="text-sm text-stone-500">Doral</span><span class="text-sm text-stone-500">Kendall</span><span class="text-sm text-stone-500">Hialeah</span><span class="text-sm text-stone-500">Miami Beach</span><span class="text-sm text-stone-500">Brickell / Downtown</span><span class="text-sm text-stone-500">Homestead</span><span class="text-sm text-stone-500">North Miami</span><span class="text-sm text-stone-500">Miami Lakes</span><span class="text-sm text-stone-500">Sweetwater</span><span class="text-sm text-stone-500">Cutler Bay</span></div>
      </div>
      <div class="bg-white rounded-2xl border border-stone-100 p-7">
        <h3 class="font-bold text-stone-900 mb-5">&#128205; South Broward County</h3>
        <div class="grid grid-cols-2 gap-x-6 gap-y-2"><span class="text-sm text-stone-500">Hollywood</span><span class="text-sm text-stone-500">Miramar</span><span class="text-sm text-stone-500">Pembroke Pines</span><span class="text-sm text-stone-500">Hallandale Beach</span><span class="text-sm text-stone-500">Davie</span><span class="text-sm text-stone-500">Cooper City</span><span class="text-sm text-stone-500">Weston</span><span class="text-sm text-stone-500">Southwest Ranches</span></div>
        <p class="text-xs text-stone-400 mt-5 italic">Remote-only support available outside this area.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <div class="mb-10">
      <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>Client Feedback</span>
      <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight">What clients say</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5"><blockquote class="bg-white rounded-2xl border border-stone-100 p-6 m-0"><div class="text-amber-400 text-xs mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="text-sm text-stone-500 leading-relaxed italic mb-5">"Before Code Wize, managing our tech meant calling different vendors for every problem. Now everything's handled in one place by someone who already knows our setup."</p><div class="flex items-center gap-3 pt-4 border-t border-stone-100"><div class="w-9 h-9 rounded-full bg-blue-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">MJ</div><div><p class="text-sm font-semibold text-stone-900">MJ Accounting</p><p class="text-xs text-stone-400">Miami, FL · Accounting Firm</p></div></div></blockquote><blockquote class="bg-white rounded-2xl border border-stone-100 p-6 m-0"><div class="text-amber-400 text-xs mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="text-sm text-stone-500 leading-relaxed italic mb-5">"Code Wize built us a client portal that cut document back-and-forth in half — and they handle our IT too, so everything integrates."</p><div class="flex items-center gap-3 pt-4 border-t border-stone-100"><div class="w-9 h-9 rounded-full bg-green-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">SM</div><div><p class="text-sm font-semibold text-stone-900">SosME Tax Services</p><p class="text-xs text-stone-400">Miami, FL · Tax Firm</p></div></div></blockquote><blockquote class="bg-white rounded-2xl border border-stone-100 p-6 m-0"><div class="text-amber-400 text-xs mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="text-sm text-stone-500 leading-relaxed italic mb-5">"Our Miramar network was a mess. Code Wize came out the next morning, fixed it, and put a proper backup plan in place. Fast, no nonsense."</p><div class="flex items-center gap-3 pt-4 border-t border-stone-100"><div class="w-9 h-9 rounded-full bg-stone-700 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">TP</div><div><p class="text-sm font-semibold text-stone-900">TPBS Group</p><p class="text-xs text-stone-400">Miramar, FL · Contractor Office</p></div></div></blockquote></div>
  </div>
</section>

<section id="faq" class="py-20 bg-stone-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-[2fr_3fr] gap-14">
      <div>
        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest rounded-full px-3 py-1"><span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>FAQ</span>
        <h2 class="mt-4 text-3xl md:text-4xl font-bold text-stone-900 tracking-tight mb-3">Common questions</h2>
        <p class="text-sm text-stone-500">Something else? <a href="{{ route('contact') }}" class="text-blue-600 font-semibold hover:underline">Reach out &rarr;</a></p>
      </div>
      <div class="flex flex-col gap-2" x-data><div x-data="{ open: false }" class="bg-white border border-stone-100 rounded-xl overflow-hidden"><button class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-sm text-stone-900 hover:bg-stone-50 transition-colors" @click="open = !open" :aria-expanded="open.toString()"><span>What areas do you cover for on-site support?</span><span class="text-blue-600 text-xl leading-none flex-shrink-0 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button><div x-show="open" x-cloak x-transition class="px-5 pb-4 pt-1 text-sm text-stone-500 leading-relaxed border-t border-stone-100">Code Wize provides on-site support throughout Miami-Dade County and southern Broward — Hollywood, Miramar, Pembroke Pines, Hallandale Beach, Davie, Weston, and Cooper City. Remote support is available anywhere.</div></div><div x-data="{ open: false }" class="bg-white border border-stone-100 rounded-xl overflow-hidden"><button class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-sm text-stone-900 hover:bg-stone-50 transition-colors" @click="open = !open" :aria-expanded="open.toString()"><span>What kinds of businesses do you work with?</span><span class="text-blue-600 text-xl leading-none flex-shrink-0 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button><div x-show="open" x-cloak x-transition class="px-5 pb-4 pt-1 text-sm text-stone-500 leading-relaxed border-t border-stone-100">Code Wize focuses on three verticals: contractor and construction offices, accounting and tax firms, and insurance agencies. This focus means deep familiarity with the workflows and tools specific to each industry.</div></div><div x-data="{ open: false }" class="bg-white border border-stone-100 rounded-xl overflow-hidden"><button class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-sm text-stone-900 hover:bg-stone-50 transition-colors" @click="open = !open" :aria-expanded="open.toString()"><span>What does IT support cost?</span><span class="text-blue-600 text-xl leading-none flex-shrink-0 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button><div x-show="open" x-cloak x-transition class="px-5 pb-4 pt-1 text-sm text-stone-500 leading-relaxed border-t border-stone-100">IT support is priced as a flat monthly rate based on your number of devices and scope. No hourly charges for support calls, no surprise invoices. The scope is agreed upfront and stays consistent month to month.</div></div><div x-data="{ open: false }" class="bg-white border border-stone-100 rounded-xl overflow-hidden"><button class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-sm text-stone-900 hover:bg-stone-50 transition-colors" @click="open = !open" :aria-expanded="open.toString()"><span>What does a software project cost?</span><span class="text-blue-600 text-xl leading-none flex-shrink-0 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button><div x-show="open" x-cloak x-transition class="px-5 pb-4 pt-1 text-sm text-stone-500 leading-relaxed border-t border-stone-100">After a free scoping call you receive a fixed-price proposal. Simple tools typically start around $3,000–$8,000. More complex applications vary. Pricing is always disclosed before work begins.</div></div><div x-data="{ open: false }" class="bg-white border border-stone-100 rounded-xl overflow-hidden"><button class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-sm text-stone-900 hover:bg-stone-50 transition-colors" @click="open = !open" :aria-expanded="open.toString()"><span>Can we start with IT support and add software later?</span><span class="text-blue-600 text-xl leading-none flex-shrink-0 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button><div x-show="open" x-cloak x-transition class="px-5 pb-4 pt-1 text-sm text-stone-500 leading-relaxed border-t border-stone-100">That's the most common path. IT support is lower risk and immediately useful. Once the day-to-day is stable, custom software becomes much more targeted and effective.</div></div><div x-data="{ open: false }" class="bg-white border border-stone-100 rounded-xl overflow-hidden"><button class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left font-semibold text-sm text-stone-900 hover:bg-stone-50 transition-colors" @click="open = !open" :aria-expanded="open.toString()"><span>Do you work with businesses outside your three industries?</span><span class="text-blue-600 text-xl leading-none flex-shrink-0 transition-transform duration-200" :class="open ? 'rotate-45' : ''">+</span></button><div x-show="open" x-cloak x-transition class="px-5 pb-4 pt-1 text-sm text-stone-500 leading-relaxed border-t border-stone-100">Occasionally. Reach out — if it's a fit, that will be clear quickly.</div></div></div>
    </div>
  </div>
</section>

<section class="py-20 bg-stone-50"><div class="max-w-6xl mx-auto px-6"><div class="relative bg-stone-900 rounded-3xl overflow-hidden text-center px-8 py-16"><h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">Get your IT sorted. Then let's talk about what else we can build.</h2><p class="text-stone-400 text-base max-w-md mx-auto mb-8 leading-relaxed">Free 30-minute call. We'll look at your current setup and tell you plainly what needs fixing and what doesn't.</p><a href="{{ route('contact') }}" class="inline-block px-7 py-3 rounded-xl font-semibold text-sm bg-white text-stone-900 hover:bg-blue-50 hover:text-blue-600 transition-colors">Book a free consultation &rarr;</a><p class="mt-4 text-xs text-stone-600">Serving Miami-Dade &amp; South Broward &middot; Response within a few hours</p></div></div></section>
<script>
(function () {
  var track = document.getElementById('tickerTrack');
  if (!track) return;
  var orig = track.querySelector('.ticker-set');
  if (!orig) return;
  track.appendChild(orig.cloneNode(true));
  var pos = 0, last = null, SPEED = 52;
  var setW = orig.offsetWidth;
  window.addEventListener('resize', function () { setW = orig.offsetWidth; });
  function tick(ts) {
    if (last === null) last = ts;
    pos += SPEED * (ts - last) / 1000;
    if (setW && pos >= setW) pos -= setW;
    track.style.transform = 'translateX(-' + pos + 'px)';
    last = ts;
    requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
})();
</script>
@endsection
