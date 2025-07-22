<div class="fixed sm:top-6 z-40 w-full sm:px-4">
    <nav class="max-w-screen-xl mx-auto sm:rounded-xl border-b border-accent/20 bg-zinc-800/40 backdrop-blur-lg text-white py-4 px-4 sm:px-6">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" alt="code wize" class="font-medium text-lg">
                codewize<span class="text-accent font-black">_</span>
            </a>
            
            <div class="text-sm flex items-center gap-2 [&>a]:border-b-2 [&>a]:border-transparent">
                @env('local')
                <a href="{{ route('about') }}" @class(['h-8 flex items-center hover:border-accent', '!border-accent' => request()->routeIs('about')])>about</a>
                <a href="{{ route('services') }}" @class(['h-8 flex items-center hover:border-accent', '!border-accent' => request()->routeIs('services')])>services</a>
                @endenv
                <a href="{{ route('contact') }}" @class(['h-8 flex items-center hover:border-accent', '!border-accent' => request()->routeIs('contact')])>Contact</a>
            </div>
        </div>
    </nav>
</div>
