<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCateringCommentRequest;
use App\Http\Requests\UpdateCateringCommentRequest;
use App\Models\CateringComment;
use Illuminate\Http\Request;
use App\Models\Notification;



class CateringCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment' => 'required', 
            'user_id' => 'required',
            'catering_id' => 'required',
        ]);

        $comment = new CateringComment;
        $comment->comment = $request->comment;
        $comment->catering_id = $request->catering_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        $notification = new Notification;
        $notification->user_id = $comment->user_id;
        $notification->catering_id = $comment->catering_id;
        $notification->notification = 'commented on your post';
        $notification->save();
        
        return back()->with('success','Published successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=CateringComment::find($id);
        
        $comment->delete();

        return back()->with('success','Deleted successfully');
    }
}
