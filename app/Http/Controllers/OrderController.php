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
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function checkout(Request $request,  Cart $cart)
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
            $order->is_buy_now = 0;
            $order->save();

            foreach ($carts as $cart) {
                $order_product = new order_product();
                $order_product->order_id = $order->id;
                $order_product->product_id = $cart->product_id;
                $order_product->is_review = 'no';
                $order_product->quantity = $request->quantity;
                $order_product->subtotal = $cart->product->productprice * $request->quantity;

                $order_product->save();

                Cart::where('id', $cart->id)
                    ->update([
                        'quantity' => $request->quantity
                    ]);
            }

            //after click checkout, cart list product delete
            // $carts = Cart::where('user_id', '=', Auth::user()->id)->forceDelete();

            //get all shipment
            $shipments = Shipment::all();

            //get all user address
            $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();

            $detailaddresses = null;

            //make session
            session()->put('checkout', [
                'order_id' => $order->id,
                'product' => $products
            ]);

            //    dd(session()->get('checkout'));

            return redirect('/transactions/delivery');
        } else {
            return back()->with('status', 'There is no product on your cart, pick some!');
        }
    }

    public function viewCheckOut()
    {

        $shipments = Shipment::all();
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $detailaddresses = null;
        $order = Order::find(session()->get('checkout')['order_id']);
        $products = session()->get('checkout')['product'];

        return view('/transactions/delivery', compact('order', 'products', 'addresses', 'shipments', 'detailaddresses'));
    }

    public function transactionDelivery()
    {
        //get all shipment
        $shipments = Shipment::all();

        //get all user address
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();

        $detailaddresses = null;

        return view('/transactions/delivery', compact('order', 'addresses', 'detailaddresses', 'shipments', 'products'));
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

        $order = Order::where('id', '=', session()->get('checkout')['order_id'])->where('user_id', '=', Auth::user()->id)->first();

        Order::where('id', '=', $order->id)->update([
            'address_id' => $request->address,
            'shipment_id' => $request->shipment,
            'notes' => $request->notes
        ]);

        $payments = Payment::all();
        return redirect('/payment');
    }

    public function paymentView()
    {
        $payments = Payment::all();
        $order = Order::where('id', '=', session()->get('checkout')['order_id'])->where('user_id', '=', Auth::user()->id)->first();
        return view('/transactions/payment', compact('payments', 'order'));
    }

    public function makepayment(Request $request)
    {

        if ($request->payment_type === 'credit') {

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

        // dd(session()->get('detailcheckout')['orders']);

        Order::where('id', '=', $request->order)->update([
            'status' => 'completed',
            'payment_id' => $payment->id
        ]);

        $carts = Cart::where('user_id', '=', Auth::user()->id)->forceDelete();

        session()->forget('voucher');

        return redirect('/payment-history');
    }

    public function summary(Request $request, Order $order)
    {

        $productss = json_decode($request->products);
        foreach ($productss as $product) {
            $product = Product::where('id', '=', $product->id)->first();
            $products[] = $product;
        }

        $orders = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('user_id', '=', Auth::user()->id)->get();

        $totals = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('user_id', '=', Auth::user()->id)->sum(DB::raw('carts.quantity * products.productprice'));


        $address = Address_Delivery_Users::where('id', '=', $request->address_detail)->first();
        $shipment = Shipment::where('id', '=', $request->shipment)->first();

        session()->put('detailcheckout', [
            'address_id' => $request->address_detail,
            'shipment_id' => $request->shipment,
            'orders' => $orders,
            'totals' => $totals,
            'products' => $productss
        ]);

        return redirect('/transactions/ordersummary');
    }

    public function viewSummary()
    {
        // dd(session()->get('detailcheckout')['totals']);

        $products = session()->get('checkout')['product'];
        $address = Address_Delivery_Users::where('id', '=', session()->get('detailcheckout')['address_id'])->first();
        $shipment = Shipment::where('id', '=', session()->get('detailcheckout')['address_id'])->first();
        $orders = session()->get('detailcheckout')['orders'];

        $discount = session()->get('voucher')['discount'] ?? 0;
        $totals = session()->get('detailcheckout')['totals'];
        $newTotal = ($totals + $shipment->delivery_cost) - $discount;


        return view('/transactions/ordersummary', compact('products', 'address', 'shipment', 'orders', 'totals'))->with([
            'newTotal' => $newTotal
        ]);
    }
}
