<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\product_user;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        $products = Product::all();
        return view('products\manageproduct', compact('products'));
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
        return view('products\addproduct', compact(['products', 'categories', 'brands']));
    }

    public function productwish()
    {

        $productwishs = product_user::where('user_id', '=', Auth::user()->id)->get();

        // return view('products\pagewish', compact('productwishs'));

        if ($productwishs->count() == 0)
            return view('products\pagewish', compact('productwishs'))
                ->withErrors(['no_post_result' => 'You do not have any product in wish list yet.']);
        else
            return view('products\pagewish', compact('productwishs'));
    }

    //save wish list

    public function productwishsave(Request $request)
    {
        $wishlist = product_user::all();

        if (product_user::where('product_id', '=', $request->product_id)->exists() & product_user::where('user_id', '=', $request->user_id)->exists()) {
            return back()->with('status', 'Item has already on wish list.');
        } else {

            $productwishsave = new product_user();
            $productwishsave->product_id = $request->product_id;
            $productwishsave->user_id = Auth::user()->id;
            $productwishsave->save();

            return back()->with('status', 'item successfully added to wish wish!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        unlink(public_path('uploads/products') . '/' . $product->productimage);
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
    public function addtocartt($id)
    {
        $wish = product_user::where('id', '=', $id)->first();

        if (Cart::where('product_id', '=', $wish->product_id)->exists() & Cart::where('user_id', '=', $wish->user_id)->exists()) {
            return back()->with('status', 'Item has already on cart list.');
        } else {

            Cart::create([
                'product_id' => $wish->product_id,
                'user_id' => $wish->user_id
            ]);
            return back()->with('status', 'item successfully added to cart list!');
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
}