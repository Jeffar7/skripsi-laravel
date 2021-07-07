<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotification extends Notification
{
    use Queueable;

    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail', 'database'];
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
            // 'first_name' => $this->user->first_name,
            // 'last_name' => $this->user->last_name,
            // 'username' => $this->user->username,
            // 'email' => $this->user->email,
            // 'gender' => $this->user->gender,
            // 'DOB' => $this->user->DOB,
            // 'role' => $this->user->role,
            // 'address' => $this->user->address,
            // 'first_name' => $this->user->first_name,
            // 'site' => $this->user->site,
            // 'about' => $this->user->about,
            // 'phone' => $this->user->phone,
        ];
    }
    
    public function toDatabase($notifiable){
        // dd($notifiable);
        return [
            'username' => $this->user->username,
            'email' => $this->user->email,

            // 'user' => auth()->user()
        ];
    }
}
