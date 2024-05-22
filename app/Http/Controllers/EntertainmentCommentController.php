<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntertainmentCommentRequest;
use App\Http\Requests\UpdateEntertainmentCommentRequest;
use App\Models\EntertainmentComment;
use Illuminate\Http\Request;
use App\Models\Notification;



class EntertainmentCommentController extends Controller
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
            'entertainment_id' => 'required',
        ]);

        $comment = new EntertainmentComment;
        $comment->comment = $request->comment;
        $comment->entertainment_id = $request->entertainment_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        $notification = new Notification;
        $notification->user_id = $comment->user_id;
        $notification->entertainment_id = $comment->entertainment_id;
        $notification->notification = 'commented on your post';
        $notification->save();
        
        return back()->with('success','Published successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=EntertainmentComment::find($id);
        
        $comment->delete();

        return back()->with('success','Deleted successfully');
    }
}
