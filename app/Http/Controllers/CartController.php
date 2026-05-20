<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
   
     public function index()
     {
         $items = Cart::instance('cart')->content();
         return view('cart', compact('items'));
     }

     public function add_to_cart(Request $request)
     {
         $product_id = $request->input('id');
         $product_name = $request->input('name');
         $product_price = $request->input('price');
         $quantity = $request->input('quantity', 1);

        Cart::instance('cart')->add($product_id, $product_name, $quantity, $product_price)->associate('App\Models\Product');

         return redirect()->back();
     }
    
}
