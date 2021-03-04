<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product.show')->with([
            'product'=>$product
        ]);
    }

    public function searchProducts(Request $request){

        $request->validate([
            'search' => 'required|min:2'
        ]);

        $products = Product::where('slug', 'like', '%' . $request->search . '%')->get();
        if(count($products)){
            return view('pages.searchResultPage')->with([
                'products'=>$products
            ]);
        }else{
            return view('pages.searchResultPage')->with([
                'products'=>null,
            ]);
        }
    }

   



}
