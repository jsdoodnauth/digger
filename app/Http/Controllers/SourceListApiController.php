<?php

namespace App\Http\Controllers;

use App\Models\SourceListItem;
use Illuminate\Http\Request;

class SourceListApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sourceList = SourceListItem::all();
        return $sourceList;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SourceListItem  $sourceListItem
     * @return \Illuminate\Http\Response
     */
    public function show(SourceListItem $sourceListItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SourceListItem  $sourceListItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SourceListItem $sourceListItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SourceListItem  $sourceListItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SourceListItem $sourceListItem)
    {
        //
    }
}
