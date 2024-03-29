<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    public function homeman()
    {
        $products  = Product::all();

        return view('pages/homeman', compact('products'));
    }

    public function home()
    {
        return view('pages\pagehome');
    }

    public function itemlist()
    {
        return view('pages\itemlist');
    }

    public function itemdetail()
    {
        return view('pages\itemdetail');
    }

    public function brand()
    {
        return view('pages\brand');
    }

    public function aboutus()
    {
        return view('pages\aboutus');
    }

    public function contactus()
    {
        return view('pages\itemdetail');
    }

    public function livechat()
    {
        return view('pages\livechat');
    }

    public function transaction()
    {
        return view('pages\transaction');
    }

    public function transactionhistory()
    {
        return view('pages\transactionhistory');
    }
}
