<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntertainmentRequest;
use App\Http\Requests\UpdateEntertainmentRequest;
use App\Models\Entertainment;
use App\Models\EntertainmentComment;
use App\Models\EntertainmentImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class EntertainmentController extends Controller
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
        $entertainments=Entertainment::orderBy('updated_at','DESC')->paginate(12);
        return view('entertainment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'desc' => 'required', 
            'user_id' => 'required',
            'num' => 'required',
            'insta' => 'required',
            'fb' => 'required', 
            'location' => 'required',
            'price' => 'required',
            'date' => 'required',
            'type' => 'required',
        ]);

        $input = $request->all();

        $entertainment=Entertainment::create($input);

        
        if ($request->hasFile('image')) {
            $uploadPath = 'images/entertainment/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $entertainment->images()->create([
                'entertainment_id'=>$entertainment->id,
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
        $entertainment=Entertainment::find($id);
        $images=EntertainmentImage::where("entertainment_id",$entertainment->id)->get();
        $comments_=EntertainmentComment::orderBy('updated_at','DESC')->get();
        $comments=$comments_->where("entertainment_id",$entertainment->id);
        $user=User::find($entertainment->user_id);
        return view('entertainment.show',compact('entertainment','images','user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entertainment=Entertainment::find($id);
        $images=EntertainmentImage::where("entertainment_id",$entertainment->id)->get();
        $user=User::find($entertainment->user_id);
        return view('entertainment.edit',compact('entertainment','images','user'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $entertainment=Entertainment::find($id);

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
            $uploadPath = 'images/entertainment/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $entertainment->images()->create([
                'entertainment_id'=>$entertainment->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }

        $input = $request->all();

        $entertainment->update($input);

        return back()->with('success','Edited successfully'); 
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $entertainment=Entertainment::find($id);
        $images=EntertainmentImage::where("entertainment_id",$entertainment->id)->get();
        $comments=EntertainmentComment::where("entertainment_id",$entertainment->id)->get();
        foreach($comments as $comment){
            $comment->delete();
        }
        foreach($images as $image){
        if (File::exists("images/entertainment/".$image->image)) {
           File::delete("images/entertainment/".$image->image);
       }
       $image->delete();
        }
        $entertainment->delete();

        return back()->with('success','Deleted successfully');
    }
}
