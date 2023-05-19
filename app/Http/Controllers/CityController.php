<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Models\Fav;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }
    public function create()
    {
        return view('admin.city.create');
    }

    public function store(CityRequest $request)
    {
        $city = new City();
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $new_file = time() . $filename;
            $request->image->move('images/city', $new_file);
            $city->image = $new_file;
        }
        $city->name = $request->name;
        $city->slug = $request->name;
        $city->info = $request->info;
        $city->save();
        return redirect()->route('city.index')->with('success', 'تم إضافة مدينة بنجاح');
    }
    public function like(Request $request)
    {
        $check_like = Fav::where('user_id', auth()->user()->id)->where('city_id', $request->city_id)->exists();

        if ($check_like) {
            return back()->with('info', 'تم إضافة هذه المدينة سابقاً في مفضلتك');
        } else {
            Fav::create([
                'like' => 1,
                'user_id' => auth()->user()->id,
                'city_id' => $request->city_id,
            ]);
        }
        return back()->with('success', 'تم تسجيل إعجابك بنجاح');
    }
}
