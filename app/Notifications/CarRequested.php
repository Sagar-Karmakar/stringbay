<?php

namespace App\Notifications;

use App\Models\Car;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CarRequested extends Notification
{
    use Queueable;

    public $car;
    public $customer;

    public function __construct(Car $car, User $customer)
    {
        $this->car = $car;
        $this->customer = $customer;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->line('A customer has requested a car.')
        ->action('View Request', url('/car-requests'))
        ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'car_id' => $this->car->id,
            'car_make' => $this->car->make,
            'car_model' => $this->car->model,
            'customer_name' => $this->customer->name,
        ];
    }
}
