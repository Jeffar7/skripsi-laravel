<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\order_product;
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

        return view('/transactions/waiting_for_review', compact('all_order'));
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
}
