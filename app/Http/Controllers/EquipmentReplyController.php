<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipmentReplyRequest;
use App\Http\Requests\UpdateEquipmentReplyRequest;
use App\Models\EquipmentReply;
use Illuminate\Http\Request;


class EquipmentReplyController extends Controller
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

        $reply = new EquipmentReply;
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
        $reply=EquipmentReply::find($id);
        
        $reply->delete();

        return back()->with('success','Deleted successfully');
    }
}
