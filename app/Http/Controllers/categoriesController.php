<?php

namespace App\Http\Controllers;
use App\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showIndex()
    {
        $categories=categories::all();
    return view('pharma/index',['categories'=>$categories]);
    }

    // public function showShop()
    // {
    //     $categories=categories::all();
    // return view('pharma/shop',['categories'=>$categories]);
    // }
}
