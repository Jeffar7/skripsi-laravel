<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

        return view('brands\managebrand',compact('brands'));
    }

    public function allbrand()
    {
        $brands = Brand::all();

        return view('brands\allbrand',compact('brands'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands\addbrand');
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
            'name' => 'required',
            'picture' => 'required'
        ]);

        $brand = new Brand;
        $brand->name = $request->name;
        $brand->picture = $request->picture;
        $brand->owner = $request->owner;
        $brand->website = $request->website;
        $brand->about = $request->about;
        $brand->save();

        return redirect('managebrand')->with('status','Brand Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brands.detailbrand',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.editbrand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {

        // $request->validate([
        //     'name' => 'required | unique:posts',
        //     'picture' => 'required',
        //     'owner' => 'required',
        //     'website' => 'required',
        //     'about' => 'required'
        // ]);

        Brand::where('id', $brand->id)
        ->update([
            'name' => $request->name,
            'picture' => $request->picture,
            'owner' => $request->owner,
            'website' => $request->website,
            'about' => $request->about,

        ]);

        return redirect('managebrand')->with('status','brand successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Brand::destroy($brand->id);

        return redirect('managebrand')->with('status','Brand successfully deleted!');
    }
}
