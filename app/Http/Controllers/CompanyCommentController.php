<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyCommentRequest;
use App\Http\Requests\UpdateCompanyCommentRequest;
use App\Models\CompanyComment;
use Illuminate\Http\Request;
use App\Models\Notification;



class CompanyCommentController extends Controller
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
            'company_id' => 'required',
        ]);

        $comment = new CompanyComment;
        $comment->comment = $request->comment;
        $comment->company_id = $request->company_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        $notification = new Notification;
        $notification->user_id = $comment->user_id;
        $notification->company_id = $comment->company_id;
        $notification->notification = 'commented on your post';
        $notification->save();
        
        return back()->with('success','Published successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment=CompanyComment::find($id);
        
        $comment->delete();

        return back()->with('success','Deleted successfully');
    }
}
