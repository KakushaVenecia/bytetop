<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeEmail extends Notification
{
    use Queueable;

    protected $verificationUrl;

    public function __construct($verificationUrl)
    {
        $this->verificationUrl = $verificationUrl;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Welcome to ' . config('app.name'))
            ->line('Welcome to ' . config('app.name') . '! Thanks for registering with us.')
            ->line('Before you get started, please verify your email address by clicking the button below:')
            ->action('Verify Email Address', $this->verificationUrl)
            ->line('If you did not create an account, you can ignore this email.');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
