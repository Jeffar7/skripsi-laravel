<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gender;
use App\Product;
use App\Review;
use Illuminate\Http\Request;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function men()
    {
        $products = Product::where('gender_id', '=', 1)->get();
        return view('menpage/men', compact('products'));
    }

    public function tops()
    {
        $tops = Category::where('name', 'TOP')->get();
        return view('/menpage/tops', compact('tops'));
    }

    public function topsdetail(Product $product)
    {
        $product_tops = Product::where('id', '=', $product->id)->first();
        $reviews = Review::all();

        return view('/menpage/tops_detail', compact('product_tops', 'reviews'));
    }

    public function bottoms()
    {
        $bottoms = Category::where('name', 'BOTTOM')->get();
        return view('/menpage/bottoms', compact('bottoms'));
    }

    public function shoes()
    {

        $shoes = Category::where('name', 'SHOES')->get();
        return view('/menpage/shoes', compact('shoes'));
    }

    public function accessories()
    {
        $accessories = Category::where('name', 'ACCESSORIES')->get();
        return view('/menpage/accessories', compact('accessories'));
    }

    public function new()
    {
        return view('/menpage/new');
    }

    public function sale()
    {
        return view('/menpage/sale');
    }


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
