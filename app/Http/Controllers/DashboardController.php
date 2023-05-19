<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Place;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.dashboard');
    }

    public function adminHome()
    {
        $city_count = City::count();
        $place_count = Place::count();
        return view('admin.dashboard', compact('city_count', 'place_count'));
    }
}
