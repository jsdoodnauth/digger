<?php

namespace App\Http\Controllers;

use App\Models\SourceListItem;
use Illuminate\Http\Request;

class SourceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sourceList = SourceListItem::all();
        return view('sourcelist', ['sourcelist' => $sourceList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sourcelist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        SourceListItem::create($data);
        return redirect('/sourcelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SourceListItem  $sourceListItem
     * @return \Illuminate\Http\Response
     */
    public function show(SourceListItem $sourceListItem)
    {
        $sourceList = SourceListItem::find($sourceListItem->id);
        return view('sourcelist.show', ['sourcelist' => $sourceList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SourceListItem  $sourceListItem
     * @return \Illuminate\Http\Response
     */
    public function edit(SourceListItem $sourceListItem)
    {
        return view('sourcelist.edit', ['sourcelist' => $sourceListItem]);
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
        $sourceListItem = SourceListItem::where('id', $request->id)->first();
        $sourceListItem->update($request->all());
        return redirect('/sourcelist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SourceListItem  $sourceListItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SourceListItem $sourceListItem)
    {
        $sourceListItem->delete();
        return redirect('/sourcelist');
    }
}
