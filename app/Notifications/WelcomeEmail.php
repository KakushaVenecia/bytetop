<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class WelcomeEmail extends Notification
{
    use Queueable;

    /**
     * The verification URL.
     *
     * @var string
     */
    protected $verificationUrl;

    /**
     * Create a new notification instance.
     *
     * @param string $verificationUrl
     * @return void
     */
    public function __construct($verificationUrl)
    {
        $this->verificationUrl = $verificationUrl;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

  
    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {


        return (new MailMessage)
        ->line('Welcome to ' . config('app.name') . '! Thanks for registering with us.')
        ->line('Before you get started, please verify your email address by clicking the button below:')
        ->action('Verify Email Address', $this->verificationUrl) // Use $this->verificationUrl directly
        ->line('If you did not create an account, you can ignore this email.');
    
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
