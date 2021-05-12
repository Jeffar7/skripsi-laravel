<?php

namespace App\Http\Controllers;

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
            // return redirect()->route('order.summary.buy.now')->withErrors('Invalid voucher code. Please try again.');
            return redirect()->back()->withErrors('Invalid voucher code. Please try again.');
        }

        return 1;
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
