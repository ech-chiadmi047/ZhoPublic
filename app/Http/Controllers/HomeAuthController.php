<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catering;
use App\Models\Company;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Suggestion;
use App\Models\Place;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;



class HomeAuthController extends Controller
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
        $caterings = $catering0->merge($catering1)->merge($catering2)->merge($catering3)->merge($catering4)->merge($catering5)->merge($catering6)->merge($catering7)->merge($catering8)->merge($catering9)->where('displaying',1);
        $places = $place0->merge($place1)->merge($place2)->merge($place3)->merge($place4)->merge($place5)->merge($place6)->merge($place7)->merge($place8)->merge($place9)->where('displaying',1);
        $entertainments = $entertainment0->merge($entertainment1)->merge($entertainment2)->merge($entertainment3)->merge($entertainment4)->merge($entertainment5)->merge($entertainment6)->merge($entertainment7)->merge($entertainment8)->merge($entertainment9)->where('displaying',1);
        $equipments = $equipment0->merge($equipment1)->merge($equipment2)->merge($equipment3)->merge($equipment4)->merge($equipment5)->merge($equipment6)->merge($equipment7)->merge($equipment8)->merge($equipment9)->where('displaying',1);
        return view('home-auth.index',compact('suggestions','companys','caterings','places','entertainments','equipments'));
    }
    public function company()
    {
        $companys=Company::paginate(12);
        return view('home-auth.company',compact('companys'));
    }
    public function catering()
    {
        $caterings=Catering::where('displaying',true)->paginate(12);
        return view('home-auth.catering',compact('caterings'));
    }
    public function equipment()
    {
        $equipments=Equipment::where('displaying',true)->paginate(12);
        return view('home-auth.equipment',compact('equipments'));
    }
    public function entertainment()
    {
        $entertainments=Entertainment::where('displaying',true)->paginate(12);
        return view('home-auth.entertainment',compact('entertainments'));
    }
    public function place()
    {
        $places=Place::where('displaying',true)->paginate(12);
        return view('home-auth.place',compact('places'));
    }
    public function suggestion()
    {
        $suggestions=Suggestion::paginate(12);
        return view('home-auth.suggestion',compact('suggestions'));
    }
    public function post()
    {
        return view('home-auth.post-create');
    }
    public function hurray()
    {
        return view('home-auth.hurray');
    }

    public function search(Request $request)
    {
        
        if ($request->post == "Place") {

            $query=Place::orderBy('updated_at','DESC');

            if ($request->filled('min_price')) {
                $query->where('price', '>=', $request->min_price);
            }
            if ($request->filled('max_price')) {
                $query->where('price', '<=', $request->max_price);
            }
            if ($request->filled('type')) {
                $query->where('type', $request->type);
            }
            if ($request->filled('location')) {
                $query->where('location', $request->location);
            }
            $type=$request->post;
            $posts = $query->get();
            return view('home-auth.search', compact('posts','type'));

        }


        if ($request->post == "Company") {

            $query1=Company::orderBy('updated_at','DESC');

            if ($request->filled('min_price')) {
                $query1->where('price', '>=', $request->min_price);
            }
            if ($request->filled('max_price')) {
                $query1->where('price', '<=', $request->max_price);
            }
            if ($request->filled('type')) {
                $query1->where('type', $request->type);
            }
            if ($request->filled('location')) {
                $query1->where('location', $request->location);
            }
            $type=$request->post;
            $posts = $query1->get();
            return view('home-auth.search', compact('posts','type'));

        }

        if ($request->post == "Equipment") {

            $query2=Equipment::orderBy('updated_at','DESC');

            if ($request->filled('min_price')) {
                $query2->where('price', '>=', $request->min_price);
            }
            if ($request->filled('max_price')) {
                $query2->where('price', '<=', $request->max_price);
            }
            if ($request->filled('type')) {
                $query2->where('type', $request->type);
            }
            if ($request->filled('location')) {
                $query2->where('location', $request->location);
            }
            $type=$request->post;
            $posts = $query2->get();
            return view('home-auth.search', compact('posts','type'));

        }

        if ($request->post == "Suggestion") {

            $query3=Suggestion::orderBy('updated_at','DESC');

            if ($request->filled('min_price')) {
                $query3->where('price', '>=', $request->min_price);
            }
            if ($request->filled('max_price')) {
                $query3->where('price', '<=', $request->max_price);
            }
            if ($request->filled('type')) {
                $query3->where('type', $request->type);
            }
            if ($request->filled('location')) {
                $query3->where('location', $request->location);
            }
            $type=$request->post;
            $posts = $query3->get();
            return view('home-auth.search', compact('posts','type'));

        }

        if ($request->post == "Catering") {

            $query4=Catering::orderBy('updated_at','DESC');

            if ($request->filled('min_price')) {
                $query4->where('price', '>=', $request->min_price);
            }
            if ($request->filled('max_price')) {
                $query4->where('price', '<=', $request->max_price);
            }
            if ($request->filled('type')) {
                $query4->where('type', $request->type);
            }
            if ($request->filled('location')) {
                $query4->where('location', $request->location);
            }
            $type=$request->post;
            $posts = $query4->get();
            return view('home-auth.search', compact('posts','type'));

        }

        if ($request->post == "Entertainment") {

            $query5=Entertainment::orderBy('updated_at','DESC');

            if ($request->filled('min_price')) {
                $query5->where('price', '>=', $request->min_price);
            }
            if ($request->filled('max_price')) {
                $query5->where('price', '<=', $request->max_price);
            }
            if ($request->filled('type')) {
                $query5->where('type', $request->type);
            }
            if ($request->filled('location')) {
                $query5->where('location', $request->location);
            }
            $type=$request->post;
            $posts = $query5->get();
            return view('home-auth.search', compact('posts','type'));

        }

    }

    public function filter(Request $request)
    {
        $query = collect();
        $query1 = collect();
        $query2 = collect();
        $query3 = collect();
        $query4 = collect();
        $query5 = collect();
        // PLACE
        if ($request->place == 1) {

            $query=Place::orderBy('updated_at','DESC');

            if ($request->Rabat == 1) {
                $query->orWhere('location', "Rabat");
            }
            if ($request->Casablanca == 1) {
                $query->orWhere('location', "Casablanca");
            }
            if ($request->Essaouira == 1) {
                $query->orWhere('location', "Essaouira");
            }
            if ($request->Agadir == 1) {
                $query->orWhere('location', "Agadir");
            }
            if ($request->Marrakesh == 1) {
                $query->orWhere('location', "Marrakesh");
            }
            if ($request->Oujda == 1) {
                $query->orWhere('location', "Oujda");
            }
            if ($request->Dakhla == 1) {
                $query->orWhere('location', "Dakhla");
            }
            if ($request->AlHoceima == 1) {
                $query->orWhere('location', "Al Hoceima");
            }
            if ($request->Tangier == 1) {
                $query->orWhere('location', "Tangier");
            }
            if ($request->Ifrane == 1) {
                $query->orWhere('location', "Ifrane");
            }
            if ($request->Sport == 1) {
                $query->orWhere('type', "Sport");
            }
            if ($request->Art == 1) {
                $query->orWhere('type', "Art");
            }
            if ($request->Party == 1) {
                $query->orWhere('type', "Party");
            }
            if ($request->Wedding == 1) {
                $query->orWhere('type', "Wedding");
            }
            if ($request->Birthday == 1) {
                $query->orWhere('type', "Birthday");
            }
            if ($request->Music == 1) {
                $query->orWhere('type', "Music");
            }
            if ($request->WorshoporClass == 1) {
                $query->orWhere('type', "Worshop or Class");
            }
            if ($request->Conference == 1) {
                $query->orWhere('type', "Conference");
            }
            if ($request->Trip == 1) {
                $query->orWhere('type', "Trip");
            }
            if ($request->Guidedtour == 1) {
                $query->orWhere('type', "Guided tour");
            }
        }

        // COMPANY
        if ($request->company == 1) {

            $query1=Company::orderBy('updated_at','DESC');

            if ($request->Rabat == 1) {
                $query1->orWhere('location', "Rabat");
            }
            if ($request->Casablanca == 1) {
                $query1->orWhere('location', "Casablanca");
            }
            if ($request->Essaouira == 1) {
                $query1->orWhere('location', "Essaouira");
            }
            if ($request->Agadir == 1) {
                $query1->orWhere('location', "Agadir");
            }
            if ($request->Marrakesh == 1) {
                $query1->orWhere('location', "Marrakesh");
            }
            if ($request->Oujda == 1) {
                $query1->orWhere('location', "Oujda");
            }
            if ($request->Dakhla == 1) {
                $query1->orWhere('location', "Dakhla");
            }
            if ($request->AlHoceima == 1) {
                $query1->orWhere('location', "Al Hoceima");
            }
            if ($request->Tangier == 1) {
                $query1->orWhere('location', "Tangier");
            }
            if ($request->Ifrane == 1) {
                $query1->orWhere('location', "Ifrane");
            }
            if ($request->Sport == 1) {
                $query1->orWhere('type', "Sport");
            }
            if ($request->Art == 1) {
                $query1->orWhere('type', "Art");
            }
            if ($request->Party == 1) {
                $query1->orWhere('type', "Party");
            }
            if ($request->Wedding == 1) {
                $query1->orWhere('type', "Wedding");
            }
            if ($request->Birthday == 1) {
                $query1->orWhere('type', "Birthday");
            }
            if ($request->Music == 1) {
                $query1->orWhere('type', "Music");
            }
            if ($request->WorshoporClass == 1) {
                $query1->orWhere('type', "Worshop or Class");
            }
            if ($request->Conference == 1) {
                $query1->orWhere('type', "Conference");
            }
            if ($request->Trip == 1) {
                $query1->orWhere('type', "Trip");
            }
            if ($request->Guidedtour == 1) {
                $query1->orWhere('type', "Guided tour");
            }
        }

        // ENTERTAINMENT
        if ($request->entertainment == 1) {

            $query2=Entertainment::orderBy('updated_at','DESC');

            if ($request->Rabat == 1) {
                $query2->orWhere('location', "Rabat");
            }
            if ($request->Casablanca == 1) {
                $query2->orWhere('location', "Casablanca");
            }
            if ($request->Essaouira == 1) {
                $query2->orWhere('location', "Essaouira");
            }
            if ($request->Agadir == 1) {
                $query2->orWhere('location', "Agadir");
            }
            if ($request->Marrakesh == 1) {
                $query2->orWhere('location', "Marrakesh");
            }
            if ($request->Oujda == 1) {
                $query2->orWhere('location', "Oujda");
            }
            if ($request->Dakhla == 1) {
                $query2->orWhere('location', "Dakhla");
            }
            if ($request->AlHoceima == 1) {
                $query2->orWhere('location', "Al Hoceima");
            }
            if ($request->Tangier == 1) {
                $query2->orWhere('location', "Tangier");
            }
            if ($request->Ifrane == 1) {
                $query2->orWhere('location', "Ifrane");
            }
            if ($request->Sport == 1) {
                $query2->orWhere('type', "Sport");
            }
            if ($request->Art == 1) {
                $query2->orWhere('type', "Art");
            }
            if ($request->Party == 1) {
                $query2->orWhere('type', "Party");
            }
            if ($request->Wedding == 1) {
                $query2->orWhere('type', "Wedding");
            }
            if ($request->Birthday == 1) {
                $query2->orWhere('type', "Birthday");
            }
            if ($request->Music == 1) {
                $query2->orWhere('type', "Music");
            }
            if ($request->WorshoporClass == 1) {
                $query2->orWhere('type', "Worshop or Class");
            }
            if ($request->Conference == 1) {
                $query2->orWhere('type', "Conference");
            }
            if ($request->Trip == 1) {
                $query2->orWhere('type', "Trip");
            }
            if ($request->Guidedtour == 1) {
                $query2->orWhere('type', "Guided tour");
            }
        }

        // EQUIPMENT
        if ($request->equipment == 1) {

            $query3=Equipment::orderBy('updated_at','DESC');

            if ($request->Rabat == 1) {
                $query3->orWhere('location', "Rabat");
            }
            if ($request->Casablanca == 1) {
                $query3->orWhere('location', "Casablanca");
            }
            if ($request->Essaouira == 1) {
                $query3->orWhere('location', "Essaouira");
            }
            if ($request->Agadir == 1) {
                $query3->orWhere('location', "Agadir");
            }
            if ($request->Marrakesh == 1) {
                $query3->orWhere('location', "Marrakesh");
            }
            if ($request->Oujda == 1) {
                $query3->orWhere('location', "Oujda");
            }
            if ($request->Dakhla == 1) {
                $query3->orWhere('location', "Dakhla");
            }
            if ($request->AlHoceima == 1) {
                $query3->orWhere('location', "Al Hoceima");
            }
            if ($request->Tangier == 1) {
                $query3->orWhere('location', "Tangier");
            }
            if ($request->Ifrane == 1) {
                $query3->orWhere('location', "Ifrane");
            }
            if ($request->Sport == 1) {
                $query3->orWhere('type', "Sport");
            }
            if ($request->Art == 1) {
                $query3->orWhere('type', "Art");
            }
            if ($request->Party == 1) {
                $query3->orWhere('type', "Party");
            }
            if ($request->Wedding == 1) {
                $query3->orWhere('type', "Wedding");
            }
            if ($request->Birthday == 1) {
                $query3->orWhere('type', "Birthday");
            }
            if ($request->Music == 1) {
                $query3->orWhere('type', "Music");
            }
            if ($request->WorshoporClass == 1) {
                $query3->orWhere('type', "Worshop or Class");
            }
            if ($request->Conference == 1) {
                $query3->orWhere('type', "Conference");
            }
            if ($request->Trip == 1) {
                $query3->orWhere('type', "Trip");
            }
            if ($request->Guidedtour == 1) {
                $query3->orWhere('type', "Guided tour");
            }
        }

        // CATERING
        if ($request->catering == 1) {

            $query4=Catering::orderBy('updated_at','DESC');

            if ($request->Rabat == 1) {
                $query4->orWhere('location', "Rabat");
            }
            if ($request->Casablanca == 1) {
                $query4->orWhere('location', "Casablanca");
            }
            if ($request->Essaouira == 1) {
                $query4->orWhere('location', "Essaouira");
            }
            if ($request->Agadir == 1) {
                $query4->orWhere('location', "Agadir");
            }
            if ($request->Marrakesh == 1) {
                $query4->orWhere('location', "Marrakesh");
            }
            if ($request->Oujda == 1) {
                $query4->orWhere('location', "Oujda");
            }
            if ($request->Dakhla == 1) {
                $query4->orWhere('location', "Dakhla");
            }
            if ($request->AlHoceima == 1) {
                $query4->orWhere('location', "Al Hoceima");
            }
            if ($request->Tangier == 1) {
                $query4->orWhere('location', "Tangier");
            }
            if ($request->Ifrane == 1) {
                $query4->orWhere('location', "Ifrane");
            }
            if ($request->Sport == 1) {
                $query4->orWhere('type', "Sport");
            }
            if ($request->Art == 1) {
                $query4->orWhere('type', "Art");
            }
            if ($request->Party == 1) {
                $query4->orWhere('type', "Party");
            }
            if ($request->Wedding == 1) {
                $query4->orWhere('type', "Wedding");
            }
            if ($request->Birthday == 1) {
                $query4->orWhere('type', "Birthday");
            }
            if ($request->Music == 1) {
                $query4->orWhere('type', "Music");
            }
            if ($request->WorshoporClass == 1) {
                $query4->orWhere('type', "Worshop or Class");
            }
            if ($request->Conference == 1) {
                $query4->orWhere('type', "Conference");
            }
            if ($request->Trip == 1) {
                $query4->orWhere('type', "Trip");
            }
            if ($request->Guidedtour == 1) {
                $query4->orWhere('type', "Guided tour");
            }
        }

        // SUGGESTION
        if ($request->suggestion == 1) {

            $query5=Suggestion::orderBy('updated_at','DESC');

            if ($request->Rabat == 1) {
                $query5->orWhere('location', "Rabat");
            }
            if ($request->Casablanca == 1) {
                $query5->orWhere('location', "Casablanca");
            }
            if ($request->Essaouira == 1) {
                $query5->orWhere('location', "Essaouira");
            }
            if ($request->Agadir == 1) {
                $query5->orWhere('location', "Agadir");
            }
            if ($request->Marrakesh == 1) {
                $query5->orWhere('location', "Marrakesh");
            }
            if ($request->Oujda == 1) {
                $query5->orWhere('location', "Oujda");
            }
            if ($request->Dakhla == 1) {
                $query5->orWhere('location', "Dakhla");
            }
            if ($request->AlHoceima == 1) {
                $query5->orWhere('location', "Al Hoceima");
            }
            if ($request->Tangier == 1) {
                $query5->orWhere('location', "Tangier");
            }
            if ($request->Ifrane == 1) {
                $query5->orWhere('location', "Ifrane");
            }
            if ($request->Sport == 1) {
                $query5->orWhere('type', "Sport");
            }
            if ($request->Art == 1) {
                $query5->orWhere('type', "Art");
            }
            if ($request->Party == 1) {
                $query5->orWhere('type', "Party");
            }
            if ($request->Wedding == 1) {
                $query5->orWhere('type', "Wedding");
            }
            if ($request->Birthday == 1) {
                $query5->orWhere('type', "Birthday");
            }
            if ($request->Music == 1) {
                $query5->orWhere('type', "Music");
            }
            if ($request->WorshoporClass == 1) {
                $query5->orWhere('type', "Worshop or Class");
            }
            if ($request->Conference == 1) {
                $query5->orWhere('type', "Conference");
            }
            if ($request->Trip == 1) {
                $query5->orWhere('type', "Trip");
            }
            if ($request->Guidedtour == 1) {
                $query5->orWhere('type', "Guided tour");
            }
        }
        $places = collect();
        if ($query->count() > 0) {
            $places = $query->get();
        }
        $companys = collect();
        if ($query1->count() > 0) {
            $companys = $query1->get();
        }
        $entertainments = collect();
        if ($query2->count() > 0) {
            $entertainments = $query2->get();
        }
        $equipments = collect();
        if ($query3->count() > 0) {
            $equipments = $query3->get();
        }
        $caterings = collect();
        if ($query4->count() > 0) {
            $caterings = $query4->get();
        }
        $suggestions = collect();
        if ($query5->count() > 0) {
            $suggestions = $query5->get();
        }

        return view('home-auth.filter', compact('places','companys','entertainments','equipments','caterings','suggestions'));

    }

}
