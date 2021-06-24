<?php

namespace App\Http\Controllers;

use App\AddressForRaffle;
use App\Brand;
use App\Raffle;
use App\RaffleCategory;
use App\User;
use App\raffle_user;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RaffleController extends Controller
{

    public function __construct()
    {
    }

    public function raffledetail(Raffle $raffle)
    {
        return view('/raffles/raffle_detail', compact('raffle'));
    }

    public function raffle()
    {
        $raffles = Raffle::paginate(3);
        return view('/raffles/raffle', compact('raffles'));
    }

    public function allraffle(Request $request)
    {
        $raffles = Raffle::paginate(3);
        return view('/raffles/raffle_item_list', compact('raffles'));
    }

    public function sortRaffle(Request $request)
    {
        if($request->ajax()){
            if ($request->sort == "open_raffle") {
                $raffles = Raffle::orderBy('status','desc');
            } elseif ($request->sort == "closed_raffle") {
                $raffles = Raffle::orderBy('status','asc');
            } elseif ($request->sort == "upcoming_raffle") {
                $raffles = Raffle::orderBy('rafflereleasedate','desc');
            } elseif ($request->sort == "latest_raffle") {
                $raffles = Raffle::orderBy('id','desc');
            }     
            
            $raffles = $raffles->paginate(3);

            if ($raffles->count() == 0)
                return view('/raffles/filter_raffle', compact('raffles'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('/raffles/filter_raffle', compact('raffles'));

        }else {
            $raffles = Raffle::paginate(3);
            return view('/raffles/raffle_item_list', compact('raffles'));
        }
    }

    public function searchRaffle(Request $request){
        if($request->has('search')){
            $search = $request->search;
            if(!empty($search)){
                $raffles = Raffle::where('rafflename', 'like', '%' .$search. '%')->paginate(3);
            }else{
                $raffles = Raffle::paginate(3);
            }
        }else{
            $raffles = Raffle::paginate(3);
        }

        if ($raffles->count() == 0)
            return view('/raffles/filter_raffle', compact('raffles'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('/raffles/filter_raffle', compact('raffles'));

    }

    public function raffledescription(Raffle $raffle)
    {
        return view('/raffles/raffle_item_desc', compact('raffle'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raffles = Raffle::all();
        return view('/raffles/manageraffles', compact('raffles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categoryraffles = RaffleCategory::all();

        return view('/raffles/addraffle', compact('brands', 'categoryraffles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raffle = new Raffle();
        $raffle->rafflename = $request->rafflename;
        $raffle->raffledescription = $request->raffledescription;
        $raffle->raffleprice = $request->raffleprice;
        // $raffle->raffleimage = $request->raffleimage;
        $raffle->rafflequantity = $request->rafflequantity;
        $raffle->rafflequota = $request->rafflequota;
        $raffle->rafflereleasedate = $request->rafflereleasedate;
        $raffle->raffleclosedate = $request->raffleclosedate;
        $raffle->brand_id = $request->brand_id;
        $raffle->category_id = $request->category_id;

        if ($request->hasFile('raffleimage')) {
            $file = $request->file('raffleimage');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Raffles/', $filenamesave);
            $raffle->raffleimage = $filenamesave;
        } else {
            $raffle->raffleimage = '';
        }

        $raffle->save();
        return redirect('manageraffle')->with('status', 'Raffle Item Successfully Added!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Raffle $raffle)
    {
        $brands = Brand::all();
        $categoryraffles = RaffleCategory::all();
        return view('/raffles/editraffle', compact('brands', 'categoryraffles', 'raffle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raffle $raffle)
    {

        if ($request->hasFile('raffleimage')) {
            $file = $request->file('raffleimage');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Raffles/', $filenamesave);
            $raffle->raffleimage = $filenamesave;
        } else {
            $raffle->raffleimage = '';
        }

        Raffle::where('id', $raffle->id)->update([
            'rafflename' => $request->rafflename,
            'raffledescription' => $request->raffledescription,
            'raffleprice' => $request->raffleprice,
            'raffleimage' => $raffle->raffleimage,
            'rafflequantity' => $request->rafflequantity,
            'rafflequota' => $request->rafflequota,
            'rafflereleasedate' => $request->rafflereleasedate,
            'raffleclosedate' => $request->raffleclosedate,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id
        ]);

        return redirect('manageraffle')->with('status', 'Product Raffle successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raffle $raffle)
    {
        Raffle::destroy($raffle->id);

        return redirect('manageraffle')->with('status', 'Product Raffle successfully deleted!');
    }

    // place raffle
    public function submit(Request $request)
    {

        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required', 'numeric'],
            'post_code' => ['required', 'numeric'],
            'address' => ['required', 'max:255'],
            'address2' => ['max:255'],
            'city' => ['required'],
            'country' => ['required'],
        ]);

        $addressForRaffle = new AddressForRaffle();
        $addressForRaffle->first_name = $request->first_name;
        $addressForRaffle->last_name = $request->last_name;
        $addressForRaffle->email = $request->email;
        $addressForRaffle->phone_number = $request->phone;
        $addressForRaffle->date_of_birth = $request->dob;
        $addressForRaffle->post_code = $request->post_code;
        $addressForRaffle->number_street_address_1 = $request->address;
        $addressForRaffle->number_street_address_2 = $request->address2;
        $addressForRaffle->city = $request->city;
        $addressForRaffle->country = $request->country;
        $addressForRaffle->save();

        // Input To Raffle_User
        $user = User::find(Auth::user()->id);
        $user->raffle()->attach($request->raffle_id, ['address_raffle_id' => $addressForRaffle->id]);

        //update quota raffle
        Raffle::where('id', '=', $request->raffle_id)->update([
            'rafflejoined' => DB::raw('rafflejoined + 1')
        ]);

        return  redirect('/raffle/history');
    }

    public function history()
    {
        //GET ALL RAFFLE FROM USER SUBMIT
        $raffles = DB::table('raffle_user')
            ->join('raffles', 'raffle_user.raffle_id', '=', 'raffles.id')
            ->where('user_id', '=', Auth::user()->id)
            ->select('raffle_user.*', 'raffles.rafflename', 'raffles.raffleimage', 'raffles.raffleprice', 'raffles.raffleclosedate')
            ->get();

        // return view('raffles.raffle_history', compact('raffles'))->with('status', 'Success Join Raffle Product!');
        if ($raffles->count() == 0)
            return view('raffles.raffle_history', compact('raffles'))->withErrors(['no_post_result' => 'No data raffle found.']);
        else
            return view('raffles.raffle_history', compact('raffles'))->with('status', 'Success Join Raffle Product!');
    }

    public function check($id)
    {
        //GET SELECTED RAFFLE
        $raffle = Raffle::find($id);

        //GET ALL USER HAS JOINED THE RAFFLE
        $users = DB::table('raffle_user')
            ->join('users', 'raffle_user.user_id', '=', 'users.id')
            ->join('raffles', 'raffle_user.raffle_id', '=', 'raffles.id')
            ->select('raffle_user.*', 'raffles.rafflename', 'users.username', 'users.picture', 'users.email', 'raffles.raffleimage', 'raffles.status', 'raffles.raffleclosedate')
            ->where('raffle_id', '=', $raffle->id)
            ->get();

        // dd($users);

        return view('raffles.check', compact('users', 'raffle'));
    }

    public function random($id)
    {
        //GET ALL USER HAS JOINED THE RAFFLE PRODUCT
        $users = DB::table('raffle_user')
            ->join('users', 'raffle_user.user_id', '=', 'users.id')
            ->join('raffles', 'raffle_user.raffle_id', '=', 'raffles.id')
            ->select('raffle_user.*', 'raffles.rafflename', 'users.username', 'users.picture', 'users.email', 'raffles.raffleimage', 'raffles.status', 'raffles.raffleclosedate')
            ->where('raffle_id', '=', $id)
            ->get();

        //MAKE RANDOM WINNERS
        $random_winners = DB::table('raffle_user')
            ->join('users', 'raffle_user.user_id', '=', 'users.id')
            ->join('raffles', 'raffle_user.raffle_id', '=', 'raffles.id')
            ->select('raffle_user.*', 'raffles.rafflename', 'users.username', 'users.picture', 'users.email', 'raffles.raffleimage', 'raffles.status', 'raffles.raffleclosedate')
            ->where('raffle_id', '=', $id)
            ->inRandomOrder()
            ->limit(10) //RANDOM FOR 2 USERS
            ->get();



        // USER WINNERS
        $winners = $random_winners->pluck('user_id');

        // UPDATE USER STATUS TO WIN
        $win = raffle_user::where('raffle_id', '=', $id)->whereIn('user_id', $winners)->update([
            'status' => 'win'
        ]);
        // UPDATE USER STATUS TO LOSE
        $lose = raffle_user::where('raffle_id', '=', $id)->whereNotIn('user_id', $winners)->update([
            'status' => 'lose'
        ]);

        return back();
    }
}
