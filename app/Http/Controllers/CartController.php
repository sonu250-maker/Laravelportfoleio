<?php

namespace App\Http\Controllers;
use App\Models\cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {

    Cart::create([
    'product_name' => $request->product_name,
    'price' => $request->price,
    'quantity' => $request->quantity,
     'image' => $request->image 
             ]);
         
             return redirect('/dashboard')->with('success', 'Product added to cart!');
    }

    public function showcart()
    {
     $cartItems = Cart::all();
     return view('cart',compact( 'cartItems'));
    }

    public function delete($id)
{
    $cartItem = Cart::findOrFail($id);
    $cartItem->delete();

    return redirect('/cart')->with('success', 'Item deleted successfully!');
}
public function clearCart()
{
    DB::table('carts')->truncate(); // WARNING: This deletes all records permanently!
    
    return redirect('/cart')->with('success', 'Cart cleared successfully!');
}

}
