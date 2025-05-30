<div class="fixed top-0 z-40 w-full flex justify-center">
    <div class="max-w-5xl w-full px-4 sm:px-6 mt-4">
        <nav class="py-4 px-4 sm:px-6 border border-zinc-300/50 rounded-full bg-white/40 backdrop-blur-lg">
            <div class="flex items-center justify-between">
                <flux:tooltip content="code wize">
                    <a href="{{ route('home') }}" alt="code wize" class="font-medium">
                        {{ __('</wize>') }}
                    </a>
                </flux:tooltip>
                
                <div class="text-sm flex items-center gap-2 [&>a]:border-b-2 [&>a]:border-transparent">
                    @env('local')
                    <a href="{{ route('about') }}" @class(['px-1 h-8 flex items-center hover:border-accent', '!border-accent' => request()->routeIs('about')])>about</a>
                    <a href="{{ route('services') }}" @class(['px-1 h-8 flex items-center hover:border-accent', '!border-accent' => request()->routeIs('services')])>services</a>
                    @endenv
                    <a href="{{ route('contact') }}" @class(['px-1 h-8 flex items-center hover:border-accent', '!border-accent' => request()->routeIs('contact')])>contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
