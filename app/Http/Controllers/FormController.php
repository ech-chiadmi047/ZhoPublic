<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;



class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('profile.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fb' => 'required',
            'insta' => 'required',
            'num' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:4100',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/user/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $user = Auth::user();
        $user->update($input);

        return view('preference.create');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view ('profile.show',compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();
        return view ('profile.edit',compact("user"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'fb' => 'required',
            'insta' => 'required',
            'num' => 'required',
            'desc' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:4100',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/user/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        
        $user->update($input);

        return back()->with('success','Profile updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (File::exists("images/user/".$user->image)) {
            File::delete("images/user/".$user->image);
        }
        $user->delete();

        return view('home.index')->with('success','Deleted successfully');
    }
}
