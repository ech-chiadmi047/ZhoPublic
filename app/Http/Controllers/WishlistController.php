<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Maize\Markable\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Suggestion;
use App\Models\Catering;


class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function wishlist()
    {
        $products = Product::whereHasFavorite(
            auth()->user()
        )->get(); 
        // dd($products);
        return view('dashboard.wishlist',compact('products'));
    }

    public function favoriteAddEntertainment($id)
    {
        $entertainment = Entertainment::find($id);
        $user = auth()->user();
        Favorite::add($entertainment, $user);
        session()->flash('success', 'Added to Favorite Successfully !');

        return back();
    }

    public function favoriteAddCatering($id)
    {
        $catering = Catering::find($id);
        $user = auth()->user();
        Favorite::add($catering, $user);
        session()->flash('success', 'Added to Favorite Successfully !');

        return back();
    }

    public function favoriteAddCompany($id)
    {
        $company = Company::find($id);
        $user = auth()->user();
        Favorite::add($company, $user);
        session()->flash('success', 'Added to Favorite Successfully !');

        return back();
    }

    public function favoriteAddPlace($id)
    {
        $place = Place::find($id);
        $user = auth()->user();
        Favorite::add($place, $user);
        session()->flash('success', 'Added to Favorite Successfully !');

        return back();
    }

    public function favoriteAddSuggestion($id)
    {
        $suggestion = Suggestion::find($id);
        $user = auth()->user();
        Favorite::add($suggestion, $user);
        session()->flash('success', 'Added to Favorite Successfully !');

        return back();
    }

    public function favoriteAddEquipment($id)
    {
        $equipment = Equipment::find($id);
        $user = auth()->user();
        Favorite::add($equipment, $user);
        session()->flash('success', 'Added to Favorite Successfully !');

        return back();
    }


    public function favoriteremoveEntertainment($id)
    {
        $entertainment = Entertainment::find($id);
        $user = auth()->user();
        Favorite::remove($entertainment, $user);
        session()->flash('success', 'removeed to Favorite Successfully !');

        return back();
    }

    public function favoriteremoveCatering($id)
    {
        $catering = Catering::find($id);
        $user = auth()->user();
        Favorite::remove($catering, $user);
        session()->flash('success', 'removeed to Favorite Successfully !');

        return back();
    }

    public function favoriteremoveCompany($id)
    {
        $company = Company::find($id);
        $user = auth()->user();
        Favorite::remove($company, $user);
        session()->flash('success', 'removeed to Favorite Successfully !');

        return back();
    }

    public function favoriteremovePlace($id)
    {
        $place = Place::find($id);
        $user = auth()->user();
        Favorite::remove($place, $user);
        session()->flash('success', 'removeed to Favorite Successfully !');

        return back();
    }

    public function favoriteremoveSuggestion($id)
    {
        $suggestion = Suggestion::find($id);
        $user = auth()->user();
        Favorite::remove($suggestion, $user);
        session()->flash('success', 'removeed to Favorite Successfully !');

        return back();
    }

    public function favoriteremoveEquipment($id)
    {
        $equipment = Equipment::find($id);
        $user = auth()->user();
        Favorite::remove($equipment, $user);
        session()->flash('success', 'removeed to Favorite Successfully !');

        return back();
    }

    
}