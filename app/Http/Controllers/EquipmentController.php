<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipmentRequest;
use App\Http\Requests\UpdateEquipmentRequest;
use App\Models\Equipment;
use App\Models\User;
use App\Models\EquipmentComment;
use App\Models\EquipmentImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class EquipmentController extends Controller
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
        $equipments=Equipment::orderBy('updated_at','DESC')->paginate(12);
        return view('equipment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipment.create');
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

        $equipment=Equipment::create($input);

        
        if ($request->hasFile('image')) {
            $uploadPath = 'images/equipment/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $equipment->images()->create([
                'equipment_id'=>$equipment->id,
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
        $equipment=Equipment::find($id);
        $images=EquipmentImage::where("equipment_id",$equipment->id)->get();
        $comments_=EquipmentComment::orderBy('updated_at','DESC')->get();
        $comments=$comments_->where("equipment_id",$equipment->id);
        $user=User::find($equipment->user_id);
        return view('equipment.show',compact('equipment','images','user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipment=Equipment::find($id);
        $images=EquipmentImage::where("equipment_id",$equipment->id)->get();
        $user=User::find($equipment->user_id);
        return view('equipment.edit',compact('equipment','images','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $equipment=Equipment::find($id);

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
            $uploadPath = 'images/equipment/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $equipment->images()->create([
                'equipment_id'=>$equipment->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }

        $input = $request->all();

        $equipment->update($input);

        return back()->with('success','Edited successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipment=Equipment::find($id);
        $images=EquipmentImage::where("equipment_id",$equipment->id)->get();
        $comments=EquipmentComment::where("equipment_id",$equipment->id)->get();
        foreach($comments as $comment){
            $comment->delete();
        }
        foreach($images as $image){
        if (File::exists("images/equipment/".$image->image)) {
           File::delete("images/equipment/".$image->image);
       }
       $image->delete();
        }
        $equipment->delete();

        return back()->with('success','Deleted successfully');
    }    
}
