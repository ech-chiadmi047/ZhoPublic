<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
use App\Models\Catering;
use App\Models\Company;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Suggestion;
use App\Models\Place;
use App\Models\CateringComment;
use App\Models\CompanyComment;
use App\Models\EntertainmentComment;
use App\Models\EquipmentComment;
use App\Models\SuggestionComment;
use App\Models\PlaceComment;
use App\Models\Message;
use App\Models\User;
use App\Models\Verification;
use Maize\Markable\Models\Favorite;
use DB;
use Illuminate\Database\Eloquent\Model;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    { 
        $suggestion=Suggestion::all()->count();
        $company=Company::all()->count();
        $catering=Catering::all()->count();
        $place=Place::all()->count();
        $entertainment=Entertainment::all()->count();
        $equipment=Equipment::all()->count();
        $suggestioncomment=SuggestionComment::all()->count();
        $companycomment=CompanyComment::all()->count();
        $cateringcomment=CateringComment::all()->count();
        $placecomment=PlaceComment::all()->count();
        $entertainmentcomment=EntertainmentComment::all()->count();
        $equipmentcomment=EquipmentComment::all()->count();
        $comment=$suggestioncomment+$companycomment+$cateringcomment+$placecomment+$entertainmentcomment+$equipmentcomment;
        $message=Message::all()->count();
        // BY TYPE
        $suggestion_Art=Suggestion::where('type','Art')->count();
        $company_Art=Company::where('type','Art')->count();
        $catering_Art=Catering::where('type','Art')->count();
        $place_Art=Place::where('type','Art')->count();
        $entertainment_Art=Entertainment::where('type','Art')->count();
        $equipment_Art=Equipment::where('type','Art')->count();
        $Art = $suggestion_Art+$company_Art+$catering_Art+$place_Art+$entertainment_Art+$equipment_Art;
        // 
        $suggestion_Sport=Suggestion::where('type','Sport')->count();
        $company_Sport=Company::where('type','Sport')->count();
        $catering_Sport=Catering::where('type','Sport')->count();
        $place_Sport=Place::where('type','Sport')->count();
        $entertainment_Sport=Entertainment::where('type','Sport')->count();
        $equipment_Sport=Equipment::where('type','Sport')->count();
        $Sport = $suggestion_Sport+$company_Sport+$catering_Sport+$place_Sport+$entertainment_Sport+$equipment_Sport;
        // 
        $suggestion_Party=Suggestion::where('type','Party')->count();
        $company_Party=Company::where('type','Party')->count();
        $catering_Party=Catering::where('type','Party')->count();
        $place_Party=Place::where('type','Party')->count();
        $entertainment_Party=Entertainment::where('type','Party')->count();
        $equipment_Party=Equipment::where('type','Party')->count();
        $Party = $suggestion_Party+$company_Party+$catering_Party+$place_Party+$entertainment_Party+$equipment_Party;
        // 
        $suggestion_Wedding=Suggestion::where('type','Wedding')->count();
        $company_Wedding=Company::where('type','Wedding')->count();
        $catering_Wedding=Catering::where('type','Wedding')->count();
        $place_Wedding=Place::where('type','Wedding')->count();
        $entertainment_Wedding=Entertainment::where('type','Wedding')->count();
        $equipment_Wedding=Equipment::where('type','Wedding')->count();
        $Wedding = $suggestion_Wedding+$company_Wedding+$catering_Wedding+$place_Wedding+$entertainment_Wedding+$equipment_Wedding;
        // 
        $suggestion_Birthday=Suggestion::where('type','Birthday')->count();
        $company_Birthday=Company::where('type','Birthday')->count();
        $catering_Birthday=Catering::where('type','Birthday')->count();
        $place_Birthday=Place::where('type','Birthday')->count();
        $entertainment_Birthday=Entertainment::where('type','Birthday')->count();
        $equipment_Birthday=Equipment::where('type','Birthday')->count();
        $Birthday = $suggestion_Birthday+$company_Birthday+$catering_Birthday+$place_Birthday+$entertainment_Birthday+$equipment_Birthday;
        // 
        $suggestion_Music=Suggestion::where('type','Music')->count();
        $company_Music=Company::where('type','Music')->count();
        $catering_Music=Catering::where('type','Music')->count();
        $place_Music=Place::where('type','Music')->count();
        $entertainment_Music=Entertainment::where('type','Music')->count();
        $equipment_Music=Equipment::where('type','Music')->count();
        $Music = $suggestion_Music+$company_Music+$catering_Music+$place_Music+$entertainment_Music+$equipment_Music;
        // 
        $suggestion_Conference=Suggestion::where('type','Conference')->count();
        $company_Conference=Company::where('type','Conference')->count();
        $catering_Conference=Catering::where('type','Conference')->count();
        $place_Conference=Place::where('type','Conference')->count();
        $entertainment_Conference=Entertainment::where('type','Conference')->count();
        $equipment_Conference=Equipment::where('type','Conference')->count();
        $Conference = $suggestion_Conference+$company_Conference+$catering_Conference+$place_Conference+$entertainment_Conference+$equipment_Conference;
        // 
        $suggestion_Trip=Suggestion::where('type','Trip')->count();
        $company_Trip=Company::where('type','Trip')->count();
        $catering_Trip=Catering::where('type','Trip')->count();
        $place_Trip=Place::where('type','Trip')->count();
        $entertainment_Trip=Entertainment::where('type','Trip')->count();
        $equipment_Trip=Equipment::where('type','Trip')->count();
        $Trip = $suggestion_Trip+$company_Trip+$catering_Trip+$place_Trip+$entertainment_Trip+$equipment_Trip;
        // 
        $suggestion_Tour=Suggestion::where('type','Guided tour')->count();
        $company_Tour=Company::where('type','Guided tour')->count();
        $catering_Tour=Catering::where('type','Guided tour')->count();
        $place_Tour=Place::where('type','Guided tour')->count();
        $entertainment_Tour=Entertainment::where('type','Guided tour')->count();
        $equipment_Tour=Equipment::where('type','Guided tour')->count();
        $Tour = $suggestion_Tour+$company_Tour+$catering_Tour+$place_Tour+$entertainment_Tour+$equipment_Tour;
        // 
        $suggestion_Class=Suggestion::where('type','Worshop or Class')->count();
        $company_Class=Company::where('type','Worshop or Class')->count();
        $catering_Class=Catering::where('type','Worshop or Class')->count();
        $place_Class=Place::where('type','Worshop or Class')->count();
        $entertainment_Class=Entertainment::where('type','Worshop or Class')->count();
        $equipment_Class=Equipment::where('type','Worshop or Class')->count();
        $Class = $suggestion_Class+$company_Class+$catering_Class+$place_Class+$entertainment_Class+$equipment_Class;
        // 
        $user=User::where('verified','1')->count();
        return view('dashboard.index',compact('suggestion','company','catering','place','entertainment','equipment','user','message','comment',
        'Sport','Art','Party','Wedding','Birthday','Music','Class','Conference','Trip','Tour'));
    }
    public function contactus()
    {  
        return view('dashboard.contactus');
    }
    public function all_messages()
    {  
        $messages=Message::orderBy('updated_at','DESC')->paginate(12);
        return view('dashboard.all-messages',compact('messages'));
    }
    public function all_posts()
    {  
        $suggestions=Suggestion::orderBy('updated_at','DESC')->get();
        $companys=Company::orderBy('updated_at','DESC')->get();
        $caterings=Catering::orderBy('updated_at','DESC')->get();
        $places=Place::orderBy('updated_at','DESC')->get();
        $entertainments=Entertainment::orderBy('updated_at','DESC')->get();
        $equipments=Equipment::orderBy('updated_at','DESC')->get();
        return view('dashboard.all-posts',compact('suggestions','companys','caterings','places','entertainments','equipments'));
    }
    public function my_messages()
    { 
        $user = Auth::user(); 
        $messages=Message::where('user_id',$user->id)->get();
        return view('dashboard.my-messages',compact('messages'));
    }
    public function posts()
    {  
        $user = Auth::user();
        $suggestions=Suggestion::where('user_id',$user->id)->get();
        $companys=Company::where('user_id',$user->id)->get();
        $caterings=Catering::where('user_id',$user->id)->get();
        $places=Place::where('user_id',$user->id)->get();
        $entertainments=Entertainment::where('user_id',$user->id)->get();
        $equipments=Equipment::where('user_id',$user->id)->get();
        return view('dashboard.posts',compact('suggestions','companys','caterings','places','entertainments','equipments'));
    }
    public function profile()
    {  
        $user = Auth::user();
        return view('dashboard.profile',compact("user"));
    }
    public function verification()
    {  
        $verifications = Verification::whereHas('user', function ($query) {
            $query->where('verified', '=', '0');
        })->get();
        return view('dashboard.verification',compact("verifications"));
    }
    public function wishlist()
    {  
        $suggestions=Suggestion::whereHasFavorite(
            auth()->user()
        )->get(); 
        $companys=Company::whereHasFavorite(
            auth()->user()
        )->get(); 
        $caterings=Catering::whereHasFavorite(
            auth()->user()
        )->get(); 
        $places=Place::whereHasFavorite(
            auth()->user()
        )->get(); 
        $entertainments=Entertainment::whereHasFavorite(
            auth()->user()
        )->get(); 
        $equipments=Equipment::whereHasFavorite(
            auth()->user()
        )->get(); 
        return view('dashboard.wishlist',compact('suggestions','companys','caterings','places','entertainments','equipments'));
    }
}
