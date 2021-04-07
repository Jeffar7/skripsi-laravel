<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Brand;

class WomenController extends Controller
{
    public function women()
    {
        $products = Product::where('gender_id', '=', 2)->get();
        return view('womenpage/women', compact('products'));
    }

    public function tops()
    {
        //filter product categories top for women
        $tops = Product::where('gender_id', '=', 2)->where('categoryid', '1')->get();

        // count total product for women tops
        $topscount = Product::where('gender_id', '=', 2)->where('categoryid', '1')->count();

        //filter product by brand for women tops
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('1'),
                AllowedFilter::exact('gender_id')->default('2')
            ])
            ->get();

        if ($products->count() == 0)
            return view('womenpage/tops', compact('tops', 'topscount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/tops', compact('tops', 'topscount', 'brands', 'products'));
    }

    public function bottoms()
    {
        //filter product categories bottoms for women
        $bottoms = Product::where('gender_id', '=', 2)->where('categoryid', '2')->get();

        // count total product for women bottoms
        $bottomscount = Product::where('gender_id', '=', 2)->where('categoryid', '2')->count();

        //filter product by brand for women bottoms
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('2'),
                AllowedFilter::exact('gender_id')->default('2')
            ])
            ->get();

        if ($products->count() == 0)
            return view('womenpage/bottoms', compact('bottoms', 'bottomscount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/bottoms', compact('bottoms', 'bottomscount', 'brands', 'products'));
    }

    public function shoes()
    {
        //filter product categories shoes for women
        $shoes = Product::where('gender_id', '=', 2)->where('categoryid', '3')->get();

        // count total product for women shoes
        $shoescount = Product::where('gender_id', '=', 2)->where('categoryid', '3')->count();

        //filter product by brand for women shoes
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('3'),
                AllowedFilter::exact('gender_id')->default('2')
            ])
            ->get();

        if ($products->count() == 0)
            return view('womenpage/shoes', compact('shoes', 'shoescount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/shoes', compact('shoes', 'shoescount', 'brands', 'products'));
    }

    public function accessories()
    {
        //filter product categories shoes for men
        $accessories = Product::where('gender_id', '=', 2)->where('categoryid', '4')->get();

        // count total product for men shoes
        $accessoriescount = Product::where('gender_id', '=', 2)->where('categoryid', '4')->count();

        //filter product by brand for men shoes
        $brands = Brand::all();
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('categoryid')->default('4'),
                AllowedFilter::exact('gender_id')->default('2')
            ])
            ->get();

        if ($products->count() == 0)
            return view('womenpage/accessories', compact('accessories', 'accessoriescount', 'brands', 'products'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/accessories', compact('accessories', 'accessoriescount', 'brands', 'products'));
    }

    public function index()
    {
        // count total product for women
        $productscount = Product::where('gender_id', '=', 2)->count();
        //filter all product by brand and categories for women
        $categories = Category::all();

        $brands = Brand::all();

        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('brand', 'brandid'),
                AllowedFilter::exact('category', 'categoryid'),
                AllowedFilter::exact('gender_id')->default('2')
            ])
            ->get();

        if ($products->count() == 0)
            return view('womenpage/women', compact('products', 'brands', 'categories', 'productscount'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/women', compact('products', 'brands', 'categories', 'productscount'));
    }

    public function new()
    {
        return view('/womenpage/new');
    }

    public function sale()
    {
        return view('/womenpage/sale');
    }
}
