<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Gender;
use App\product_user;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // fetch search input
        $search = $request->allsearch;

        // $product = DB::table('brands')
        // ->join('products', 'brands.id', '=', 'products.brandid')
        // ->where('productname','like','%'.$search.'%')
        // ->OrWhere('name','like','%'.$search.'%');

        $product = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brandid');

        // sorting product
        if ($request->sort == "product_price_low_high") {
            $product->orderBy('productprice', 'asc');
        } elseif ($request->sort == "product_price_high_low") {
            $product->orderBy('productprice', 'desc');
        } elseif ($request->sort == "product_latest") {
            $product->orderBy('products.id', 'desc');
        } elseif ($request->sort == "product_relevance") {
            $product;
        }

        $categories = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brandid')
            ->join('categorys', 'products.categoryid', '=', 'categorys.id')
            ->select('categorys.name', 'categorys.id')
            ->where('productname', 'like', '%' . $search . '%')
            ->orWhere('brands.name', 'like', '%' . $search . '%')
            ->groupBy('categorys.name', 'categorys.id')
            ->orderBy('categorys.id')
            ->get();

        $checked = [];

        if ($request->category) {
            $checked = $request->category;

            // $cat_filter = Category::whereIn('name', $checked);
            // $cat_id = [];
            // foreach ($cat_filter as $cf_list) {
            //     array_push($cat_id, $cf_list->id);
            // }

            $product->whereIn('categoryid', $checked);
        }

        $gender = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brandid')
            ->join('genders', 'products.gender_id', '=', 'genders.id')
            ->select('genders.productgender', 'genders.id')
            ->where('productname', 'like', '%' . $search . '%')
            ->orWhere('brands.name', 'like', '%' . $search . '%')
            ->groupBy('genders.productgender', 'genders.id')
            ->orderBy('genders.id')
            ->get();

        // if (Gender::where('id', '=', $request->gender)->exists()) {
        //     $product->where('gender_id', '=', $request->gender);
        // }
        $checkedGender = [];

        if ($request->gender) {
            $checkedGender = $request->gender;
            $product->whereIn('gender_id', $checkedGender);
        }

        $brands = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brandid')
            ->select('brands.name', 'brands.id')
            ->where('productname', 'like', '%' . $search . '%')
            ->orWhere('brands.name', 'like', '%' . $search . '%')
            ->groupBy('brands.name', 'brands.id')
            ->orderBy('brands.id')
            ->get();

        // if (Brand::where('id', '=', $request->brand)->exists()) {
        //     $product->where('brandid', '=', $request->brand);
        // }

        $checkedBrand = [];

        if ($request->brand) {
            $checkedBrand = $request->brand;
            $product->whereIn('brandid', $checkedBrand);
        }

        $product = $product->where(function ($product) use ($search) {
            if (!empty($search)) {
                $product->where('productname', 'like', '%' . $search . '%')
                    ->orWhere('brands.name', 'like', '%' . $search . '%');
            }
        });

        $minprice = $product->min('productprice');
        $maxprice = $product->max('productprice');

        if (Product::whereBetween('productprice', [$request->minprice, $request->maxprice])->exists()) {
            $product->whereBetween('productprice', [$request->minprice, $request->maxprice]);
        }

        // $sizes = DB::table('brands')
        // ->join('products', 'brands.id', '=', 'products.brandid')
        // ->select('productsize')
        // ->where('productname','like','%'.$search.'%')
        // ->orWhere('brands.name','like','%'.$search.'%')
        // ->groupBy('productsize')
        // ->get();

        // if (Product::where('productsize', '=', $request->size)->exists()) {
        //     $product->where('productsize', '=', $request->size);
        // }

        // select size product
        if ($request->size == "XS") {
            $product->where('productsize', '=', $request->size);
        } elseif ($request->size == "S") {
            $product->where('productsize', '=', $request->size);
        } elseif ($request->size == "M") {
            $product->where('productsize', '=', $request->size);
        } elseif ($request->size == "L") {
            $product->where('productsize', '=', $request->size);
        } elseif ($request->size == "XL") {
            $product->where('productsize', '=', $request->size);
        } elseif ($request->size == "XXL") {
            $product->where('productsize', '=', $request->size);
        } elseif ($request->size == "others") {
            $product->where('products.categoryid', '=', '4');
        }

        $product = $product->get();

        $productcount = count($product);

        // return to view
        if ($product->count() == 0)
            return view('/search', compact('product', 'search', 'productcount', 'categories', 'gender', 'brands', 'minprice', 'maxprice', 'checked', 'checkedGender', 'checkedBrand'))
                ->withErrors(['no_post_result' => 'No data was found.']);
        else
            return view('/search', compact('product', 'search', 'productcount', 'categories', 'gender', 'brands', 'minprice', 'maxprice', 'checked', 'checkedGender', 'checkedBrand'));
    }

    public function index()
    {
        $products = Product::all();
        return view('products/manageproduct', compact('products'));
    }

    public function home()
    {
        $others = Product::all();

        return view('/home', compact( 'others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('products/addproduct', compact(['products', 'categories', 'brands']));
    }

    public function productwish()
    {

        $productwishs = product_user::where('user_id', '=', Auth::user()->id)->get();

        // return view('products\pagewish', compact('productwishs'));

        if ($productwishs->count() == 0)
            return view('products/pagewish', compact('productwishs'))
                ->withErrors(['no_post_result' => 'You do not have any product in wish list yet.']);
        else
            return view('products/pagewish', compact('productwishs'));
    }

    //save wish list

    public function productwishsave(Request $request)
    {
        // $wishlist = product_user::all();

        $validasiwishlist = product_user::where('product_id', '=', $request->product_id)
        ->where('user_id', '=', $request->user_id)
        ->first();

        // if($request->ajax()){
            if ($validasiwishlist) {
                $validasiwishlist->delete();
                return back()->with('status', 'Item successfully removed to wish list!');
            } else {

                $productwishsave = new product_user();
                $productwishsave->product_id = $request->product_id;
                $productwishsave->user_id = Auth::user()->id;
                $productwishsave->save();

                return back()->with('status', 'Item successfully added to wish list!');
                // return view('menpage/tops_detail');
            }
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'productname' => 'required',
            'productimage' => 'required|image',
            'categoryid' => 'required',
            'gender_id' => 'required',
            'brandid' => 'required',
            'sku' => 'required',
            'productprice' => 'required|numeric',
            'productquantity' => 'required|numeric',
            'productsize' => 'required',
            'productdescription' => 'required'
        ]);

        if ($request->gender_id == "Male") {
            $request->gender_id = 1;
        } else {
            $request->gender_id = 2;
        }

        $products = new Product;
        $products->productname = $request->productname;
        // $products->productimage = $request->productimage;
        $products->categoryid = $request->categoryid;
        $products->brandid = $request->brandid;
        $products->gender_id = $request->gender_id;
        $products->productprice = $request->productprice;
        $products->sku = $request->sku;
        $products->productquantity = $request->productquantity;
        $products->productsize = $request->productsize;
        $products->productdescription = $request->productdescription;

        if ($request->hasFile('productimage')) {
            $file = $request->file('productimage');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Products/', $filenamesave);
            $products->productimage = $filenamesave;
        } else {
            return $request;
            $products->productimage = '';
        }

        $products->save();
        return redirect('manageproduct')->with('status', 'Item Successfully Added!');
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
    public function edit(Product $product)
    {


        $brands = Brand::all();
        $categories = Category::all();
        return view('products.editproduct', compact(['product', 'brands', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        //update gender_id product belom

        $request->validate([
            'productname' => 'required',
            'productimage' => 'required|image',
            'categoryid' => 'required',
            'gender_id' => 'required',
            'brandid' => 'required',
            'sku' => 'required',
            'productprice' => 'required|numeric',
            'productquantity' => 'required|numeric',
            'productsize' => 'required',
            'productdescription' => 'required'
        ]);

        if ($request->gender_id == "Male") {
            $request->gender_id = 1;
        } else {
            $request->gender_id = 2;
        }

        if ($request->hasFile('productimage')) {
            $file = $request->file('productimage');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Products/', $filenamesave);
            $product->productimage = $filenamesave;
        } else {
            return $request;
            $product->productimage = '';
        }

        Product::where('id', $product->id)
            ->update([
                'categoryid' => $request->categoryid,
                'brandid' => $request->brandid,
                'gender_id' => $request->gender_id,
                'productname' => $request->productname,
                'productprice' => $request->productprice,
                'sku' => $request->sku,
                'productquantity' => $request->productquantity,
                'productsize' => $request->productsize,
                'productdescription' => $request->productdescription,
                'productimage' => $product->productimage
            ]);

        return redirect('/manageproduct')->with('status', 'Product successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // unlink(public_path('uploads/products') . '/' . $product->productimage);
        Product::destroy($product->id);

        return redirect('manageproduct')->with('status', 'Product successfully deleted!');
    }

    public function destroywish($id)
    {
        $wishlist = product_user::where('id', '=', $id)->first();
        $wishlist->forceDelete();

        return redirect('product-wish')->with('status', 'Product successfully deleted');
    }

    public function destroylist($id)
    {
        $wishlist = Cart::where('id', '=', $id)->first();
        $wishlist->forceDelete();

        return redirect('product-cart')->with('status', 'Product successfully deleted from cart');
    }

    //add product to cart
    public function addtocart($id)
    {
        $wishlist = product_user::where('id', '=', $id)->first();
        $wishlist->delete();

        return redirect('product-wish')->with('status', 'Product successfully added to cart');
    }

    //new cart
    public function addtocartt($id, Request $request)
    {
        $wish = product_user::where('id', '=', $id)->first();

        if (Cart::where('product_id', '=', $wish->product_id)->exists() & Cart::where('user_id', '=', $wish->user_id)->exists()) {
            return back()->with('status', 'Item has already on cart list.');
        } else {

            Cart::create([
                'product_id' => $wish->product_id,
                'user_id' => $wish->user_id,
                'quantity' => $request->quantity
            ]);
            return back()->with('status', 'Item successfully added to cart list!');
        }
    }

    //add product to cart via product detail

    public function addtocartviadetail(Request $request)
    {
        //validation for not add same product
        if (Cart::where('product_id', '=', $request->product_id)->exists() & Cart::where('user_id', '=', $request->user_id)->exists()) {
            return back()->with('status', 'Item has already on cart list.');
        } else {

            $productcartsave = new Cart();
            $productcartsave->product_id = $request->product_id;
            $productcartsave->user_id = $request->user_id;
            $productcartsave->quantity = $request->quantity;
            $productcartsave->save();

            return back()->with('status', 'Item successfully added to cart list!');
        }
    }

    //count item cart
    static function countItemCart()
    {
        return Cart::where('user_id', '=', Auth::user()->id)->count();
    }

    public function productcart()
    {
        $cartlists = Cart::where('user_id', '=', Auth::user()->id)->get();

        // return view('/products/pagecart', compact('cartlists'));

        if ($cartlists->count() == 0)
            return view('/products/pagecart', compact('cartlists'))
                ->withErrors(['no_post_result' => 'You do not have any product in cart yet.']);
        else
            return view('/products/pagecart', compact('cartlists'));
    }

    public function tops()
    {
        //filter product categories top for men
        $products = Product::where('categoryid', '1')->get();
        $brands = Brand::all();
        $genders = Gender::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('products/top', compact('products', 'brands', 'minprice', 'maxprice', 'genders'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('products/top', compact('products', 'brands', 'minprice', 'maxprice', 'genders'));
    }

    public function bottoms()
    {
        //filter product categories top for men
        $products = Product::where('categoryid', '2')->get();
        $brands = Brand::all();
        $genders = Gender::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('products/bottoms', compact('products', 'brands', 'minprice', 'maxprice', 'genders'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('products/bottoms', compact('products', 'brands', 'minprice', 'maxprice', 'genders'));
    }

    public function shoes()
    {
        //filter product categories top for men
        $products = Product::where('categoryid', '3')->get();
        $brands = Brand::all();
        $genders = Gender::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('products/shoes', compact('products', 'brands', 'minprice', 'maxprice', 'genders'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('products/shoes', compact('products', 'brands', 'minprice', 'maxprice', 'genders'));
    }

    public function accessories()
    {
        //filter product categories top for men
        $products = Product::where('categoryid', '4')->get();
        $brands = Brand::all();
        $genders = Gender::all();
        $minprice = $products->min('productprice');
        $maxprice = $products->max('productprice');

        if ($products->count() == 0)
            return view('products/accessories', compact('products', 'brands', 'minprice', 'maxprice', 'genders'))
                ->withErrors(['no_post_result' => 'No data found with current filters.']);
        else
            return view('products/accessories', compact('products', 'brands', 'minprice', 'maxprice', 'genders'));
    }

    public function filterTops(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('categoryid', '1');
            
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
            if(isset($request->gender) && !empty($request->gender)){
                $products->whereIn('gender_id', $request->gender);
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
            $products = $products->where('categoryid', '1');
            $productscount = Product::where('categoryid', '1')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('products/top', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('products/top', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterBottoms(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('categoryid', '2');
            
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
            if(isset($request->gender) && !empty($request->gender)){
                $products->whereIn('gender_id', $request->gender);
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
            $products = $products->where('categoryid', '2');
            $productscount = Product::where('categoryid', '2')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('products/bottoms', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('products/bottoms', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterShoes(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('categoryid', '3');
            
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
            if(isset($request->gender) && !empty($request->gender)){
                $products->whereIn('gender_id', $request->gender);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            // filter size
            $sizes = $request->size_number;
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
            $products = $products->where('categoryid', '3');
            $productscount = Product::where('categoryid', '3')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('products/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('products/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }

    public function filterAccessories(Request $request)
    {
        if($request->ajax()){
            $products = new Product();
            $products = $products->where('categoryid', '4');
            
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
            if(isset($request->gender) && !empty($request->gender)){
                $products->whereIn('gender_id', $request->gender);
            }

            // filter product
            if(isset($request->brand) && !empty($request->brand)){
                $products->whereIn('brandid', $request->brand);
            }

            $min = $request->min;
            $max = $request->max;

            if(isset($min) && !empty($min) && isset($max) && !empty($max)){
                $products->whereBetween('productprice', [$min, $max]);
            }   
            
            $products = $products->get();
            
            if ($products->count() == 0)
                return view('menpage/filter_men_product', compact('products'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('menpage/filter_men_product', compact('products'));

        }else {
            $products = new Product();
            $products = $products->where('categoryid', '4');
            $productscount = Product::where('categoryid', '4')->count();

            // retrieve and display data categories, genders, brands
            $productFilters = Product::productFilter();
            $categories = $productFilters["categories"];
            $genders = $productFilters["genders"];
            $brands = $productFilters["brands"];

            $products = $products->get();

            if ($products->count() == 0)
                return view('products/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'))
                    ->withErrors(['no_post_result' => 'No data found with current filters.']);
            else
                return view('products/shoes', compact('products', 'brands', 'categories', 'productscount', 'genders'));

        }
    }
}
