<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Category;

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
        $order = Order::find($id);
        foreach($order->products as $product) 
        {
            dd($product->pivot);
        }
        $product = Product::find($id);

        return view('products.product', [
            'product' => $product,
            'id' => $id,
        ]);
    }


    public function getProductData(Request $request, $id) 
    {
        $quantity = $request->quantity;
       // dd($request->quantity);
        return redirect('product/'.$id);
    }
}