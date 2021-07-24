<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use App\Brand;
use App\ImageDetail;
use App\product_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function men(Request $request)
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
            $products = Product::where('gender_id', '=', 1)->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 1)->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 1)->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('menpage/men', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function bestseller()
    {
        $others = Product::all();
        return view('/bestseller', compact('others'));
    }

    public function tops(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '1');
            
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
            $products = Product::where('gender_id', '=', 1)->where('categoryid', '1')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 1)->where('categoryid', '1')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 1)->where('categoryid', '1')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('menpage/tops', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function topsdetail(Product $product)
    {
        $product_tops = Product::where('id', '=', $product->id)->first();
        $reviews = Review::all();

        $image_detail = ImageDetail::where('id', '=', $product->id)->first();

        $others = Product::where('categoryid', '=', $product_tops->category->id)
            ->where('gender_id', '=', $product_tops->gender->id)->get();

        $itemuser = Auth::user();
        $validasiwishlist = product_user::where('product_id', '=', $product_tops->id)
        ->where('user_id', '=', $itemuser->id)
        ->first();

        return view('/menpage/tops_detail', compact('product_tops', 'reviews', 'others', 'image_detail', 'validasiwishlist'));
    }

    public function bottoms(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '2');
            
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
            $products = Product::where('gender_id', '=', 1)->where('categoryid', '2')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 1)->where('categoryid', '2')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 1)->where('categoryid', '2')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('menpage/bottoms', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function shoes(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '3');
            
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
            $products = Product::where('gender_id', '=', 1)->where('categoryid', '3')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 1)->where('categoryid', '3')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 1)->where('categoryid', '3')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('menpage/shoes', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }

    public function accessories(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('gender_id', '=', 1)->where('categoryid', '4');
            
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
            $products = Product::where('gender_id', '=', 1)->where('categoryid', '4')->paginate(12);
            $categories = Category::all();
            $brands = Brand::all();
            $minprice = $products->min('productprice');
            $maxprice = $products->max('productprice');
            $colors =  Product::select('productcolor')->where('gender_id', '=', 1)->where('categoryid', '4')->groupBy('productcolor')->get();
            $materials =  Product::select('productmaterial')->where('gender_id', '=', 1)->where('categoryid', '4')->groupBy('productmaterial')->get();
            $productscount = $products->total();

            return view('menpage/accessories', compact('products', 'categories', 'brands', 'minprice', 'maxprice', 'colors', 'materials', 'productscount'));
        }
    }
}