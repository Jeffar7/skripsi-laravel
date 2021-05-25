<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Voucher;
use Illuminate\Http\Request;

class VouchersController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voucher = Voucher::where('code', $request->voucher_code)->first();
        if (!$voucher) {
            session()->forget('voucher');
            return redirect()->route('order.summary')->with('status', 'Invalid voucher code. Please try again.');
        }


        
        session()->put('voucher', [
            'code' => $voucher->code,
            'category' => $voucher->category,
            'discount' => $voucher->discount($request->grand_total)
        ]);

        return redirect()->route('order.summary')->with('success_status', 'Voucher has been applied!');
    }

    public function storeCheckout(Request $request)
    {
        $voucher = Voucher::where('code', $request->voucher_code)->first();
        if (!$voucher) {
            session()->forget('voucher');
            return redirect()->route('order.summary.checkout')->with('status', 'Invalid voucher code. Please try again.');
        }


        session()->put('voucher', [
            'code' => $voucher->code,
            'category' => $voucher->category,
            'discount' => $voucher->discount($request->grand_total)
        ]);

        return redirect()->route('order.summary.checkout')->with('success_status', 'Voucher has been applied!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('voucher');

        return redirect()->route('order.summary')->with('success_status', 'Voucher has been removed.');
    }

    public function destroyCheckout()
    {
        session()->forget('voucher');

        return redirect()->route('order.summary.checkout')->with('success_status', 'Voucher has been removed.');
    }
}