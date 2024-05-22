<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCateringRequest;
use App\Http\Requests\UpdateCateringRequest;
use App\Models\Catering;
use App\Models\User;
use App\Models\CateringImage;
use App\Models\CateringComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

 


class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caterings=Catering::orderBy('updated_at','DESC')->paginate(12);
        return view('catering.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catering.create');
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

        $catering=Catering::create($input);


        if ($request->hasFile('image')) {
            $uploadPath = 'images/catering/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $catering->images()->create([
                'catering_id'=>$catering->id,
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
        $catering=Catering::find($id);
        $images=CateringImage::where("catering_id",$catering->id)->get();
        $comments_=CateringComment::orderBy('updated_at','DESC')->get();
        $comments=$comments_->where("catering_id",$catering->id);
        $user=User::find($catering->user_id);
        return view('catering.show',compact('catering','images','user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $catering=Catering::find($id);
        $images=CateringImage::where("catering_id",$catering->id)->get();
        $user=User::find($catering->user_id);
        return view('catering.edit',compact('catering','images','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $catering=Catering::find($id);

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
            $uploadPath = 'images/catering/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $catering->images()->create([
                'catering_id'=>$catering->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }

        $input = $request->all();

        $catering->update($input);

        return back()->with('success','Edited successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $catering=Catering::find($id);
        $images=CateringImage::where("catering_id",$catering->id)->get();
        $comments=CateringComment::where("catering_id",$catering->id)->get();
        foreach($comments as $comment){
            $comment->delete();
        }
        foreach($images as $image){
        if (File::exists("images/catering/".$image->image)) {
           File::delete("images/catering/".$image->image);
       }
       $image->delete();
        }
        $catering->delete();

        return back()->with('success','Deleted successfully');
    }
}
