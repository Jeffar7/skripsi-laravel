<?php

namespace App\Listeners;

use App\Notifications\PaymentNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPaymentNotification
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
        $customers = User::whereHas('roles', function ($query){
            // $client = DB::table('users')->latest('id')->first();
            // $query->where('model_id', '>', $client->id); //harusnya '=', auth::user()->id
            $query->where('role_id', 2);
            $query->where('model_id', '>', 19); //harusnya '=', auth::user()->id  //timestamp model_id
        })
        // ->whereHas('roles', function($query){
            // $query->where('role_id', 2);
        // })
        ->get();
        // $id = Auth::id();
        // dd($client->id);
        

        Notification::send($customers, new PaymentNotification($event->orderProduct));
        //guard name web admin
    }
}
