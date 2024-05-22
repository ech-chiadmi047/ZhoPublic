<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaceRequest;
use App\Http\Requests\UpdatePlaceRequest;
use App\Models\Place;
use App\Models\User;
use App\Models\PlaceImage;
use App\Models\PlaceComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class PlaceController extends Controller
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
        $places=Place::orderBy('updated_at','DESC')->paginate(12);
        return view('place.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('place.create');
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

        $place=Place::create($input);
        
        
        if ($request->hasFile('image')) {
            $uploadPath = 'images/place/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $place->images()->create([
                'place_id'=>$place->id,
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
        $place=Place::find($id);
        $images=PlaceImage::where("place_id",$place->id)->get();
        $comments_=PlaceComment::orderBy('updated_at','DESC')->get();
        $comments=$comments_->where("place_id",$place->id);
        $user=User::find($place->user_id);
        return view('place.show',compact('place','images','user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $place=Place::find($id);
        $images=PlaceImage::where("place_id",$place->id)->get();
        $user=User::find($place->user_id);
        return view('place.edit',compact('place','images','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $place=Place::find($id);

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
            $uploadPath = 'images/place/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=rand(1,900).'_'.time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $place->images()->create([
                'place_id'=>$place->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }

        $input = $request->all();

        $place->update($input);

        return back()->with('success','Edited successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $place=Place::find($id);
        $images=PlaceImage::where("place_id",$place->id)->get();
        $comments=PlaceComment::where("place_id",$place->id)->get();
        foreach($comments as $comment){
            $comment->delete();
        }
        foreach($images as $image){
        if (File::exists("images/place/".$image->image)) {
           File::delete("images/place/".$image->image);
       }
       $image->delete();
        }
        $place->delete();

        return back()->with('success','Deleted successfully');
    }
}
