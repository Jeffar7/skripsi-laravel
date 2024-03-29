<?php

namespace App\Http\Controllers\Auth;

use App\DetailAddress;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\UserNotification;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/login";

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect($this->redirectPath())->with('message', 'Your account has been successfully registered!');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string'],
            'DOB' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'username' => strstr($data['email'], '@', true),
            'gender' => $data['gender'],
            'DOB' => $data['DOB'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'address' => $data['address'],
            'site' => $data['site'],
            'about' => $data['about'],
            'picture' => $data['picture'],
            'phone' => $data['phone']
        ]);

        //detail address

        $user->assignRole('customer');

        $detailaddress = new DetailAddress();
        $detailaddress->city = "-";
        $detailaddress->province = "-";
        $detailaddress->zip_code = "-";
        $detailaddress->country = "-";
        $detailaddress->user_id = $user->id;

        // auth()->user()->notify(new UserNotification());
        $detailaddress->save();

        $user->notify(new UserNotification($user));

        return $user;
    }
}
