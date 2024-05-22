<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntertainmentReplyRequest;
use App\Http\Requests\UpdateEntertainmentReplyRequest;
use App\Models\EntertainmentReply;
use Illuminate\Http\Request;


class EntertainmentReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'reply' => 'required', 
            'user_id' => 'required',
            'comment_id' => 'required',
        ]);

        $reply = new EntertainmentReply;
        $reply->reply = $request->reply;
        $reply->comment_id = $request->comment_id;
        $reply->user_id = $request->user_id;
        $reply->save();
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reply=EntertainmentReply::find($id);
        
        $reply->delete();

        return back()->with('success','Deleted successfully');
    }
}
