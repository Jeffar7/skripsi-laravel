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
        $categories = Category::all();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        return view('menpage/men', compact('products', 'categories', 'brands', 'minprice', 'maxprice'));
    }

    public function bestseller()
    {
        $products = Product::all();
        return view('/home', compact('products'));
    }

    public function tops()
    {
        //filter product categories top for men
        $products = Product::where('gender_id', '=', 1)->where('categoryid', '1')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('menpage/tops', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/tops', compact('products', 'brands', 'minprice', 'maxprice'));
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
        $products = Product::where('gender_id', '=', 1)->where('categoryid', '2')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('menpage/bottoms', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/bottoms', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function shoes()
    {
        //filter product categories shoes for men
        $products = Product::where('gender_id', '=', 1)->where('categoryid', '3')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('menpage/bottoms', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/bottoms', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function accessories()
    {
        //filter product categories shoes for men
        $products = Product::where('gender_id', '=', 1)->where('categoryid', '4')->get();
        $brands = Brand::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('menpage/accessories', compact('products', 'brands', 'minprice', 'maxprice'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('menpage/accessories', compact('products', 'brands', 'minprice', 'maxprice'));
    }

    public function new()
    {
        return view('/menpage/new');
    }

    public function sale()
    {
        return view('/menpage/sale');
    }

    public function filterMen(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1);
            
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

            // filter size
            if ($request->size_alphabet == "XS") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "S") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "M") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "L") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XL") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XXL") {
                $products->whereIn('productsize', $request->size_alphabet);
            }     

            // filter price
            $min = $request->min_price_min;
            $max = $request->max_price_max;
            if (Product::whereBetween('products.productprice', [$min, $max])->exists()) {
                $products = $products->whereBetween('products.productprice', [$min, $max]);
                // $products->where('products.productprice', '>=', $min)->where('products.productprice', '<=', $max);
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
            $products = $products->where('gender_id', '=', 1);
            $productscount = Product::where('gender_id', '=', 1)->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('menpage/men', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/men', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterMenTops(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '1');
            
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
            if ($request->size_alphabet == "XS") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "S") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "M") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "L") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XL") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XXL") {
                $products->whereIn('productsize', $request->size_alphabet);
            }     

            // filter price
            $min = $request->min_price_min;
            $max = $request->max_price_max;
            if (Product::whereBetween('products.productprice', [$min, $max])->exists()) {
                $products = $products->whereBetween('products.productprice', [$min, $max]);
                // $products->where('products.productprice', '>=', $min)->where('products.productprice', '<=', $max);
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
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '1');
            $productscount = Product::where('gender_id', '=', 1)->where('categoryid', '1')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('menpage/tops', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/tops', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterMenBottoms(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '2');
            
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
            if ($request->size_alphabet == "XS") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "S") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "M") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "L") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XL") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XXL") {
                $products->whereIn('productsize', $request->size_alphabet);
            }     

            // filter price
            $min = $request->min_price_min;
            $max = $request->max_price_max;
            if (Product::whereBetween('products.productprice', [$min, $max])->exists()) {
                $products = $products->whereBetween('products.productprice', [$min, $max]);
                // $products->where('products.productprice', '>=', $min)->where('products.productprice', '<=', $max);
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
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '2');
            $productscount = Product::where('gender_id', '=', 1)->where('categoryid', '2')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('menpage/bottoms', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/bottoms', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterMenShoes(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '3');
            
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
            if ($request->size_alphabet == "XS") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "S") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "M") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "L") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XL") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XXL") {
                $products->whereIn('productsize', $request->size_alphabet);
            }     

            // filter price
            $min = $request->min_price_min;
            $max = $request->max_price_max;
            if (Product::whereBetween('products.productprice', [$min, $max])->exists()) {
                $products = $products->whereBetween('products.productprice', [$min, $max]);
                // $products->where('products.productprice', '>=', $min)->where('products.productprice', '<=', $max);
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
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '3');
            $productscount = Product::where('gender_id', '=', 1)->where('categoryid', '3')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('menpage/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterMenAccessories(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '4');
            
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
            if ($request->size_alphabet == "XS") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "S") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "M") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "L") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XL") {
                $products->whereIn('productsize', $request->size_alphabet);
            } elseif ($request->size_alphabet == "XXL") {
                $products->whereIn('productsize', $request->size_alphabet);
            }     

            // filter price
            $min = $request->min_price_min;
            $max = $request->max_price_max;
            if (Product::whereBetween('products.productprice', [$min, $max])->exists()) {
                $products = $products->whereBetween('products.productprice', [$min, $max]);
                // $products->where('products.productprice', '>=', $min)->where('products.productprice', '<=', $max);
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
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '4');
            $productscount = Product::where('gender_id', '=', 1)->where('categoryid', '4')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('menpage/accessories', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/accessories', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }
}