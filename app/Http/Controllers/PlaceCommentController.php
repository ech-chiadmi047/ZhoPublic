<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaceCommentRequest;
use App\Http\Requests\UpdatePlaceCommentRequest;
use App\Models\PlaceComment;
use Illuminate\Http\Request;
use App\Models\Notification;



class PlaceCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment' => 'required', 
            'user_id' => 'required',
            'place_id' => 'required',
        ]);

        $comment = new PlaceComment;
        $comment->comment = $request->comment;
        $comment->place_id = $request->place_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        $notification = new Notification;
        $notification->user_id = $comment->user_id;
        $notification->place_id = $comment->place_id;
        $notification->notification = 'commented on your post';
        $notification->save();
        
        return back()->with('success','Published successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=PlaceComment::find($id);
        
        $comment->delete();

        return back()->with('success','Deleted successfully');
    }
}
