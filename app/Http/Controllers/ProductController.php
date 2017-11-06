<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\CreateProductsRequest;

use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    public function add()
    {
        return view('products.add');
    }

    public function store(CreateProductsRequest $request) {

        $product = new Product;        

        $uID = \Auth::user()->id;
        $product->userID = $uID;

        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->bid = $request->get('bid');

        $date = explode("T", $request->get('date_end'));
        $hour = $date[1];
        $date = $date[0] ;
        $product->date_end = $date . " " . $hour;

        // Check if request has a file in it
        if($request->hasFile('image'))
        {            
            // It does, so set name to a random string with 10 chars
            $fileName = time() .'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('iamges'), $fileName);
            
            $product->image = $fileName;
        }
        else
        {
            $product->image = "NULL";
        }


        $product->save();

        $products = Product::where('userID', '=', $uID)->orderBy('id', 'desc')->get();

        return redirect(
            route(
                'home',
                compact(
                    'products'
                )   
            )
        );

       
    }

    public function detail($id)
    {
        $product = Product::find($id);

        return view(
            'products.detail',
            compact(
                'product'
            )
        );

    }

    public function list()
    {
        $products = Product::all();

        return view(
            'products.buy',
            compact(
                'products'
            )
        );
    }
}
