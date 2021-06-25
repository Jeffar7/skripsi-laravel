<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentNotification extends Notification
{
    use Queueable;

    protected $orderProduct;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($orderProduct)
    {
        $this->orderProduct = $orderProduct;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');
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

        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'user_id' => $this->orderProduct->order_id->user_id,
            'product_id' => $this->orderProduct->product_id,
           

            //yang dibutuhkan untuk dishow notification nantinya
            'firstname' => $this->orderProduct->order_id->user_id->firstname, //want take value from lastname.firstname
            'lastname' => $this->orderProduct->order_id->user_id->lastname, //want take value from user.lastname
            'productname' => $this->orderProduct->product_id->productname, //want take value from product.productname
            'productimage' => $this->orderProduct->product_id->productpicture, //want take value from product.productpicture
            'productprice' => $this->orderProduct->product_id->productprice, //want take value from product.productprice
        ];
    }
}
