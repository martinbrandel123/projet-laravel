<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function show()
    {
        return view('cart');
    }
}