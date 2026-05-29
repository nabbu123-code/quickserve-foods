<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function add($id)
    {
        $item = MenuItem::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }
        else
        {
            $cart[$id] = [
                "name" => $item->name,
                "price" => $item->price,
                "quantity" => 1,
                "image" => $item->image
            ];
        }

        session()->put('cart',$cart);

        return redirect()->back();
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        unset($cart[$id]);

        session()->put('cart',$cart);

        return redirect()->back();
    }

    public function update(Request $request,$id)
    {
        $cart = session()->get('cart', []);

        $cart[$id]['quantity'] = $request->quantity;

        session()->put('cart',$cart);

        return redirect()->back();
    }
}
