<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreferenceRequest;
use App\Http\Requests\UpdatePreferenceRequest;
use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Request;


class PreferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preference=Preference::orderBy('updated_at','DESC')->paginate(12);
        return view('preference.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('preference.create');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       /* $request->validate([
            'Sport' => 'required', 
            'Art' => 'required', 
            'Party' => 'required',
            'Wedding' => 'required',
            'Birthday' => 'required',
            'Music' => 'required', 
            'Workshop or Class' => 'required',
            'Conference' => 'required',
            'Trip' => 'required',
            'Guided tour' => 'required',
            'user_id' => 'required',
        ]); */

        $input = $request->all();

        Preference::create($input);

        return view('home-auth.after-register');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $preference=preference::find($id);
        $user=User::find($preference->user_id);
        return view('preference.show',compact('preference','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $preference=preference::find($id);
        return view('preference.edit',compact('preference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'Sport' => 'required', 
            'Art' => 'required', 
            'Party' => 'required',
            'Wedding' => 'required',
            'Birthday' => 'required',
            'Music' => 'required', 
            'Workshop or Class' => 'required',
            'Conference' => 'required',
            'Trip' => 'required',
            'Guided tour' => 'required',
            'user_id' => 'required',
        ]);

        $input = $request->all();

        $preference=Preference::find($id);
        $preference->update($input);

        return view('home.index')->with('success','Edited successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $preference=Preference::find($id);
        $preference->delete();

        return view('home.index')->with('success','Deleted successfully');
    }
}
