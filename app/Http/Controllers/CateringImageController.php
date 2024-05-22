<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCateringImageRequest;
use App\Http\Requests\UpdateCateringImageRequest;
use App\Models\CateringImage;
use Illuminate\Http\Request;


class CateringImageController extends Controller
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
    public function store(StoreCateringImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CateringImage $cateringImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CateringImage $cateringImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCateringImageRequest $request, CateringImage $cateringImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $image = CateringImage::find($id);
        $image->delete();

        return back()->with('success','Deleted successfully');
    }
}
