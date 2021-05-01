<?php

namespace App\Listeners;

use App\Notifications\UserNotification;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class SendUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $customers = User::whereHas('roles', function($query){
            $query->where('id', 1); //$admins, admin
        })->get();

        Notification::send($customers, new UserNotification($event->user));
    }
}
