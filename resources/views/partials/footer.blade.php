<footer class="mt-12 sm:mt-24 border-t border-accent/20">
    <div class="max-w-screen-xl mx-auto">        
        <div class="py-6 px-4 sm:px-6 text-sm flex items-center justify-between gap-1">
            <span>&copy; {{ now()->year }} Code Wize Technologies, LLC</span>

            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            {{-- <span>&middot;</span>
            <a href="">Terms of Service</a> --}}
        </div>
    </div>
</footer>