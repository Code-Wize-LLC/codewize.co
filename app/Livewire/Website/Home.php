<?php

namespace App\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.website.home');
    }
}
