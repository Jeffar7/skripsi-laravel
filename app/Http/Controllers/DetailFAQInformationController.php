<?php

namespace App\Http\Controllers;

use App\DetailFAQInformation;
use App\FAQ;
use Illuminate\Http\Request;

class DetailFAQInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $detailFaqInformations = DetailFAQInformation::all();
        // return view('pages.faqs.faqdetailinfo', compact('detailFaqInformations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailFAQInformation  $detailFAQInformation
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $faq)
    {
        $detailFaqInformations = DetailFAQInformation::where('faqid', '=', $faq->id)->get();
        return view('pages.faqs.faqdetailinfo', compact('detailFaqInformations', 'faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailFAQInformation  $detailFAQInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailFAQInformation $detailFAQInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailFAQInformation  $detailFAQInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailFAQInformation $detailFAQInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailFAQInformation  $detailFAQInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailFAQInformation $detailFAQInformation)
    {
        //
    }
}
