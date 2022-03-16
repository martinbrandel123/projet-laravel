<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backoffice.back_office', ['products' =>  $products]);
    }

    public function displayProduct($id)
    {
        $products = Product::find($id);
        return view('backoffice.back_office_products', ['products' =>  $products], ['id' =>  $id]);
    } 

    public function editCreate()
    {
        return view('backoffice.back_office_create');
    }
    public function create(Request $request)
    {   
        $products = Product::all();
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->weight = $request->weight;
        $product->available = $request->available;
        $product->discount = $request->discount;
        $product->category_id = $request->category;
        $product->save();
        return view('backoffice.back_office', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {        
        $products = Product::find($id);

       return view('backoffice.back_office_edit', ['products' => $products], ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $product = Product::find($id);
        $product->name = $request->name;
        $product->save();
        $products = Product::all();
        return view('backoffice.back_office', ['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Product::all();
        $deleted = Product::where('id', $id);
        $deleted->delete();
        //return redirect()->route('backoffice.back_office',['products' => $products]);
        return view('backoffice.back_office',['products' => $products]);
    }
}
