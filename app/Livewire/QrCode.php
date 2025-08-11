<?php

namespace App\Livewire;

use Livewire\Component;

class QrCode extends Component
{
    public $qr_api = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=";

    public function render()
    {
        // Use config instead of env() for production safety
        $url = $this->qr_api . urlencode(config('app.url')) . '/attendance';

        return view('livewire.qr-code', compact('url'));
    }
}
