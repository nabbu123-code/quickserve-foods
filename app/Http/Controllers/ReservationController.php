<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        Reservation::create([
            'user_id' => Auth::id(),
            'reservation_date' => $request->date,
            'reservation_time' => $request->time,
            'guests' => $request->guests
        ]);

        return back()
        ->with('success','Reservation Booked');
    }
}
