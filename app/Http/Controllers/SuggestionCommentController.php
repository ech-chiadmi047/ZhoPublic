<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuggestionCommentRequest;
use App\Http\Requests\UpdateSuggestionCommentRequest;
use App\Models\SuggestionComment;
use Illuminate\Http\Request;
use App\Models\Notification;



class SuggestionCommentController extends Controller
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
            'suggestion_id' => 'required',
        ]);

        $comment = new SuggestionComment;
        $comment->comment = $request->comment;
        $comment->suggestion_id = $request->suggestion_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        $notification = new Notification;
        $notification->user_id = $comment->user_id;
        $notification->suggestion_id = $comment->suggestion_id;
        $notification->notification = 'commented on your post';
        $notification->save();
        
        return back()->with('success','Published successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=SuggestionComment::find($id);
        
        $comment->delete();

        return back()->with('success','Deleted successfully');
    }
}
