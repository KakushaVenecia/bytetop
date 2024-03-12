<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InviteAdminEmail extends Notification
{
    use Queueable;

    protected $token;
    protected $password;
    protected $invitedById;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $password, $invitedById)
    {
        $this->token = $token;
        $this->password = $password;
        $this->invitedById = $invitedById;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Invitation to Bytetop')
            ->line('Hello ' . $notifiable->name . ',')
            ->line('You have been invited to join Bytetop as an admin by ' . $notifiable->find($this->invitedById)->name . '.')
            ->line('Your temporary password is: ' . $this->password)
            ->action('Login Here', config('app.url') . '/login')
            ->line('We Hope you will have fun at ByteTop!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
