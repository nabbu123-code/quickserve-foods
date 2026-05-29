<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Reservation;

class AdminController extends Controller
{
    public function analytics()
    {
        $totalUsers = User::count();

        $totalOrders = Order::count();

        $totalRevenue = Order::sum('total');

        $totalReservations = Reservation::count();

        return view(
            'admin.analytics',
            compact(
                'totalUsers',
                'totalOrders',
                'totalRevenue',
                'totalReservations'
            )
        );
    }
}
