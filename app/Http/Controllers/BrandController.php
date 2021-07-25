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

        return view('brands.managebrand', compact('brands'));
    }

    public function allbrand()
    {
        $brands = Brand::all();

        // return view('brands\allbrand',compact('brands'));

        $categories = Brand::orderBy('name', 'asc')->get();

        $groups = $categories->reduce(function ($carry, $category) {

            // get first letter
            $first_letter = $category['name'][0];

            if (!isset($carry[$first_letter])) {
                $carry[$first_letter] = [];
            }

            $carry[$first_letter][] = $category;

            return $carry;
        }, []);

        return view('brands.allbrand', compact('brands'))->with('groups', $groups);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.addbrand');
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
            'name' => 'required|unique:brands',
            'picture' => 'required',
            'detail_picture' => 'required',
            'owner' => 'required',
            'website' => 'required',
            'about' => 'required',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        // $brand->picture = $request->picture;
        $brand->owner = $request->owner;
        $brand->website = $request->website;
        $brand->about = $request->about;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $detail_picture = $request->file('detail_picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenameWithoutExtdetail_picture = $detail_picture->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $filenamedetail_picture = $filenameWithoutExtdetail_picture;
            $file->storeAs('public/images/Brands/', $filenamesave);
            $file->storeAs('public/images/Brands/', $filenamedetail_picture);
            $brand->picture = $filenamesave;
            $brand->detail_picture = $filenamedetail_picture;
        } else {
            return $request;
            $brand->picture = '';
            $brand->detail_picture = '';
        }

        $brand->save();
        return redirect('/managebrand')->with('status', 'Brand Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brands.detailbrand', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.editbrand', compact('brand'));
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
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Brands/', $filenamesave);
            $brand->picture = $filenamesave;
        } else {
            return $request;
            $brand->picture = '';
        }

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
                'picture' => $brand->picture,
                'owner' => $request->owner,
                'website' => $request->website,
                'about' => $request->about
            ]);

        return redirect('/managebrand')->with('status', 'brand successfully updated!');
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

        return redirect('managebrand')->with('status', 'Brand successfully deleted!');
    }
}
