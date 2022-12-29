<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {   
        $carts = Cart::all();
        return view('cart', compact('carts'));
    }

    public function detailcart($id)
    {
        $cart = Cart::where('id', $id)->first();
        return view('detail_cart', compact('cart'));
    }
}
