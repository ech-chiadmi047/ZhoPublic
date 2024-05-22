<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipmentCommentRequest;
use App\Http\Requests\UpdateEquipmentCommentRequest;
use App\Models\EquipmentComment;
use Illuminate\Http\Request;
use App\Models\Notification;



class EquipmentCommentController extends Controller
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
            'equipment_id' => 'required',
        ]);

        $comment = new EquipmentComment;
        $comment->comment = $request->comment;
        $comment->equipment_id = $request->equipment_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        $notification = new Notification;
        $notification->user_id = $comment->user_id;
        $notification->equipment_id = $comment->equipment_id;
        $notification->notification = 'commented on your post';
        $notification->save();
        
        return back()->with('success','Published successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=EquipmentComment::find($id);
        
        $comment->delete();

        return back()->with('success','Deleted successfully');
    }
}
