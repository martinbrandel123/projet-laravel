<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('backoffice.back_office', [
            'products' =>  $products,
        ]);
    }

    public function displayProduct($id)
    {
        $products = Product::find($id);
        return view('backoffice.back_office_products', [
            'products' =>  $products,
            'id' =>  $id,
        ]);
    } 

    public function editCreate()
    {

        return view('backoffice.back_office_create');
    }

    public function create(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'weight' => 'required',
            'available' => 'required',
            'discount' => 'required',
            'category_id' => 'required',
        ]);


       // $products = Product::all();
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
        return redirect('/backoffice');
        //return view('backoffice.back_office', ['products' => $products]);
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
       return view('backoffice.back_office_edit', [
           'products' => $products,
            'id' => $id
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   

        $request->validate([
            'name' => 'required',
            'price' => 'required|integer|min:0',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect('backoffice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       // $products = Product::all();
        $delete = Product::find($id);
      //  dump($delete);
     //   $deleted = Product::where('id', $id);
     //   dd($deleted);
        $delete->delete();
        return back();
       // return view('backoffice.back_office',['products' => $products]);
    }


    public function test () {

        $category = Product::find(1)->category;
        dd($category);
    }
    public function testPivot($id)
    {
        // $category = Category::find($id); // select * from user where id = $id
        // $category->products // select * from products where category_id = $id$
        // $category->products ==>> collection de products
        $category = Product::find(1)->category;
        dd($category);
        return 'id numero : '. $id;
    }

}
