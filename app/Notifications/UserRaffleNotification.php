<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRaffleNotification extends Notification
{
    use Queueable;

    protected $userRaffle; //

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($userRaffle)
    {
        $this->userRaffle = $userRaffle; //
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
            //
        ];
    }

    public function toDatabase($notifiable){
        return[
            'user_id' => $this->userRaffle->user_id,
            'raffle_id' => $this->userRaffle->raffle_id,
            'status' => $this->userRaffle->status,

            //yang dibutuhkan untuk dishow notification nantinya
            'firstname' => $this->userRaffle->raffle_id->firstname, //want take value from lastname.firstname
            'lastname' => $this->userRaffle->user_id->lastname, //want take value from user.lastname
            'created_at' => $this->userRaffle->user_id->created_at, //want take value from user.created_at
            'rafflename' => $this->userRaffle->raffle_id->rafflename, //want take value from raffle.rafflename
            'raffleimage' => $this->userRaffle->raffle_id->raffleimage, //want take value from raffle.raffleimage
            'raffleprice' => $this->userRaffle->raffle_id->raffleprice, //want take value from raffle.raffleprice
            'rafflejoined' => $this->userRaffle->raffle_id->rafflejoined, //want take value from raffle.rafflejoined
            // 'status' => $this->userRaffle->status,
        ];
    }
}
