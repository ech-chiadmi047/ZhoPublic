<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuggestionImageRequest;
use App\Http\Requests\UpdateSuggestionImageRequest;
use App\Models\SuggestionImage;
use Illuminate\Http\Request;


class SuggestionImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSuggestionImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SuggestionImage $suggestionImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuggestionImage $suggestionImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuggestionImageRequest $request, SuggestionImage $suggestionImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $image = SuggestionImage::find($id);
        $image->delete();

        return back()->with('success','Deleted successfully');
    }
}
