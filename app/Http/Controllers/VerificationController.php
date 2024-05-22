<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verification;
use App\Models\User;
use App\Models\Notification;
use Auth;



class VerificationController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.verify');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required', 
            'file' => 'required',
        ]);

        
        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'pdf/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }

        $verification = Verification::create($input);
        $notification = new Notification;
        $notification->user_id = Auth::user()->id;
        $notification->notification = 'wants to verify their account';
        $notification->save();

        return redirect()->route('my_profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $verification=Verification::find($id);
        return view('verification.show',compact('verification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->verified = '1';
        $user->save();
        $notification = new Notification;
        $notification->user_id = $user->id;
        $notification->notification = 'Your account is verified';
        $notification->save();
        
        return back()->with('success','User Verified')->with('success','Verificated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
