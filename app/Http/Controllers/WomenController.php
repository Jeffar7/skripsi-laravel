<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function tops()
    {
        return view('/womenpage/tops');
    }

    public function bottoms()
    {
        return view('/womenpage/bottoms');
    }

    public function shoes()
    {
        return view('/womenpage/shoes');
    }

    public function accessories()
    {
        return view('/womenpage/accessories');
    }

    public function new()
    {
        return view('/womenpage/new');
    }

    public function sale()
    {
        return view('/womenpage/sale');
    }
}
