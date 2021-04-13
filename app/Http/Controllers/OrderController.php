<?php

namespace App\Http\Controllers;

use App\Address_Delivery_Users;
use App\Cart;
use App\Order;
use App\Payment;
use App\Product;
use App\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function checkout()
    {

        $customer = Cart::where('user_id', '=', Auth::user()->id)->first();

        if (!empty($customer)) {

            $order = new Order();
            $order->order_number = 'ORD-' . strtoupper(mt_rand(1000000000, 9999999999));
            $order->status = 'pending';
            $order->user_id = Auth::user()->id;
            $order->grand_total = "10000";
            $order->save();

            //after click checkout, cart list product delete
            $carts = Cart::where('user_id', '=', Auth::user()->id)->forceDelete();

            $shipments = Shipment::all();

            $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();

            $detailaddresses = null;

            return view('/transactions/delivery', compact('order', 'addresses', 'detailaddresses', 'shipments'));
        } else {
            echo "1";
            return back()->with('status', 'There is no product on your cart, pick some!');
        }
    }

    public function buynow($id)
    {
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $shipments = Shipment::all();
        $products = Product::where('id', '=', $id)->first();


        return view('/transactions/delivery', compact('addresses', 'shipments', 'products'));
    }

    public function addaddress(Request $request)
    {


        $address = new Address_Delivery_Users();

        $address->recipient_name = $request->recipient_name;
        $address->contact_number = $request->contact_number;
        $address->address = $request->address;
        $address->address_note = $request->address_note;
        $address->post_code = $request->post_code;
        $address->province = $request->province;
        $address->city = $request->city;
        $address->district = $request->district;
        $address->user_id = Auth::user()->id;

        $address->save();

        // dd($address);

        return redirect()->action([OrderController::class, 'checkout']);
    }

    public function addaddresspage()
    {
        return view('/transactions/addaddress');
    }

    public function delivery()
    {
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $detailaddresses = null;

        return view('/transactions/delivery', compact('addresses', 'detailaddresses'));
    }

    public function chooseaddress($id)
    {
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $detailaddresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->where('id', '=', $id)->get();

        return view('/transactions/delivery', compact('addresses', 'detailaddresses'));
    }

    public function payment(Request $request)
    {


        $payments = Payment::all();
        return view('/transactions/payment', compact('payments'));
    }

    public function summary(Request $request)
    {
        $products = Product::where('id', '=', $request->products)->get();
        $address = Address_Delivery_Users::where('id', '=', $request->address_detail)->first();
        $shipment = Shipment::where('id', '=', $request->shipment)->first();

        return view('/transactions/ordersummary', compact('products', 'address', 'shipment'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        //
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
