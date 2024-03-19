<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordUpdatedEmail extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Password Updated')
            ->line('Your password has been successfully updated.')
            ->line('If you did not change your password, please contact us immediately.');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
