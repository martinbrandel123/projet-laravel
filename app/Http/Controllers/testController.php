<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show_product_view()
    {
        $products = DB::select('SELECT * FROM products');
        return view('test', ['products' => $products] );
    }
    public function show_product_order_by_name() 
    {
        $names = Product::orderBy('name', 'asc')->get();
        return view('products_order_name_by', ['names' => $names]);
    }
    public function show_product_order_by_price()
    {
       $prices = Product::orderBy('price', 'asc')->get();
       return view('show_product_order_by_price', ['prices' => $prices]);
    }
    public function display_products_price_name()
    {
        $products = Product::select('name', 'price')->orderBy('price', 'asc')->get();
        return view('display_products', ['products' => $products]);
    }


    //test
    public function show_selected_product_view($id)
    {
        $products = DB::select('SELECT * FROM products where id = :id', ['id' => $id] );
        return view('product_test', ['products' => $products]);
    }

}