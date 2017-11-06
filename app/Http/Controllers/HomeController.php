<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check())
        {
            $uID = \Auth::user()->id;
            $products = Product::where('id', '=', $uID)->orderBy('id', 'desc')->get();
        }
        return view('home',
            compact(
                'products'
            )    
        );
    }
}
