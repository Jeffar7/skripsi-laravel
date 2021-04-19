<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Raffle;
use App\RaffleCategory;
use Illuminate\Http\Request;

class RaffleController extends Controller
{

    public function raffledetail(Raffle $raffle)
    {

        return view('\raffles\raffle_detail', compact('raffle'));
    }

    public function raffle()
    {
        $raffles = Raffle::paginate(3);
        return view('\raffles\raffle', compact('raffles'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raffles = Raffle::all();
        return view('\raffles\manageraffles', compact('raffles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categoryraffles = RaffleCategory::all();

        return view('\raffles\addraffle', compact('brands', 'categoryraffles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raffle = new Raffle();
        $raffle->rafflename = $request->rafflename;
        $raffle->raffledescription = $request->raffledescription;
        $raffle->raffleprice = $request->raffleprice;
        // $raffle->raffleimage = $request->raffleimage;
        $raffle->rafflequantity = $request->rafflequantity;
        $raffle->rafflereleasedate = $request->rafflereleasedate;
        $raffle->brand_id = $request->brand_id;
        $raffle->category_id = $request->category_id;

        if ($request->hasFile('raffleimage')) {
            $file = $request->file('raffleimage');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Raffles/', $filenamesave);
            $raffle->raffleimage = $filenamesave;
        } else {
            return $request;
            $raffle->raffleimage = '';
        }

        $raffle->save();
        return redirect('manageraffle')->with('status', 'Raffle Item Successfully Added!');
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
    public function edit(Raffle $raffle)
    {
        $brands = Brand::all();
        $categoryraffles = RaffleCategory::all();
        return view('/raffles/editraffle', compact('brands', 'categoryraffles', 'raffle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raffle $raffle)
    {

        if ($request->hasFile('raffleimage')) {
            $file = $request->file('raffleimage');
            $filenameWithoutExt = $file->getClientOriginalName();
            $filenamesave = $filenameWithoutExt;
            $file->storeAs('public/images/Raffles/', $filenamesave);
            $raffle->raffleimage = $filenamesave;
        } else {
            return $request;
            $raffle->raffleimage = '';
        }

        Raffle::where('id', $raffle->id)->update([
            'rafflename' => $request->rafflename,
            'raffledescription' => $request->raffledescription,
            'raffleprice' => $request->raffleprice,
            'raffleimage' => $raffle->raffleimage,
            'rafflequantity' => $request->rafflequantity,
            'rafflereleasedate' => $request->rafflereleasedate,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id
        ]);

        return redirect('manageraffle')->with('status', 'Product Raffle successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raffle $raffle)
    {
        Raffle::destroy($raffle->id);

        return redirect('manageraffle')->with('status', 'Product Raffle successfully deleted!');
    }
}
