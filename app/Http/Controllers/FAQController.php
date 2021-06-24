<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::all();
        return view('pages/faq', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/faq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'about' => 'required',
        //     'image' => 'required'
        // ]);

        // $faq = new FAQ();
        // $faq->title =  $request->title;
        // $faq->about =  $request->about;
        // // $faq->image =  $request->image;

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $filenameWithoutExt = $file->getClientOriginalName();
        //     $filenamesave = $filenameWithoutExt;
        //     $file->storeAs('public/images/FAQs/', $filenamesave);
        //     $faq->image = $filenamesave;

        // } else {
        //     return $request;
        //     $faq->image = '';
        // }

        // $faq->save();
        // return redirect('')->with('status', 'FAQ Topic Successfully Added);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $fAQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $fAQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $fAQ)
    {
        //
    }
}
