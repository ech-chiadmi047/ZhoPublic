<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuggestionReplyRequest;
use App\Http\Requests\UpdateSuggestionReplyRequest;
use App\Models\SuggestionReply;
use Illuminate\Http\Request;


class SuggestionReplyController extends Controller
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

        $reply = new SuggestionReply;
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
        $reply=SuggestionReply::find($id);
        
        $reply->delete();

        return back()->with('success','Deleted successfully');
    }
}
