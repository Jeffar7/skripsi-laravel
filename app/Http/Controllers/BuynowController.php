<?php

namespace App\Http\Controllers;

use App\Address_Delivery_Users;
// use App\Notifications\UserNotification;
use App\FlashData;
use App\Product;
use App\Shipment;
use App\Order;
use App\Payment;
use App\order_product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Stripe;
use Session;


class BuynowController extends Controller
{
    public function buynow($id)
    {
        // function ini ga kepake
        dd($id);
        $addresses = Address_Delivery_Users::where('user_id', 'php =', Auth::user()->id)->get();
        $shipments = Shipment::all();
        $products = Product::where('id', '=', $id)->first();

        return view('/transactions/delivery_buy_now', compact('addresses', 'shipments', 'products'));
    }


    public function makepayment(Request $request)
    {
        //    dd($request->all());

        $user = User::find(Auth::user()->id);
        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();
        $amount_order = Order::where('id', '=', $flashData->order_id)->first();
        // dd($flashData);
        $payment = new Payment();

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

            // validation STRIPE
            try {
                $charge =  Stripe::charges()->create([
                    'currency' => 'IDR',
                    'source' => $request->stripeToken,
                    'description' => 'Payment Credit',
                    'amount' => $amount_order->grand_total,
                    'receipt_email' => $user->email,
                    'metadata' => [
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name
                    ],
                ]);
            } catch (CardErrorException $e) {
                return back()->withErrors('Error! ' . $e->getMessage());
            }

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

            $payment->payment_type = 'debit';
            $payment->first_name = $request->first_name;
            $payment->last_name = $request->last_name;
            $payment->bank_name = $request->bank_name;
            $payment->bank_type = $request->bank_type;
            $payment->account_number = $request->account_number;
            $payment->user_id = Auth::user()->id;
            $payment->save();
        }

        Order::where('id', '=', $flashData->order_id)->update([
            'status' => 'completed',
            'payment_id' => $payment->id
        ]);

        FlashData::where('user_id', '=', Auth::user()->id)->update([
            'payment_id' => $payment->id
        ]);

        //forget session continue after completed payment
        session()->forget('continueCheckOut');

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

    public function buyNowQuantity(Request $request, Product $product)
    {

        // $is_exist = FlashData::find($request->product_id);
        $is_exist = FlashData::where('user_id', '=', Auth::user()->id)->first();

        if ($is_exist) {
            DB::table('flashdata')
                ->where('user_id', '=', Auth::user()->id)
                ->delete();
        }
        $flashData = new FlashData();
        $flashData->product_id = $request->product_id;
        $flashData->quantity = $request->quantity;
        $flashData->user_id = Auth::user()->id;
        $flashData->save();

        return redirect('/transactions/delivery_buy_now');
    }

    public function assignAddressDelivery()
    {
        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();

        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();
        $detailaddresses = null;
        $shipments = Shipment::all();
        $products = Product::where('id', '=', $flashData->product_id)->first();
        $quantity = $flashData->quantity;
        $product_id = $flashData->product_id;
        // compact('addresses', 'detailaddresses', 'shipments', 'products', 'quantityBuy')

        return view('/transactions/delivery_buy_now', compact('addresses', 'detailaddresses', 'shipments', 'products', 'quantity', 'product_id'));
    }

    public function summary(Request $request)
    {
        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();
        $flashData->update([
            'address_id' => $request->address_detail,
            'shipment_id' => $request->shipment
        ]);
        $flashData->save();

        return redirect('/transactions/ordersummary_buy_now');
    }

    public function orderSummaryBuyNow()
    {
        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();

        $product = Product::where('id', $flashData->product_id)->first();
        $address = Address_Delivery_Users::where('id', '=', $flashData->address_id)->first();
        $shipment = Shipment::where('id', '=', $flashData->shipment_id)->first();
        $quantityBuy = $flashData->quantity;


        if (isset(session()->get('voucher')['discount']))
            $discount = session()->get('voucher')['discount'];
        else
            $discount = 0;

        $newTotal = (($product->productprice * $quantityBuy) + $shipment->delivery_cost) - $discount;

        return view('/transactions/ordersummary_buy_now', compact('product', 'address', 'shipment', 'quantityBuy'))->with([
            'newTotal' => $newTotal
        ]);
    }

    public function payment(Request $request)
    {

        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();
        $product = Product::where('id', $flashData->product_id)->first();
        $quantityBuy = $flashData->quantity;

        // Place Order Summary to Order Table

        if (!session()->has('continueCheckOut')) {

            $order = new Order();
            $order->order_number = 'ORD-' . strtoupper(mt_rand(1000000000, 9999999999));
            $order->status = 'pending';
            $order->user_id = Auth::user()->id;
            $order->grand_total = $request->total;
            $order->address_id = $request->address;
            // $order->payment_id = $request->payment;
            $order->shipment_id = $request->shipment;
            $order->notes = $request->notes;
            $order->is_buy_now = 1;
            $order->save();
            $flashData->update([
                'order_id' => $order->id
            ]);

            session()->forget('voucher');

            //store product to order_product
            $order_product = new order_product();
            $order_product->product_id = $request->product;
            $order_product->order_id = $order->id;
            $order_product->is_review = 'no';
            $order_product->quantity = $quantityBuy;
            $order_product->subtotal = $product->productprice * $quantityBuy;
            $order_product->save();
        } else
            $flashData->update([
                'order_id' => session()->get('continueCheckOut')['order_id']
            ]);

        $payments = Payment::all();

        return redirect('/transactions/payment_buy_now');
    }

    public function paymentBuyNow()
    {
        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();
        $order = Order::where('id', '=', $flashData->order_id)->first();

        $payments = Payment::all();
        $quantityBuy = $flashData->quantity;

        return view('/transactions/payment_buy_now', compact('payments', 'order', 'quantityBuy'));
    }
}
