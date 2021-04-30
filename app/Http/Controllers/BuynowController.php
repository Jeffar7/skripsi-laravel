<?php

namespace App\Http\Controllers;

use App\Address_Delivery_Users;
use App\Product;
use App\Shipment;
use App\Order;
use App\Payment;
use App\order_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuynowController extends Controller
{
    public function buynow($id)
    {
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $shipments = Shipment::all();
        $products = Product::where('id', '=', $id)->first();

        return view('/transactions/delivery_buy_now', compact('addresses', 'shipments', 'products', 'products'));
    }

    public function summary(Request $request)
    {

        $product = Product::where('id', $request->product)->first();
        $address = Address_Delivery_Users::where('id', '=', $request->address_detail)->first();
        $shipment = Shipment::where('id', '=', $request->shipment)->first();

        return view('/transactions/ordersummary_buy_now', compact('product', 'address', 'shipment'));
    }

    public function payment(Request $request)
    {
        // Place Order Summary to Order Table

        $order = new Order();
        $order->order_number = 'ORD-' . strtoupper(mt_rand(1000000000, 9999999999));
        $order->status = 'pending';
        $order->user_id = Auth::user()->id;
        $order->grand_total = "10000";
        $order->address_id = $request->address;
        // $order->payment_id = $request->payment;
        $order->shipment_id = $request->shipment;
        $order->save();

        //store product to order_product
        $order_product = new order_product();
        $order_product->product_id = $request->product;
        $order_product->order_id = $order->id;
        $order_product->is_review = 'no';
        $order_product->save();


        $payments = Payment::all();
        return view('/transactions/payment_buy_now', compact('payments', 'order'));
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

        return redirect('/payment-history');
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
        return back();
        // return redirect()->action([OrderController::class, 'checkout']);
    }
}
