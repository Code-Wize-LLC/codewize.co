<?php

namespace App\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest', [
    'title' => 'Let’s Talk – Connect with our Tech Team',
    'description' => 'Reach out to Code Wize for expert IT guidance, software support, or custom solutions.',
])]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.website.contact');
    }
}
