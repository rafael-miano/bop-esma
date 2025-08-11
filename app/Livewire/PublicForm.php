<?php

namespace App\Livewire;

use App\Models\Attendee;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class PublicForm extends Component
{
    public $full_name;
    public $date_of_birth;
    public $mobile_number;
    public $email;

    protected $rules = [
        'full_name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
        'date_of_birth' => ['required', 'date'],
        'mobile_number' => ['required', 'regex:/^09\d{9}$/'],
        'email' => ['required', 'email'],
    ];


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
