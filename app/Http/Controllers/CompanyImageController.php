<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyImageRequest;
use App\Http\Requests\UpdateCompanyImageRequest;
use App\Models\CompanyImage;
use Illuminate\Http\Request;


class CompanyImageController extends Controller
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
    public function store(StoreCompanyImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyImage $companyImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyImage $companyImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyImageRequest $request, CompanyImage $companyImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $image = CompanyImage::find($id);
        $image->delete();

        return back()->with('success','Deleted successfully');
    }
}
