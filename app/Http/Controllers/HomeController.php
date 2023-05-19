<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Fav;
use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $cities = City::all();
        $places = Place::all();
        return view('home', compact('cities', 'places'));
    }
    public function map()
    {
        return view('map');
    }
    public function blogs()
    {
        return view('blogs');
    }
    public function products()
    {
        return view('products');
    }
    public function contact()
    {
        return view('contact');
    }
}
