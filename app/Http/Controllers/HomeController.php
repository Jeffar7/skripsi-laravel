<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Notifications\UserNotification;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $notifications = auth()->user()->unreadNotifications;

        // auth()->user()->notify(new UserNotification());

        // $user->notify(new UserNotification($user));

        // return view('home', compact('notifications'));
        
        // dd($waitingpayment);
        $others = Product::all();
        // return view('/home', compact('others'));

        return view('home', compact('notifications', 'others')); //others
        // return view('/transactions/delivery_buy_now', compact('addresses', 'shipments', 'products'));
        return view('/home');

    }

}
