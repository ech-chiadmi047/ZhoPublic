<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catering;
use App\Models\Company;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Suggestion;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;



class HomeAuthControllerSupplier extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function all()
    {
        $user = Auth::user();
        
        // COMPANY
        $company0 = collect();
        $company1 = collect();
        $company2 = collect();
        $company3 = collect();
        $company4 = collect();
        $company5 = collect();
        $company6 = collect();
        $company7 = collect();
        $company8 = collect();
        $company9 = collect();
        // PLACE
        $place0 = collect();
        $place1 = collect();
        $place2 = collect();
        $place3 = collect();
        $place4 = collect();
        $place5 = collect();
        $place6 = collect();
        $place7 = collect();
        $place8 = collect();
        $place9 = collect();
        // SUGGESTION
        $suggestion0 = collect();
        $suggestion1 = collect();
        $suggestion2 = collect();
        $suggestion3 = collect();
        $suggestion4 = collect();
        $suggestion5 = collect();
        $suggestion6 = collect();
        $suggestion7 = collect();
        $suggestion8 = collect();
        $suggestion9 = collect();
        // EQUIPMENT
        $equipment0 = collect();
        $equipment1 = collect();
        $equipment2 = collect();
        $equipment3 = collect();
        $equipment4 = collect();
        $equipment5 = collect();
        $equipment6 = collect();
        $equipment7 = collect();
        $equipment8 = collect();
        $equipment9 = collect();
        // ENTERTAINMENT
        $entertainment0 = collect();
        $entertainment1 = collect();
        $entertainment2 = collect();
        $entertainment3 = collect();
        $entertainment4 = collect();
        $entertainment5 = collect();
        $entertainment6 = collect();
        $entertainment7 = collect();
        $entertainment8 = collect();
        $entertainment9 = collect();
        // CATERING
        $catering0 = collect();
        $catering1 = collect();
        $catering2 = collect();
        $catering3 = collect();
        $catering4 = collect();
        $catering5 = collect();
        $catering6 = collect();
        $catering7 = collect();
        $catering8 = collect();
        $catering9 = collect();
        $types=['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour'];

        if ($user->preferences()->first()->Wedding == 1) {
            $company0 = Company::where('type', 'Wedding')->get();
            $place0 = Place::where('type', 'Wedding')->get();
            $suggestion0 = Suggestion::where('type', 'Wedding')->get();
            $equipment0 = Equipment::where('type', 'Wedding')->get();
            $entertainment0 = Entertainment::where('type', 'Wedding')->get();
            $catering0 = Catering::where('type', 'Wedding')->get();
        }
        if ($user->preferences()->first()->Art == 1) {
            $company1 = Company::where('type', 'Art')->get();
            $place1 = Place::where('type', 'Art')->get();
            $suggestion1 = Suggestion::where('type', 'Art')->get();
            $equipment1 = Equipment::where('type', 'Art')->get();
            $entertainment1 = Entertainment::where('type', 'Art')->get();
            $catering1 = Catering::where('type', 'Art')->get();
        }
        if ($user->preferences()->first()->Sport == 1) {
            $company2 = Company::where('type', 'Sport')->get();
            $place2 = Place::where('type', 'Sport')->get();
            $suggestion2 = Suggestion::where('type', 'Sport')->get();
            $equipment2 = Equipment::where('type', 'Sport')->get();
            $entertainment2 = Entertainment::where('type', 'Sport')->get();
            $catering2 = Catering::where('type', 'Sport')->get();
        }
        if ($user->preferences()->first()->Party == 1) {
            $company3 = Company::where('type', 'Party')->get();
            $place3 = Place::where('type', 'Party')->get();
            $suggestion3 = Suggestion::where('type', 'Party')->get();
            $equipment3 = Equipment::where('type', 'Party')->get();
            $entertainment3 = Entertainment::where('type', 'Party')->get();
            $catering3 = Catering::where('type', 'Party')->get();
        }
        if ($user->preferences()->first()->Birthday == 1) {
            $company4 = Company::where('type', 'Birthday')->get();
            $place4 = Place::where('type', 'Birthday')->get();
            $suggestion4 = Suggestion::where('type', 'Birthday')->get();
            $equipment4 = Equipment::where('type', 'Birthday')->get();
            $entertainment4 = Entertainment::where('type', 'Birthday')->get();
            $catering4 = Catering::where('type', 'Birthday')->get();
        }
        if ($user->preferences()->first()->Music == 1) {
            $company5 = Company::where('type', 'Music')->get();
            $place5 = Place::where('type', 'Music')->get();
            $suggestion5 = Suggestion::where('type', 'Music')->get();
            $equipment5 = Equipment::where('type', 'Music')->get();
            $entertainment5 = Entertainment::where('type', 'Music')->get();
            $catering5 = Catering::where('type', 'Music')->get();
        }
        if ($user->preferences()->first()->{'Worshop or Class'} == 1) {
            $company6 = Company::where('type', 'Worshop or Class')->get();
            $place6 = Place::where('type', 'Worshop or Class')->get();
            $suggestion6 = Suggestion::where('type', 'Worshop or Class')->get();
            $equipment6 = Equipment::where('type', 'Worshop or Class')->get();
            $entertainment6 = Entertainment::where('type', 'Worshop or Class')->get();
            $catering6 = Catering::where('type', 'Worshop or Class')->get();
        }
        if ($user->preferences()->first()->Conference == 1) {
            $company7 = Company::where('type', 'Conference')->get();
            $place7 = Place::where('type', 'Conference')->get();
            $suggestion7 = Suggestion::where('type', 'Conference')->get();
            $equipment7 = Equipment::where('type', 'Conference')->get();
            $entertainment7 = Entertainment::where('type', 'Conference')->get();
            $catering7 = Catering::where('type', 'Conference')->get();
        }
        if ($user->preferences()->first()->Trip == 1) {
            $company8 = Company::where('type', 'Trip')->get();
            $place8 = Place::where('type', 'Trip')->get();
            $suggestion8 = Suggestion::where('type', 'Trip')->get();
            $equipment8 = Equipment::where('type', 'Trip')->get();
            $entertainment8 = Entertainment::where('type', 'Trip')->get();
            $catering8 = Catering::where('type', 'Trip')->get();
        }
        if ($user->preferences()->first()->{'Guided tour'} == 1) {
            $company9 = Company::where('type', 'Guided tour')->get();
            $place9 = Place::where('type', 'Guided tour')->get();
            $suggestion9 = Suggestion::where('type', 'Guided tour')->get();
            $equipment9 = Equipment::where('type', 'Guided tour')->get();
            $entertainment9 = Entertainment::where('type', 'Guided tour')->get();
            $catering9 = Catering::where('type', 'Guided tour')->get();
        }
        $companys = $company0->merge($company1)->merge($company2)->merge($company3)->merge($company4)->merge($company5)->merge($company6)->merge($company7)->merge($company8)->merge($company9);
        $suggestions = $suggestion0->merge($suggestion1)->merge($suggestion2)->merge($suggestion3)->merge($suggestion4)->merge($suggestion5)->merge($suggestion6)->merge($suggestion7)->merge($suggestion8)->merge($suggestion9);
        $caterings = $catering0->merge($catering1)->merge($catering2)->merge($catering3)->merge($catering4)->merge($catering5)->merge($catering6)->merge($catering7)->merge($catering8)->merge($catering9)->where('looking_for',1);
        $places = $place0->merge($place1)->merge($place2)->merge($place3)->merge($place4)->merge($place5)->merge($place6)->merge($place7)->merge($place8)->merge($place9)->where('looking_for',1);
        $entertainments = $entertainment0->merge($entertainment1)->merge($entertainment2)->merge($entertainment3)->merge($entertainment4)->merge($entertainment5)->merge($entertainment6)->merge($entertainment7)->merge($entertainment8)->merge($entertainment9)->where('looking_for',1);
        $equipments = $equipment0->merge($equipment1)->merge($equipment2)->merge($equipment3)->merge($equipment4)->merge($equipment5)->merge($equipment6)->merge($equipment7)->merge($equipment8)->merge($equipment9)->where('looking_for',1);
        return view('home-auth.supplier.index',compact('suggestions','companys','caterings','places','entertainments','equipments'));
        
    }
    public function company()
    {
        $companys=Company::paginate(12);
        return view('home-auth.supplier.company',compact('companys'));
    }
    public function catering()
    {
        $caterings=Catering::where('looking_for',true)->paginate(12);
        return view('home-auth.supplier.catering',compact('caterings'));
    }
    public function equipment()
    {
        $equipments=Equipment::where('looking_for',true)->paginate(12);
        return view('home-auth.supplier.equipment',compact('equipments'));
    }
    public function entertainment()
    {
        $entertainments=Entertainment::where('looking_for',true)->paginate(12);
        return view('home-auth.supplier.entertainment',compact('entertainments'));
    }
    public function place()
    {
        $places=Place::where('looking_for',true)->paginate(12);
        return view('home-auth.supplier.place',compact('places'));
    }
    public function suggestion()
    {
        $suggestions=Suggestion::paginate(12);
        return view('home-auth.supplier.suggestion',compact('suggestions'));
    }
    public function post()
    {
        return view('home-auth.supplier.post-create');
    }
    public function hurray()
    {
        return view('home-auth.supplier.hurray');
    }
}
