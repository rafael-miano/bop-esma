<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest', ['noCard' => true])]
class ThankYou extends Component
{
    public function render()
    {
        return view('livewire.thank-you');
    }
}
