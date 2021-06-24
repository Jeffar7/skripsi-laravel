<?php

namespace App\Http\Controllers;

use App\Notifications\UserNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notification = DB::table('notifications')->get();

        return view('layouts/notification/usernotificationlist');
    }

    public function showNotificationBasedOnCurrentUser(UserNotification $userNotification, User $user){
        // UserNotification::where('data', )
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $find = DB::table('users')
        ->select('first_name', 'picture')
        ->where('role', '=', 'admin')
        ->inRandomOrder()
        ->limit(1)
        ->get();

        $randomize = $find->pluck('id');

        return view('layouts.notification.usernotificationlist', compact('randomize', 'find'));


        // $find= User::where('role', '=', 'admin')
        // ->inRandomOrder()
        // ->limit(1)
        // ->get();


        // return back();
        // return view('layouts.notification.usernotificationlist', compact('find', 'user'));

        //get time .. ago
        // $timed = User::orderBy('created_at', 'desc')->limit(1)->get();

        // return view('layouts.notification.usernotificationlist', compact(['find','timed'], 'user'));

        //permasalahan baru random dan descending engga sejalan



        // $find= User::where('role', '=', 'admin')
        // ->inRandomOrder()
        // ->limit(1)
        // ->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
