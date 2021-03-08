<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('preventBackHistory');
    }

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

        if($request->search == 'animals' || $request->search == 'animal' ){
            $products = Category::where('slug', 'animals')->firstOrFail()->products;
        }else if($request->search == 'book' || $request->search =='books'){
            $products = Category::where('slug', 'books')->firstOrFail()->products;
        }else if($request->search == 'amuseable' || $request->search =='amuseables'){
            $products = Category::where('slug', 'amuseables')->firstOrFail()->products;
        }else if($request->search == 'rabbit' || $request->search =='rabbits'){
            $products = Product::where('slug', 'like', '%bunny%')->get();
        }
        else{
            $products = Product::where('slug', 'like', '%' . $request->search . '%')
            ->orWhere('slug', 'like', '%' . Str::singular($request->search) . '%')
            ->get();
        }
  
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
