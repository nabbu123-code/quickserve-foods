<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);

        return view('checkout', compact('cart'));
    }

    public function placeOrder()
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach($cart as $item)
        {
            $total += $item['price'] * $item['quantity'];
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'Pending'
        ]);

        foreach($cart as $id => $item)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'menu_item_id' => $id,
                'quantity' => $item['quantity']
            ]);
        }

        session()->forget('cart');

        return redirect()->route('order.success');
    }
}
