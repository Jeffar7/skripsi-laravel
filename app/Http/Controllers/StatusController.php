<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FlashData;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\order_product;
use App\Payment;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{

    public function payment_history()
    {
        $all_order = Order::where('user_id', '=', Auth::user()->id)->get();
        // return view('transactions/payment_history', compact('all_order'));
        if ($all_order->count() == 0)
            return view('transactions/payment_history', compact('all_order'))->withErrors(['no_post_result' => 'No data history found.']);
        else
            return view('transactions/payment_history', compact('all_order'));
    }

    public function waiting_for_review()
    {

        //GET ALL ORDER THAT STATUS IS_REVIEW IS NO
        $all_order = DB::table('order_product')
            ->join('orders', 'order_product.order_id', '=', 'orders.id')
            ->join('products', 'order_product.product_id', '=', 'products.id')
            ->where('is_review', '=', 'no')
            ->where('status', '=', 'completed')
            ->where('user_id', '=', Auth::user()->id)
            ->get();

        // return view('/transactions/waiting_for_review', compact('all_order'));

        if ($all_order->count() == 0)
            return view('transactions/waiting_for_review', compact('all_order'))->withErrors(['no_post_result' => 'No data review found.']);
        else
            return view('transactions/waiting_for_review', compact('all_order'));
    }

    public function product_review_detail($id)
    {
        $product = Product::where('id', '=', $id)->first();

        return view('/transactions/product_review_detail', compact('product'));
    }

    public function product_submit_review(Request $request)
    {

        //STORE DATA FROM FORM TO TABLE REVIEW
        $review = new Review();
        $review->product_id = $request->product_id;
        $review->user_id = Auth::user()->id;
        $review->review_description = $request->review_description;
        $review->rating_score = $request->selected_rating;
        $review->save();

        //UPDATE IS_REVIEW TO YES AFTER SUBMIT REVIEW
        DB::table('order_product')->where('product_id', '=', $request->product_id)->update([
            'is_review' => 'yes'
        ]);

        return redirect('/waiting-for-review')->with('status', 'Succes give review');
    }

    public function payment_history_detail($id)
    {
        $order_product_detail = DB::table('order_product')
            ->join('products', 'order_product.product_id', '=', 'products.id')
            ->where('order_id', '=', $id)->get();
        // dd($order_product_detail);
        return view('/transactions/payment_history_detail', compact('order_product_detail'));
    }

    public function continue_checkout($id)
    {
        $order = Order::find($id);
        $payments = Payment::all();
        $flashData = FlashData::where('user_id', '=', Auth::user()->id)->first();
        $quantityBuy = $flashData->quantity;

        if($order->address_id == 0 && $order->is_buy_now == 1)
            return view('/transactions/continue/buy-now', compact(''));
        else if($order->address_id == 0 && $order->is_buy_now == 0)
            return view('/transactions/continue/checkout', compact());
        else if($order->address_id == 1 && $order->is_buy_now == 1)
            return view('/transactions/continue/buy-now/payment', compact());
        else if($order->address_id == 1 && $order->is_buy_now == 0)
            return view('/transactions/continue/checkout', compact());
    }

    public function buyAgain(Product $product)
    {
        // dd($product->id);

        if (Cart::where('product_id', '=', $product->id)->exists() & Cart::where('user_id', '=', Auth::user()->id)->exists()) {
            return back()->with('status', 'Item has already on cart list.');
        } else {
            $productcartsave = new Cart();
            $productcartsave->product_id = $product->id;
            $productcartsave->user_id = Auth::user()->id;
            $productcartsave->quantity = 1;
            $productcartsave->save();

            return back()->with('status', 'Item successfully added to cart list!');
        }
    }
}