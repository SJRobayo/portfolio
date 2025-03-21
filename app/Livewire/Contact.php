<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use App\Mail\ContactMail;

class Contact extends Component
{

    public $body;
    public $mailerEmail;
    public $mailerName;
    public $rules = [
        'mailerName' => 'required',
        'mailerEmail' => 'required|email',
        'body' => 'required'
    ];

    public $messages = [
        'mailerName.required' => 'The name field is required.',
        'mailerEmail.required' => 'The email field is required.',
        'mailerEmail.email' => 'The email must be a valid email address.',
        'body.required' => 'The message body is required.'
    ];


    public function render()
    {
        return view('livewire.contact');
    }


    public function preValidateMail()
    {
        $this->validate();
    }
}
