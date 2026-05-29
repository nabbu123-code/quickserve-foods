<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function index()
{
    $items = MenuItem::all();

    return view(
    'admin.menu.index',
    compact('items'));
}


    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view(
    'admin.menu.create');
}
    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    MenuItem::create($request->all());

    return redirect()
    ->route('menu-items.index');
}

    /**
     * Display the specified resource.
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuItem $menuItem)
{
    return view(
    'admin.menu.edit',
    compact('menuItem'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(
Request $request,
MenuItem $menuItem)
{
    $menuItem->update(
    $request->all());

    return back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menuItem)
{
    $menuItem->delete();

    return back();
}
}
