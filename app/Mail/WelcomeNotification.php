<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeNotification extends Mailable
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New User Registration')
            ->line('A new user has registered with the following details:')
            ->line('Username: ' . $this->user->username)
            ->line('Email: ' . $this->user->email)
            ->action('View User', url('/users/' . $this->user->id))
            ->line('Thank you for using Your App!');
    }
}
