<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\product_user;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
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

        return view('products\pagewish', compact('productwishs'));
    }

    //save wish list

    public function productwishsave(Request $request)
    {
        $wishlist = product_user::all();

        if (product_user::where('product_id', '=', $request->product_id)->exists() & product_user::where('user_id', '=', $request->user_id)->exists()) {
            return back()->with('status', 'item already on product wish');
            // return view()->route('men-tops/detail/'1);
        } else {

            $productwishsave = new product_user();
            $productwishsave->product_id = $request->product_id;
            $productwishsave->user_id = $request->user_id;
            $productwishsave->save();

            return back()->with('status', 'item successfully added to product wish');
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
        $products->productquantity = $request->productquantity;
        $products->productsize = $request->productsize;
        $products->productdescription = $request->productdescription;

        if ($request->hasFile('productimage')) {
            $file = $request->file('productimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $products->productimage = $filename;
        } else {
            return $request;
            $products->productimage = '';
        }

        $products->save();
        return redirect('manageproduct')->with('status', 'Product Successfully Added!');
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
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $product->productimage = $filename;
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
        Product::destroy($product->id);

        return redirect('manageproduct')->with('status', 'Product successfully deleted!');
    }

    public function destroywish($id)
    {
        $wishlist = product_user::where('product_id', '=', $id)->first();
        $wishlist->forceDelete();

        return redirect('product-wish')->with('status', 'Product successfully deleted');
    }

    public function destroylist($id)
    {
        $wishlist = product_user::where('product_id', '=', $id)->onlyTrashed()->first();
        $wishlist->forceDelete();

        return redirect('product-cart')->with('status', 'Product successfully deleted from cart');
    }

    //add product to cart
    public function addtocart($id)
    {
        $wishlist = product_user::where('product_id', '=', $id)->first();
        $wishlist->delete();

        return redirect('product-wish')->with('status', 'Product successfully added to cart');
    }

    public function productcart()
    {
        $cartlists = product_user::onlyTrashed()->get();

        return view('/products/pagecart', compact('cartlists'));
    }
}
