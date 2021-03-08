<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('pages.userPage')->with([
            'user'=>$user
        ]);
    }
}
