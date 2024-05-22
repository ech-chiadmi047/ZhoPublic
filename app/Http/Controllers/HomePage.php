<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catering;
use App\Models\Company;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Suggestion;
use App\Models\Place;

class HomePage extends Controller
{
    public function home()
    {
        return view('home.index');
    }
    public function company()
    {
        $companys=Company::all()->take(3);
        return view('home.company',compact("companys"));
    }
    public function catering()
    {
        $caterings=Catering::all()->take(3);
        return view('home.catering',compact("caterings"));
    }
    public function equipment()
    {
        $equipments=Equipment::all()->take(3);
        return view('home.equipment',compact("equipments"));
    }
    public function entertainment()
    {
        $entertainments=Entertainment::all()->take(3);
        return view('home.entertainment',compact("entertainments"));
    }
    public function place()
    {
        $places=Place::all()->take(3);
        return view('home.place',compact("places"));
    }
    public function suggestion()
    {
        $suggestions=Suggestion::all()->take(3);
        return view('home.suggestion',compact("suggestions"));
    }
    public function aboutus()
    {
        $companys=Company::all()->take(3);
        return view('home.aboutus',compact("companys"));
    }
}
