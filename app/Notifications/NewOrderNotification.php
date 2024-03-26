<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $orderIdentifier;

    /**
     * Create a new notification instance.
     *
     * @param  string  $orderIdentifier
     * @return void
     */
    public function __construct($orderIdentifier)
    {
        $this->orderIdentifier = $orderIdentifier;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
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
            ->subject('New Order Notification')
            ->line('A new order has been initialized with the order identifier: '.$this->orderIdentifier)
            ->action('View Order', config('app.url').'/admin/all-orders')
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'title' => 'New Order Notification',
            'content' => "A new order has been initialized with the following details:\nOrder Identifier: $this->orderIdentifier\nStatus: Initialized\nAction Required: Yes\nCreated At: ".now(),
        ];
    }
}
