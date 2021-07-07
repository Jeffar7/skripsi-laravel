<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Brand;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function women()
    {
        $products = Product::where('gender_id', '=', 2)->get();
        $categories = Category::all();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        return view('womenpage/women', compact('products', 'categories', 'brands', 'minprice', 'maxprice'));
    }

    public function tops()
    {
        //filter product categories top for women
        $products = Product::where('gender_id', '=', 2)->where('categoryid', '1')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('womenpage/tops', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/tops', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function bottoms()
    {
        //filter product categories bottoms for women
        $products = Product::where('gender_id', '=', 2)->where('categoryid', '2')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('womenpage/bottoms', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/bottoms', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function shoes()
    {
        //filter product categories shoes for women
        $products = Product::where('gender_id', '=', 2)->where('categoryid', '3')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
        return view('womenpage/shoes', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/shoes', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function accessories()
    {
        //filter product categories shoes for men
        $products = Product::where('gender_id', '=', 2)->where('categoryid', '4')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
        return view('womenpage/accessories', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('womenpage/accessories', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function filterWomen(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2);
            
            // sorting product
            // if(isset($request->sort) && !empty($request->sort)){}
            if ($request->sort == "product_price_low_high") {
                $products->orderBy('productprice','asc');
            } elseif ($request->sort == "product_price_high_low") {
                $products->orderBy('productprice','desc');
            } elseif ($request->sort == "product_latest") {
                $products->orderBy('products.id','desc');
            } elseif ($request->sort == "product_relevance") {
                $products;
            }          

            // filter category
            if(isset($request->category) && !empty($request->category)){
                $products->whereIn('categoryid', $request->category);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            // filter size
            $sizes = $request->size_alphabet;
            if(isset($sizes) && !empty($sizes)){
                $products->whereIn('productsize', $sizes);
            }

            $size_number = $request->size_number;
            if(isset($size_number) && !empty($size_number)){
                $products->whereIn('productsize', $size_number);
            }   
  

            // filter price
            $min = $request->min;
            $max = $request->max;

            if(isset($min) && !empty($min) && isset($max) && !empty($max)){
                $products->whereBetween('productprice', [$min, $max]);
            }   
            
            $products = $products->get();

            // dd($products);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/filter_men_product', compact('products'));

        }else {
            $products = new Product();
            $products = $products->where('gender_id', '=', 2);
            $productscount = Product::where('gender_id', '=', 2)->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('womenpage/women', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('womenpage/women', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterWomenTops(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '1');
            
            // sorting product
            // if(isset($request->sort) && !empty($request->sort)){}
            if ($request->sort == "product_price_low_high") {
                $products->orderBy('productprice','asc');
            } elseif ($request->sort == "product_price_high_low") {
                $products->orderBy('productprice','desc');
            } elseif ($request->sort == "product_latest") {
                $products->orderBy('products.id','desc');
            } elseif ($request->sort == "product_relevance") {
                $products;
            }          

            // filter category
            if(isset($request->category) && !empty($request->category)){
                $products->whereIn('categoryid', $request->category);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            // filter size
            $sizes = $request->size_alphabet;
            if(isset($sizes) && !empty($sizes)){
                $products->whereIn('productsize', $sizes);
            }  

            // filter price
            $min = $request->min;
            $max = $request->max;

            if(isset($min) && !empty($min) && isset($max) && !empty($max)){
                $products->whereBetween('productprice', [$min, $max]);
            }   
            
            $products = $products->get();

            // dd($products);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/filter_men_product', compact('products'));

        }else {
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '1');
            $productscount = Product::where('gender_id', '=', 2)->where('categoryid', '1')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('womenpage/women', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('womenpage/women', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterWomenBottoms(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '2');
            
            // sorting product
            // if(isset($request->sort) && !empty($request->sort)){}
            if ($request->sort == "product_price_low_high") {
                $products->orderBy('productprice','asc');
            } elseif ($request->sort == "product_price_high_low") {
                $products->orderBy('productprice','desc');
            } elseif ($request->sort == "product_latest") {
                $products->orderBy('products.id','desc');
            } elseif ($request->sort == "product_relevance") {
                $products;
            }          

            // filter category
            if(isset($request->category) && !empty($request->category)){
                $products->whereIn('categoryid', $request->category);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            // filter size
            $sizes = $request->size_alphabet;
            if(isset($sizes) && !empty($sizes)){
                $products->whereIn('productsize', $sizes);
            }

            // filter price
            $min = $request->min;
            $max = $request->max;

            if(isset($min) && !empty($min) && isset($max) && !empty($max)){
                $products->whereBetween('productprice', [$min, $max]);
            }   
            
            $products = $products->get();

            // dd($products);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/filter_men_product', compact('products'));

        }else {
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '2');
            $productscount = Product::where('gender_id', '=', 2)->where('categoryid', '2')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('womenpage/bottoms', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('womenpage/bottoms', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterWomenShoes(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '3');
            
            // sorting product
            // if(isset($request->sort) && !empty($request->sort)){}
            if ($request->sort == "product_price_low_high") {
                $products->orderBy('productprice','asc');
            } elseif ($request->sort == "product_price_high_low") {
                $products->orderBy('productprice','desc');
            } elseif ($request->sort == "product_latest") {
                $products->orderBy('products.id','desc');
            } elseif ($request->sort == "product_relevance") {
                $products;
            }          

            // filter category
            if(isset($request->category) && !empty($request->category)){
                $products->whereIn('categoryid', $request->category);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            // filter size
            $size_number = $request->size_number;
            if(isset($size_number) && !empty($size_number)){
                $products->whereIn('productsize', $size_number);
            }   
     

            // filter price
            $min = $request->min;
            $max = $request->max;

            if(isset($min) && !empty($min) && isset($max) && !empty($max)){
                $products->whereBetween('productprice', [$min, $max]);
            }   
            
            $products = $products->get();

            // dd($products);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/filter_men_product', compact('products'));

        }else {
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '3');
            $productscount = Product::where('gender_id', '=', 2)->where('categoryid', '3')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('womenpage/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('womenpage/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterWomenAccessories(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '4');
            
            // sorting product
            // if(isset($request->sort) && !empty($request->sort)){}
            if ($request->sort == "product_price_low_high") {
                $products->orderBy('productprice','asc');
            } elseif ($request->sort == "product_price_high_low") {
                $products->orderBy('productprice','desc');
            } elseif ($request->sort == "product_latest") {
                $products->orderBy('products.id','desc');
            } elseif ($request->sort == "product_relevance") {
                $products;
            }          

            // filter category
            if(isset($request->category) && !empty($request->category)){
                $products->whereIn('categoryid', $request->category);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            // filter price
            $min = $request->min;
            $max = $request->max;

            if(isset($min) && !empty($min) && isset($max) && !empty($max)){
                $products->whereBetween('productprice', [$min, $max]);
            }   
            
            $products = $products->get();

            // dd($products);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/filter_men_product', compact('products'));

        }else {
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '4');
            $productscount = Product::where('gender_id', '=', 2)->where('categoryid', '4')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('womenpage/accessories', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('womenpage/accessories', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }
}
