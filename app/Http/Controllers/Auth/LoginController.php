<?php

namespace App\Http\Controllers\Auth;

use App\DetailAddress;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect('/')->with('success', 'Your account has been successfully logged in!');;
        }

        return redirect('/')->with('success', 'Your account has been successfully logged in!');;
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallBack()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {



        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->first_name = $data->name;
            $user->username = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->picture = $data->avatar;
            $user->role = 'customer';
            $user->save();
        }

        $addresses = new DetailAddress();
        $addresses->city = '-';
        $addresses->province = '-';
        $addresses->zip_code = '-';
        $addresses->city = '-';
        $addresses->country = '-';
        $addresses->user_id = $user->id;
        $addresses->save();


        Auth::login($user);
    }
}
