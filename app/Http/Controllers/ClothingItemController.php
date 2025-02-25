<?php

namespace App\Http\Controllers;

use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClothingItem::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);
        return ClothingItem::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClothingItem  $clothingItem
     * @return \Illuminate\Http\Response
     */
    public function show(ClothingItem $clothingItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClothingItem  $clothingItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ClothingItem $clothingItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClothingItem  $clothingItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClothingItem $clothingItem)
    {
        $clothingItem->update($request->all());
        return $clothingItem;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClothingItem  $clothingItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClothingItem $clothingItem)
    {
        $clothingItem->delete();
        return response()->json(['message' => 'Deleted']);
        //
    }
}
