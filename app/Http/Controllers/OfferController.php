<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function store(Request $request)
    {
        Offer::create([
            'title' => $request->title,
            'discount' => $request->discount
        ]);

        return back();
    }
}
