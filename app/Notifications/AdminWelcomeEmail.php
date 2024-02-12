<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminWelcomeEmail extends Notification
{
    use Queueable;

    protected $email;
    protected $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Welcome to ' . config('app.name') . '!')
            ->line('Welcome to ' . config('app.name') . '! Thanks for registering as an admin with us.')
            ->line('Here are your credentials:')
            ->line('Email: ' . $this->email)
            ->line('Password: ' . $this->password)
            ->line('Please log in  via using these credentials and remember to change your password for security reasons.');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
