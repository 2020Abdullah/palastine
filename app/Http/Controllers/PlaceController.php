<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Fav;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    public function index()
    {
        $places = Place::all();
        return view('admin.place.index', compact('places'));
    }

    public function create()
    {
        $cities = City::all();
        return view('admin.place.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $place = new Place();
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $new_file = time() . $filename;
            $request->image->move('images/place', $new_file);
            $place->image = $new_file;
        }
        $place->name = $request->name;
        $place->info = $request->info;
        $place->city_id = $request->city_id;
        $place->save();
        return redirect()->route('admin.place.index')->with('success', 'تم إضافة مكان بنجاح');
    }

    public function show(City $city)
    {
        return view('places', compact('city'));
    }

    public function fav()
    {
        $favs = Fav::where('user_id', auth()->user()->id)->get();
        return view('fav', compact('favs'));
    }
}
