<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuggestionRequest;
use App\Http\Requests\UpdateSuggestionRequest;
use App\Models\Suggestion;
use App\Models\User;
use App\Models\SuggestionImage;
use App\Models\SuggestionComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class SuggestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suggestions=Suggestion::orderBy('updated_at','DESC')->paginate(12);
        return view('suggestion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suggestion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required', 
            'desc' => 'required', 
            'user_id' => 'required',
            'num' => 'required',
            'insta' => 'required',
            'fb' => 'required', 
            'location' => 'required',
            'price' => 'required',
            'date' => 'required',
            'typeDetails' => 'required',
            'type' => 'required',
        ]);

        $suggestion = new Suggestion;
        $suggestion->title = $request->title;
        $suggestion->desc = $request->desc;
        $suggestion->user_id = $request->user_id;
        $suggestion->num = $request->num;
        $suggestion->insta = $request->insta;
        $suggestion->fb = $request->fb;
        $suggestion->location = $request->location;
        $suggestion->price = $request->price;
        $suggestion->date = $request->date;
        $suggestion->typeDetails = $request->typeDetails;
        $suggestion->type = $request->type;
        $suggestion->save();
        
        
        if ($request->hasFile('image')) {
            $uploadPath = 'images/suggestion/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $suggestion->images()->create([
                'suggestion_id'=>$suggestion->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }
        return view('home-auth.hurray');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $suggestion=Suggestion::find($id);
        $images=SuggestionImage::where("suggestion_id",$suggestion->id)->get();
        $comments_=SuggestionComment::orderBy('updated_at','DESC')->get();
        $comments=$comments_->where("suggestion_id",$suggestion->id);
        $user=User::find($suggestion->user_id);
        return view('suggestion.show',compact('suggestion','images','user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $suggestion=Suggestion::find($id);
        $images=SuggestionImage::where("suggestion_id",$suggestion->id)->get();
        $user=User::find($suggestion->user_id);
        return view('suggestion.edit',compact('suggestion','images','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $suggestion=Suggestion::find($id);

        $request->validate([
            'desc' => 'required', 
            'num' => 'required',
            'insta' => 'required',
            'fb' => 'required', 
            'location' => 'required',
            'price' => 'required',
            'date' => 'required',
            'type' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = 'images/suggestion/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $suggestion->images()->create([
                'suggestion_id'=>$suggestion->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }

        $input = $request->all();

        $suggestion->update($input);

        return back()->with('success','Edited successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $suggestion=Suggestion::find($id);
        $images=SuggestionImage::where("suggestion_id",$suggestion->id)->get();
        $comments=SuggestionComment::where("suggestion_id",$suggestion->id)->get();
        foreach($comments as $comment){
            $comment->delete();
        }
        foreach($images as $image){
        if (File::exists("images/suggestion/".$image->image)) {
           File::delete("images/suggestion/".$image->image);
       }
       $image->delete();
        }
        $suggestion->delete();

        return back()->with('success','Deleted successfully');
    }
}
