<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use App\Brand;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function men()
    {
        $products = Product::where('gender_id', '=', 1)->get();
        return view('menpage/men', compact('products'));
    }

    public function bestseller()
    {
    $products = Product::all();
        return view('/home', compact('products'));
    }

    public function tops()
    {
        //filter product categories top for men
        $tops = Product::where('gender_id', '=', 1)->where('categoryid', '1')->get();

        // count total product for men tops
        $topscount = Product::where('gender_id', '=', 1)->where('categoryid', '1')->count();

        //filter product by brand for men tops
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('1'),
                AllowedFilter::exact('gender_id')->default('1')
            ])
            ->get();

        if ($products->count() == 0)
            return view('menpage/tops', compact('tops', 'topscount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/tops', compact('tops', 'topscount', 'brands', 'products'));
    }

    public function topsdetail(Product $product)
    {
        $product_tops = Product::where('id', '=', $product->id)->first();
        $reviews = Review::all();


        return view('/menpage/tops_detail', compact('product_tops', 'reviews'));
    }

    public function bottoms()
    {
        //filter product categories bottoms for men
        $bottoms = Product::where('gender_id', '=', 1)->where('categoryid', '2')->get();

        // count total product for men bottoms
        $bottomscount = Product::where('gender_id', '=', 1)->where('categoryid', '2')->count();

        //filter product by brand for men bottoms
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('2'),
                AllowedFilter::exact('gender_id')->default('1')
            ])
            ->get();

        if ($products->count() == 0)
            return view('menpage/bottoms', compact('bottoms', 'bottomscount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/bottoms', compact('bottoms', 'bottomscount', 'brands', 'products'));
    }

    public function shoes()
    {
        //filter product categories shoes for men
        $shoes = Product::where('gender_id', '=', 1)->where('categoryid', '3')->get();

        // count total product for men shoes
        $shoescount = Product::where('gender_id', '=', 1)->where('categoryid', '3')->count();

        //filter product by brand for men shoes
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('3'),
                AllowedFilter::exact('gender_id')->default('1')
            ])
            ->get();

        if ($products->count() == 0)
            return view('menpage/shoes', compact('shoes', 'shoescount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/shoes', compact('shoes', 'shoescount', 'brands', 'products'));
    }

    public function accessories()
    {
        //filter product categories shoes for men
        $accessories = Product::where('gender_id', '=', 1)->where('categoryid', '4')->get();

        // count total product for men shoes
        $accessoriescount = Product::where('gender_id', '=', 1)->where('categoryid', '4')->count();

        //filter product by brand for men shoes
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('4'),
                AllowedFilter::exact('gender_id')->default('1')
            ])
            ->get();

        if ($products->count() == 0)
            return view('menpage/accessories', compact('accessories', 'accessoriescount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/accessories', compact('accessories', 'accessoriescount', 'brands', 'products'));
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
        // count total product for men
        $productscount = Product::where('gender_id', '=', 1)->count();

        //filter all product by brand and categories for men
        $categories = Category::all();

        $brands = Brand::all();

        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('category', 'categoryid'),
                AllowedFilter::exact('gender_id')->default('1')
            ])
            ->get();

        if ($products->count() == 0)
            return view('menpage/men', compact('products', 'brands', 'categories', 'productscount'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/men', compact('products', 'brands', 'categories', 'productscount'));
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