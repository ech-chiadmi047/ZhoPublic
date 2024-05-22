<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntertainmentImageRequest;
use App\Http\Requests\UpdateEntertainmentImageRequest;
use App\Models\EntertainmentImage;
use Illuminate\Http\Request;


class EntertainmentImageController extends Controller
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
    public function store(StoreEntertainmentImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EntertainmentImage $entertainmentImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EntertainmentImage $entertainmentImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntertainmentImageRequest $request, EntertainmentImage $entertainmentImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $image = EntertainmentImage::find($id);
        $image->delete();

        return back()->with('success','Deleted successfully');
    }
}
