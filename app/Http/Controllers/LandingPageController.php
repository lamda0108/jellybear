<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        $animals = Product::where('category_id', '1')->get();
        return view('pages.landingPage')->with([
            'animals'=>$animals
        ]);
    }
}
