<?php

namespace App\Livewire;

use App\Models\Attendee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]
class PublicForm extends Component
{
    #[Rule('required|string|max:255|regex:/^[A-Za-z\s]+$/')]
    public $full_name;

    #[Rule('required|date')]
    public $date_of_birth;

    #[Rule('required|regex:/^09\d{9}$/')]
    public $mobile_number;

    #[Rule('required|email')]
    public $email;

    public function submit()
    {
        $validated = $this->validate();
        Attendee::create([
            'full_name' => $this->full_name,
            'date_of_birth' => $this->date_of_birth,
            'mobile_number' => $this->mobile_number,
            'email' => $this->email
        ]);

        // session()->flash('success', 'Attendance Recorded');
        $this->reset();
        return redirect()->route('attendee.thank-you');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function render()
    {
        return view('livewire.public-form')->with(['title' => 'User Information']);
    }
}
