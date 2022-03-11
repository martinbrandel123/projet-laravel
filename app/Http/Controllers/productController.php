<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProductController extends Controller 
{
    public function show()
    {
        return view('product-details');
    }

    public function show_id($id)
    {   
       // $id = ['id' => $id,];
        return view('product-list', ['id' => $id]);
    }
}