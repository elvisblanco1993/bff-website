<?php

namespace App\Http\Livewire\Web\Contact;

use App\Mail\WebInquiry;
use App\Models\WebContact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Form extends Component
{
    public $name, $email, $phone, $subject, $message;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required', 'email'],
        'subject' => ['required'],
        'message' => ['required', 'min:50'],
    ];

    public function save()
    {
        $this->validate();

        $inquiry = WebContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        Mail::to(config('bff.contact_recipient'))->send(new WebInquiry($inquiry));

        session()->flash('message', 'You inquiry has been received.');

        return redirect()->to('/contact');

    }

    public function render()
    {
        return view('livewire.web.contact.form');
    }
}
