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
        return view('products\addproduct', compact(['products', 'categories']));
    }

    public function productwish()
    {
        $productwishs = product_user::where('user_id', '=', Auth::user()->id)->get();
        // foreach($productwishs as $productwish)
        // dd($productwish->product->brand->name);
        return view('products\pagewish', compact('productwishs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product;
        $products->productname = $request->productname;
        // $products->productimage = $request->productimage;
        $products->categoryid = $request->categoryid;
        $products->brandid = $request->brandid;
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
}
