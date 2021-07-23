<?php

namespace App\Http\Controllers;

use App\AddressForRaffle;
use App\Brand;
use App\Order;
use App\order_product;
use App\Payment;
use App\Raffle;
use App\RaffleCategory;
use App\User;
use App\raffle_user;
use App\Shipment;
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
        $raffles = Raffle::where('status', '=', 'running')->orWhere('status', '=', 'not started')->paginate(3);
        $joined = raffle_user::where('user_id', '=', Auth::user()->id)->first();

        return view('/raffles/raffle', compact('raffles', 'joined'));
    }


    public function raffleGuest()
    {
        $raffles = Raffle::where('status', '=', 'running')->orWhere('status', '=', 'not started')->paginate(3);
        if (Auth::user()) {
            $joined = raffle_user::where('user_id', '=', Auth::user()->id)->first();
            return view('/raffles/raffle', compact('raffles', 'joined'));
        } else {
            return view('/raffles/raffle', compact('raffles'));
        }
    }

    public function allraffle(Request $request)
    {
        if ($request->ajax()) {
            $raffles = Raffle::paginate(3);
            return view('/raffles/filter_raffle', compact('raffles'));
        }
        else {
            $raffles = Raffle::paginate(3);
            return view('/raffles/raffle_item_list', compact('raffles'));
        }
    }

    public function sortRaffle(Request $request)
    {
        if ($request->ajax()) {
            if ($request->sort == "open_raffle") {
                $raffles = Raffle::orderBy('status', 'desc');
            } elseif ($request->sort == "closed_raffle") {
                $raffles = Raffle::orderBy('status', 'asc');
            } elseif ($request->sort == "upcoming_raffle") {
                $raffles = Raffle::orderBy('rafflereleasedate', 'desc');
            } elseif ($request->sort == "latest_raffle") {
                $raffles = Raffle::orderBy('id', 'desc');
            }

            $raffles = $raffles->paginate(3);

            if ($raffles->count() == 0)
                return view('/raffles/filter_raffle', compact('raffles'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('/raffles/filter_raffle', compact('raffles'));
        } else {
            $raffles = Raffle::paginate(3);
            return view('/raffles/raffle_item_list', compact('raffles'));
        }
    }

    public function searchRaffle(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;
            if (!empty($search)) {
                $raffles = Raffle::where('rafflename', 'like', '%' . $search . '%')->paginate(3);
            } else {
                $raffles = Raffle::paginate(3);
            }
        } else {
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

    public function index()
    {
        $raffles = Raffle::all();
        return view('/raffles/manageraffles', compact('raffles'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categoryraffles = RaffleCategory::all();

        return view('/raffles/addraffle', compact('brands', 'categoryraffles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rafflename' => 'required',
            'raffleimage' => 'required|image',
            'brand_id' => 'required',
            'category_id' => 'required',
            'raffleprice' => 'required|numeric',
            'rafflequantity' => 'required|numeric',
            'rafflequota' => 'required|numeric',
            'raffleclosedate' => 'required',
            'rafflereleasedate' => 'required',
            'raffledescription' => 'required'
        ]);

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

    public function edit(Raffle $raffle)
    {
        $brands = Brand::all();
        $categoryraffles = RaffleCategory::all();
        return view('/raffles/editraffle', compact('brands', 'categoryraffles', 'raffle'));
    }

    public function update(Request $request, Raffle $raffle)
    {
        $request->validate([
            'rafflename' => 'required',
            'raffleimage' => 'required|image',
            'brand_id' => 'required',
            'category_id' => 'required',
            'raffleprice' => 'required|numeric',
            'rafflequantity' => 'required|numeric',
            'rafflequota' => 'required|numeric',
            'raffleclosedate' => 'required',
            'rafflereleasedate' => 'required',
            'raffledescription' => 'required'
        ]);

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
            ->select('raffle_user.*', 'raffle_user.status as is_win', 'raffles.rafflename', 'raffles.raffleimage', 'raffles.raffleprice', 'raffles.raffleclosedate', 'raffles.status as status')
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
            ->select('raffle_user.*', 'raffle_user.status as is_win', 'raffles.rafflename', 'users.username', 'users.picture', 'users.email', 'raffles.raffleimage', 'raffles.status', 'raffles.raffleclosedate')
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
            ->limit(3) //RANDOM FOR 2 USERS
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

    public function raffleCheckout($id)
    {
        session()->put('raffleId', [
            'id' => $id
        ]);

        $shipments = Shipment::all();
        $address = raffle_user::find($id)->addressForRaffle;
        $raffle_user = raffle_user::find($id);

        session()->put('raffle_user', [
            'raffle_user' => $raffle_user
        ]);

        return view('/raffles/raffle_checkout', compact('shipments', 'address', 'raffle_user'));
    }

    public function raffleCheckoutView()
    {
        $shipments = Shipment::all();
        $address = raffle_user::find(session()->get('raffleId')['id'])->addressForRaffle;
        $raffle_user = raffle_user::find(session()->get('raffleId')['id']);

        session()->put('raffle_user', [
            'raffle_user' => $raffle_user
        ]);

        return view('/raffles/raffle_checkout', compact('shipments', 'address', 'raffle_user'));
    }

    public function raffleSummary(Request $request)
    {

        $raffle = Raffle::find($request->raffle_id);
        $shipment = Shipment::find($request->shipment_id);
        $address = AddressForRaffle::find($request->address_id);


        session()->put('raffleData', [
            'raffle' => $raffle,
            'shipment' => $shipment,
            'address' => $address
        ]);

        return redirect('/raffles/summary');
    }

    public function raffleSummaryView()
    {
        return view('/raffles/raffle_summary')->with(
            [
                'raffle' => session()->get('raffleData')['raffle'],
                'shipment' => session()->get('raffleData')['shipment'],
                'address' => session()->get('raffleData')['address']
            ]
        );
    }

    public function rafflePayment()
    {
        return view('/raffles/raffle_payment');
    }

    public function raffleMakePayment(Request $request)
    {
        if ($request->payment_type === 'credit') {

            $request->validate([
                'payment_type' => ['required'],
                'first_name' => ['required'],
                'last_name' => ['required'],
                // 'card_number' => ['required', 'digits:16'],
                // 'cvv' => ['required', 'digits:3'],
                // 'credit_type' => ['required'],
                // 'valid_until' => ['required']
            ]);

            $payment = new Payment();

            $payment->payment_type = 'credit';
            $payment->first_name = $request->first_name;
            $payment->last_name = $request->last_name;
            // $payment->card_number = $request->card_number;
            // $payment->cvv = $request->cvv;
            // $payment->credit_type = $request->credit_type;
            // $payment->valid_until = $request->valid_until;
            $payment->user_id = Auth::user()->id;
            $payment->save();
        } else {


            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'bank_name' => 'required',
                'bank_type' => 'required',
                'account_number' => 'required|digits:11',
            ]);

            $payment = new Payment();

            $payment->payment_type = 'debit';
            $payment->first_name = $request->first_name;
            $payment->last_name = $request->last_name;
            $payment->bank_name = $request->bank_name;
            $payment->bank_type = $request->bank_type;
            $payment->account_number = $request->account_number;
            $payment->user_id = Auth::user()->id;
            $payment->save();
        }

        $raffle_user = session()->get('raffle_user')['raffle_user'];

        raffle_user::where('id', $raffle_user->id)
            ->update(['payment_id' => $payment->id]);


        // make Order Raffle
        $order = new Order();
        $order->order_number = 'RAF-' . strtoupper(mt_rand(1000000000, 9999999999));
        $order->status = 'completed';
        $order->grand_total = session()->get('raffleData')['raffle']['raffleprice'];
        $order->user_id = Auth::user()->id;
        $order->payment_id = $payment->id;
        $order->shipment_id = session()->get('raffleData')['shipment']['id'];
        $order->address_id = session()->get('raffleData')['address']['id'];
        $order->is_buy_now = 2;
        $order->notes = null;
        $order->save();

        $order_product = new order_product();
        $order_product->product_id = session()->get('raffleData')['raffle']['id'];
        $order_product->order_id = $order->id;
        $order_product->is_review = 1;
        $order_product->quantity = 1;
        $order_product->subtotal = session()->get('raffleData')['raffle']['raffleprice'];
        $order_product->save();

        session()->forget(['raffle_user', 'raffleData']);

        return redirect('/payment-history');
    }
}
