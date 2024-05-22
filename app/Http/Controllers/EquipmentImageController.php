<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipmentImageRequest;
use App\Http\Requests\UpdateEquipmentImageRequest;
use App\Models\EquipmentImage;
use Illuminate\Http\Request;


class EquipmentImageController extends Controller
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
    public function store(StoreEquipmentImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EquipmentImage $equipmentImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EquipmentImage $equipmentImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEquipmentImageRequest $request, EquipmentImage $equipmentImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $image = EquipmentImage::find($id);
        $image->delete();

        return back()->with('success','Deleted successfully');
    }
}
