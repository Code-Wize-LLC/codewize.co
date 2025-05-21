<?php

namespace App\Livewire\Website;

use App\Notifications\NewLeadNotification;
use DutchCodingCompany\LivewireRecaptcha\ValidatesRecaptcha;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    public string $gRecaptchaResponse;

    public string $firstname;

    public string $lastname;

    public string $email;

    public string $phone;

    public string $topic;

    public string $details;

    public function render()
    {
        return view('livewire.website.contact-form');
    }

    #[ValidatesRecaptcha]
    public function save()
    {
        $this->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => [
                'required',
                Rule::unique('leads', 'email'),
                Rule::email()->rfcCompliant()->preventSpoofing(),
            ],
            'phone' => ['nullable', 'min:13', 'max:13'],
            'topic' => ['required'],
            'details' => ['nullable', 'max:500'],
        ]);

        // Save to DB

        $payload = [
            'email' => strtolower($this->email),
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'topic' => $this->topic,
            'details' => $this->details,
        ];

        // Post to Hubspot

        // Send telegram notification
        Notification::route('telegram', config('services.telegram-bot-api.chat_id'))->notify(new NewLeadNotification($payload));

        session()->flash('success', 'Thank for reaching out. One of our agents will get in touch with you soon.');
        $this->redirect(url: route('contact'), navigate: false);
    }
}
