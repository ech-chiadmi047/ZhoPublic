<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaceImageRequest;
use App\Http\Requests\UpdatePlaceImageRequest;
use App\Models\PlaceImage;
use Illuminate\Http\Request;


class PlaceImageController extends Controller
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
    public function store(StorePlaceImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PlaceImage $placeImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlaceImage $placeImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlaceImageRequest $request, PlaceImage $placeImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $image = PlaceImage::find($id);
        $image->delete();

        return back()->with('success','Deleted successfully');
    }
}
