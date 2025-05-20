<div>
    <form wire:submit.prevent="save" wire:recaptcha>
        @csrf
        <div class="flex flex-col gap-6">
            <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
                <div class="px-4 sm:px-10 py-6 sm:py-8 space-y-6 text-left">
                    <div class="grid grid-cols-2 gap-6">
                        <flux:input wire:model="firstname" label="First Name" />
                        <flux:input wire:model="lastname" label="Last Name" />
                    </div>
                    <flux:input wire:model="email" label="Email Address (Work or personal — we’ll reply here)" />
                    <flux:input wire:model="phone" label="Phone Number (Optional – for quicker follow-up)" mask="(999)999-9999" />
                    <flux:select wire:model="topic" label="How can we help? (Pick a topic or service)">
                        <flux:select.option value="">Select an option</flux:select.option>

                        @forelse (config('internal.contact_topics') as $val => $label)
                            <flux:select.option value="{{ $val }}">{{ $label }}</flux:select.option>
                        @empty
                        @endforelse
                    </flux:select>
                    <flux:textarea wire:model="details" label="Tell us more (The more details, the better we can assist!)" />
                    <div class="flex items-center">
                        <flux:spacer />
                        <flux:button variant="primary" wire:target="save" wire:loading.attr="disabled" type="submit">Start the Conversation</flux:button>
                    </div>

                    @if (session('success'))
                        <flux:callout variant="success" icon="check-circle" heading="{{ session('success') }}" />
                    @endif
                    <flux:error name="gRecaptchaResponse" />
                </div>
            </div>
        </div>
    </form>

    @livewireRecaptcha
</div>
