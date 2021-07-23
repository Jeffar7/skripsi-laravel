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
    public function women(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2);
            
            // sorting product
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

            if(isset($request->color) && !empty($request->color)){
                $products->whereIn('productcolor', $request->color);
            }

            if(isset($request->material) && !empty($request->material)){
                $products->whereIn('productmaterial', $request->material);
            }
            
            $products = $products->paginate(12);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.'])->render();
            else
                return view('menpage/filter_men_product', compact('products'))->render();

        }
        else {
            $products = Product::where('gender_id', '=', 2)->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 2)->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 2)->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('womenpage/women', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function tops(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '1');
            
            // sorting product
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

            if(isset($request->color) && !empty($request->color)){
                $products->whereIn('productcolor', $request->color);
            }

            if(isset($request->material) && !empty($request->material)){
                $products->whereIn('productmaterial', $request->material);
            }
            
            $products = $products->paginate(12);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.'])->render();
            else
                return view('menpage/filter_men_product', compact('products'))->render();

        }
        else {
            $products = Product::where('gender_id', '=', 2)->where('categoryid', '1')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 2)->where('categoryid', '1')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 2)->where('categoryid', '1')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('womenpage/tops', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function bottoms(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '2');
            
            // sorting product
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

            if(isset($request->color) && !empty($request->color)){
                $products->whereIn('productcolor', $request->color);
            }

            if(isset($request->material) && !empty($request->material)){
                $products->whereIn('productmaterial', $request->material);
            }
            
            $products = $products->paginate(12);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.'])->render();
            else
                return view('menpage/filter_men_product', compact('products'))->render();

        }
        else {
            $products = Product::where('gender_id', '=', 2)->where('categoryid', '2')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 2)->where('categoryid', '2')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 2)->where('categoryid', '2')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('womenpage/bottoms', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function shoes(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '3');
            
            // sorting product
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

            if(isset($request->color) && !empty($request->color)){
                $products->whereIn('productcolor', $request->color);
            }

            if(isset($request->material) && !empty($request->material)){
                $products->whereIn('productmaterial', $request->material);
            }
            
            $products = $products->paginate(12);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.'])->render();
            else
                return view('menpage/filter_men_product', compact('products'))->render();

        }
        else {
            $products = Product::where('gender_id', '=', 2)->where('categoryid', '3')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 2)->where('categoryid', '3')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 2)->where('categoryid', '3')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('womenpage/shoes', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function accessories(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 2)->where('categoryid', '4');
            
            // sorting product
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

            if(isset($request->color) && !empty($request->color)){
                $products->whereIn('productcolor', $request->color);
            }

            if(isset($request->material) && !empty($request->material)){
                $products->whereIn('productmaterial', $request->material);
            }
            
            $products = $products->paginate(12);

            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.'])->render();
            else
                return view('menpage/filter_men_product', compact('products'))->render();

        }
        else {
            $products = Product::where('gender_id', '=', 2)->where('categoryid', '4')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 2)->where('categoryid', '4')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 2)->where('categoryid', '4')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('womenpage/accessories', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }
}
