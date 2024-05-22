<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\User;
use App\Models\CompanyImage;
use App\Models\CompanyComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class CompanyController extends Controller
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
        $companies=Company::orderBy('updated_at','DESC')->paginate(12);
        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
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
            'participantGender' => 'required',
            'participantDesc' => 'required',
            'participantAge' => 'required',
            'type' => 'required',
        ]);

        $company = new Company;
        $company->title = $request->title;
        $company->desc = $request->desc;
        $company->user_id = $request->user_id;
        $company->num = $request->num;
        $company->insta = $request->insta;
        $company->fb = $request->fb;
        $company->location = $request->location;
        $company->price = $request->price;
        $company->date = $request->date;
        $company->participantGender = $request->participantGender;
        $company->participantDesc = $request->participantDesc;
        $company->participantAge = $request->participantAge;
        $company->type = $request->type;
        $company->save();
        
        
        if ($request->hasFile('image')) {
            $uploadPath = 'images/company/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $company->images()->create([
                'company_id'=>$company->id,
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
        $company=Company::find($id);
        $images=CompanyImage::where("company_id",$company->id)->get();
        $user=User::find($company->user_id);
        $comments_=CompanyComment::orderBy('updated_at','DESC')->get();
        $comments=$comments_->where("company_id",$company->id);
        return view('company.show',compact('company','images','user','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company=Company::find($id);
        $images=CompanyImage::where("company_id",$company->id)->get();
        $user=User::find($company->user_id);
        return view('company.edit',compact('company','images','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $company=Company::find($id);

        $request->validate([
            'desc' => 'required', 
            'num' => 'required',
            'insta' => 'required',
            'fb' => 'required', 
            'location' => 'required',
            'price' => 'required',
            'date' => 'required',
            'participantGender' => 'required',
            'participantDesc' => 'required',
            'participantAge' => 'required',
            'type' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = 'images/company/';
           
        foreach ($request->file('image') as $imagefile) {
            $extention =$imagefile->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $imagefile->move($uploadPath, $filename);
            $finalImagePathName=$filename;

            $company->images()->create([
                'company_id'=>$company->id,
                'image'=>$finalImagePathName,
            ]);
        } 
        }

        $input = $request->all();

        $company->update($input);

        return back()->with('success','Edited successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company=Company::find($id);
        $images=CompanyImage::where("company_id",$company->id)->get();
        $comments=CompanyComment::where("company_id",$company->id)->get();
        foreach($comments as $comment){
            $comment->delete();
        }
        foreach($images as $image){
        if (File::exists("images/company/".$image->image)) {
           File::delete("images/company/".$image->image);
       }
       $image->delete();
        }
        $company->delete();

        return back()->with('success','Deleted successfully');
    }   
}
