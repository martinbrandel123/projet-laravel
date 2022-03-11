<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show_product_view()
    {

        $products = DB::select('SELECT * FROM products');
        return view('test', ['products' => $products] );
    }
    //test
    public function show_selected_product_view($id)
    {
        $products = DB::select('SELECT * FROM products where id = :id', ['id' => $id] );
        return view('product_test', ['products' => $products],);
    }
}