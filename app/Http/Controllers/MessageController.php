<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;




class MessageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required', 
            'name' => 'required', 
            'email' => 'required',  
        ]);
        if (Auth::check()) {
            $request->validate([
                'user_id' => 'required', 
            ]);
        }

        $input = $request->all();

        $message=Message::create($input);
        
        if (Auth::check()) {
        $notification = new Notification;
        $notification->user_id = $message->user_id;
        $notification->notification = 'sent a message';
        $notification->save();
        }

        return back()->with('success','Message sent successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message=Message::find($id);
        $message->delete();

        return back()->with('success','Deleted successfully');
    }
}
