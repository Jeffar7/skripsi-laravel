<?php

namespace App\Http\Controllers;

use App\DetailAddress;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\Authenticate;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->get();

        return view('users\userprofile');
    }

    public function usersettings()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        return view('users\usersetting', compact('user'));
    }

    public function usercontrol()
    {
        $users = User::all();

        return view('users\usercontrol', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users\usercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'DOB' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
            'address' => 'required|string',
            'site' => 'required',
            'about' => 'required|string|max:255',
            'picture' => 'required|file',
            'phone' => 'required'
        ]);


        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email  = $request->email;
        $user->username = strstr($request->email, '@', true);
        $user->gender = $request->gender;
        $user->DOB = $request->DOB;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->address = $request->address;
        $user->site = $request->site;
        $user->about = $request->about;
        $user->phone = $request->phone;
        // $user->picture= $request->picture;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Users/', $filenamesave);
            $user->picture = $filenamesave;
        } else {
            return $request;
            $user->picture = '';
        }

        if ($request->role == "customer") {
            $user->assignRole('customer');
        } else {
            $user->assignRole('admin');
        }

        $user->save();

        $detailaddress = new DetailAddress();
        $detailaddress->city = '-';
        $detailaddress->zip_code = '-';
        $detailaddress->province = '-';
        $detailaddress->country = '-';
        $detailaddress->user_id = $user->id;
        $detailaddress->save();


        return redirect('/usercontrol')->with('status', 'User Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.useredit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Users/', $filenamesave);
            $user->picture = $filenamesave;
        } else {
            return $request;
            $user->picture = '';
        }

        User::where('id', $user->id)
            ->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                // 'email' => $request->email,
                'username' => strstr($request->email, '@', true),
                'gender' => $request->gender,
                'DOB' => $request->DOB,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'address' => $request->address,
                'site' => $request->site,
                'about' => $request->about,
                'picture' => $user->picture,
                'phone' => $request->phone

            ]);

        DetailAddress::where('user_id', $user->id)
            ->update([
                'city' => $request->city,
                'province' => $request->province,
                'zip_code' => $request->zip_code,
                'country' => $request->country
            ]);

        if ($request->role == "customer") {
            $user->assignRole('customer');
        } else {
            $user->assignRole('admin');
        }

        return redirect('/userprofile')->with('status', 'User data successfully updated!');
    }


    public function updateadm(Request $request, User $user)
    {
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Users/', $filenamesave);
            $user->picture = $filenamesave;
        } else {
            return $request;
            $user->picture = '';
        }


        User::where('id', $user->id)
            ->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'username' => strstr($request->email, '@', true),
                'gender' => $request->gender,
                'DOB' => $request->DOB,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'address' => $request->address,
                'site' => $request->site,
                'about' => $request->about,
                'picture' => $user->picture,
                'phone' => $request->phone

            ]);

        if ($request->role == "customer") {
            $user->assignRole('customer');
        } else {
            $user->assignRole('admin');
        }

        return redirect('/usercontrol')->with('status', 'User data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('usercontrol')->with('status', 'User successfully deleted!');
    }
}
