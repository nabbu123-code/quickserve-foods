<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::latest()->get();

    return view('admin.orders',
    compact('orders'));
}

public function updateStatus(
Request $request,
Order $order)
{
    $order->status =
    $request->status;

    $order->save();

    return back();
}
}
