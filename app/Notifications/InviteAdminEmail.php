<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InviteAdminEmail extends Notification
{
    use Queueable;

    protected $inviterName;
    protected $email;
    protected $password;

    public function __construct($inviterName, $email, $password)
{
    $this->inviterName = $inviterName;
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
            ->subject('Invitation to join ' . config('app.name') . ' as an admin')
            ->line('Hello ' . $notifiable->name . ',')
            ->line($this->inviterName . ' has invited you to join ' . config('app.name') . ' as an admin.')
            ->line('We are delighted to welcome you to the ' . config('app.name') . ' family.')
            ->line('Please click on the link below to accept the invitation and set up your account.')
            ->action('Login Here', config('app.url') . '/login');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
