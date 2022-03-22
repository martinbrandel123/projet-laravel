<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
//use App\Models\Customer;
//use App\Models\Category;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function displayCatalogue()
    {
        $products = Product::all();
        return view('products.catalogue', [
            'products' => $products
        ]);
    }
    public function displayProduct($id)
    {        
        $product = Product::find($id);
        return view('products.product', [
            'product' => $product,
            'id' => $id,
        ]);
    }
    public function getProductData(Request $request, $id) 
    {
        $product = Product::find($id);
        dd($product->orders[0]->pivot);
        $request->validate([
            'quantity' => "required|integer|min:0|max:$product->quantity",
        ]);
        return view('products.panier');
    }
}