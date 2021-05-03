<?php

namespace App\Http\Controllers;

use App\Address_Delivery_Users;
use App\Cart;
use App\Order;
use App\order_product;
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


    public function checkout(Request $request)
    {
        $cartlists = Cart::where('user_id', '=', Auth::user()->id)->get();

        //get all product from cart
        $products = [];
        foreach ($cartlists as $cartlist) {
            $product = Product::where('id', '=', $cartlist->product_id)->first();
            $products[] = $product;
        }


        $carts = Cart::where('user_id', '=', Auth::user()->id)->get();

        if ($carts->count() > 0) {

            $order = new Order();
            $order->order_number = 'ORD-' . strtoupper(mt_rand(1000000000, 9999999999));
            $order->status = 'pending';
            $order->user_id = Auth::user()->id;
            $order->grand_total = $request->grandtotal;
            $order->save();

            foreach ($carts as $cart) {
                $order_product = new order_product();
                $order_product->order_id = $order->id;
                $order_product->product_id = $cart->product_id;
                $order_product->is_review = 'no';
                $order_product->save();
            }

            //get product that has been purchased


            //after click checkout, cart list product delete
            // $carts = Cart::where('user_id', '=', Auth::user()->id)->forceDelete();


            //get all shipment
            $shipments = Shipment::all();

            //get all user address
            $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();

            $detailaddresses = null;

            return view('/transactions/delivery', compact('order', 'addresses', 'detailaddresses', 'shipments', 'products'));
        } else {
            return back()->with('status', 'There is no product on your cart, pick some!');
        }
    }

    public function addaddress(Request $request)
    {
        if ($request->has('formaddress')) {
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
        } else {
            return back();
        }

        $products = json_decode($request->products);

        $order = Order::where('id', '=', $request->order)->first();
        $shipments = Shipment::all();
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $detailaddresses = null;

        return view('/transactions/delivery', compact('order', 'addresses', 'detailaddresses', 'shipments', 'products'));
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

        $order = Order::where('status', '=', 'pending')->where('user_id', '=', Auth::user()->id)->first();

        Order::where('id', '=', $order->id)->update([
            'address_id' => $request->address,
            'shipment_id' => $request->shipment
        ]);

        $payments = Payment::all();
        return view('/transactions/payment', compact('payments', 'order'));
    }

    public function makepayment(Request $request)
    {
        $payment = new Payment();

        if ($request->payment_type === 'credit') {

            $payment->payment_type = 'credit';
            $payment->first_name = $request->first_name;
            $payment->last_name = $request->last_name;
            $payment->card_number = $request->card_number;
            $payment->cvv = $request->cvv;
            $payment->credit_type = $request->credit_type;
            $payment->valid_until = $request->valid_until;
            $payment->user_id = Auth::user()->id;
            $payment->save();
        } else {
            $payment->payment_type = 'debit';
            $payment->first_name = $request->first_name;
            $payment->last_name = $request->last_name;
            $payment->bank_name = $request->bank_name;
            $payment->bank_type = $request->bank_type;
            $payment->account_number = $request->account_number;
            $payment->user_id = Auth::user()->id;
            $payment->save();
        }

        Order::where('id', '=', $request->order)->update([
            'status' => 'completed',
            'payment_id' => $payment->id
        ]);

        $carts = Cart::where('user_id', '=', Auth::user()->id)->forceDelete();

        return redirect('/payment-history');
    }

    public function summary(Request $request)
    {

        $productss = json_decode($request->products);
        foreach ($productss as $product) {
            $product = Product::where('id', '=', $product->id)->first();
            $products[] = $product;
        }

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
